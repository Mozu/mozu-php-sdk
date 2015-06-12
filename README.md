# Mozu PHP SDK

PHP SDK for the full v1 Mozu Api

PackageGist: https://packagist.org/packages/mozu/api

## Usage:

### Authenticating an Application with server provided refresh interval tokens
```
$appAuthInfo = new AppAuthInfo();<br>
$appAuthInfo->sharedSecret = [sharedSecret];
$appAuthInfo->applicationId = [applicationId];
AppAuthenticator::initialize($appAuthInfo,null);
```

###Get Tenant Information using Async operation
```
$tenantResource = new TenantResource();
$promise = $tenantResource->getTenantAsync([tenantId]);
$tenant = $promise->wait()->json();
```

###Get Products

```
$apiContext = new ApiContext($tenant);
#You might need to create an API Context with a specific Mastercatalog or catalogId if you own a multi-catalog tenant<br>
$productResource = new ProductResource($apiContext, DataViewMode::LIVE);
$promise = $productResource->getProductsAsync(0, 200, null, null, null, null, null);
$promise->then(function($mozuResult) {
    printf($mozuResult->json()->pageCount);
    printf($mozuResult->json()->items);
    
    printf($mozuResult->correlationId);
}, function($apiException) {
    printf("Exception : code - " . $apiException->getCode() . ", message - " . $apiException->getMessage(). ", correlationid - " . $apiException->getCorrelationId() );
});
```

###Get Orders - Filter by date
```
$orderResource = new OrderResource($apiContext);
$filters = urlencode("submittedDate gt 2013-12-15T12:21:24z");
$promise = $orderResource->getOrdersAsync('0',100, null,$filters, null, null);
$mozuResult = $promise->wait();
$correlation = $mozuResult->correlationId;
$orders = $mozuResult->json()->items;
```

###Get Products - Pool multiple requests
```
$productResource = new ProductResource($apiContext, DataViewMode::LIVE);
$promises = [
    "product1" => $this->object->getProductAsync("product1"),<br>
    "product2" => $this->object->getProductAsync("product2"),<br>
    "product3" => $this->object->getProductAsync("product3")<br>
];
$results = Promise\unwrap($promises);
printf($results["product1"]->json()->productCode);
printf($results["product2"]->json()->productCode);
printf($results["product3"]->json()->productCode);
```
