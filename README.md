php-mozu-api
============

PHP SDK for the full v1 Mozu Api

PackageGist: https://packagist.org/packages/mozu/api

Usage:

<B>Authenticating an Application with server provided refresh interval tokens</B><br>
$appAuthInfo = new AppAuthInfo();<br>
$appAuthInfo->sharedSecret = [sharedSecret];<br>
$appAuthInfo->applicationId = [applicationId];<br>
AppAuthenticator::initialize($appAuthInfo,null);<br>
<br>
<B>Get Tenant Information using Async operation</B><br>
$tenantResource = new TenantResource();<br>
$promise = $tenantResource->getTenantAsync([tenantId]);<br>
$tenant = $promise->wait()->json();
<br>
<B>Get Products</B><br>
$apiContext = new ApiContext($tenant);<br>
<B>Note:</B> You might need to create an API Context with a specific Mastercatalog or catalogId if you own a multi-catalog tenant<br>
$productResource = new ProductResource($apiContext, DataViewMode::LIVE);<br>
$promise = $productResource->getProductsAsync(0, 200, null, null, null, null, null);<br>
$promise->then(function($mozuResult) {<br>
    printf($mozuResult->json()->pageCount);<br>
    printf($mozuResult->json()->items);<br>
    <br>
    printf($mozuResult->correlationId);<br>
}, function($apiException) {<br>
    printf("Exception : code - " . $apiException->getCode() . ", message - " . $apiException->getMessage(). ", correlationid - " . $apiException->getCorrelationId() );
});
<br>
<B>Get Orders - Filter by date</B><br>
$orderResource = new OrderResource($apiContext);<br>
$filters = urlencode("submittedDate gt 2013-12-15T12:21:24z");<br>
$promise = $orderResource->getOrdersAsync('0',100, null,$filters, null, null);<br>
$mozuResult = $promise->wait();
$correlation = $mozuResult->correlationId;
$orders = $mozuResult->json()->items;

<br>
<B>Get Products - Pool multiple requests</B><br>
$productResource = new ProductResource($apiContext, DataViewMode::LIVE);<br>
$promises = [<br>
    "product1" => $this->object->getProductAsync("product1"),<br>
    "product2" => $this->object->getProductAsync("product2"),<br>
    "product3" => $this->object->getProductAsync("product3")<br>
];<br>
$results = Promise\unwrap($promises);<br>
printf($results["product1"]->json()->productCode);<br>
printf($results["product2"]->json()->productCode);<br>
printf($results["product3"]->json()->productCode);<br>
