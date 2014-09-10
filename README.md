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
<B>Get Tenant Information</B><br>
$tenantResource = new TenantResource(new ApiContext());<br>
$tenant = $tenantResource->getTenant([tenantId]);<br>
<br>
<B>Get Products</B><br>
$apiContext = new ApiContext($tenant);<br>
<B>Note:</B> You might need to create an API Context with a specific Mastercatalog or catalogId if you own a multi-catalog tenant<br>
$productResource = new ProductResource($apiContext, DataViewMode::LIVE);<br>
$productCollection = $productResource->getProducts( 0, 200);<br>
<br>
<B>Get Orders - Filter by date</B><br>
$orderResource = new OrderResource($apiContext);<br>
$filters = urlencode("submittedDate+gt+2013-12-15T12:21:24z");<br>
$orders = $orderResource->getOrders('0',100, null,$filters, null, null);<br>


<br>
See Mozu.Api\Tests for more examples
