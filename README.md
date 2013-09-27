php-mozu-api
============

PHP SDK for the full v1 Mozu Api


Usage:

<B>Authenticating an Application with server provided refresh interval tokens</B><br>
Authentication::initialize("[AppID]","[Shared Secret]","[Mozu URL]");<br>
<br>
<B>Authenticating an Application with Custom refresh token intervals</B><br>
$refreshInterval = new RefreshInterval();<br>
$currentTime = time();<br>
<br>
//In Seconds<br>
$refreshInterval->setAccessTokenExpirationInterval($currentTime+5)<br> 
	->setRefreshTokenExpirationInterval($currentTime+20);<br>
Authentication::initialize("[AppID]","[Shared Secret]","[Mozu URL]", $refreshInterval);<br>
<br>
<B>Querying for tenants</B><br>
$apiContext = new ApiContext();<br>
$apiContext->setBaseUrl(parent::$baseUrl);<br>
$tenantResource = new TenantResource($apiContext);<br>
$tenant = $tenantResource->getTenant([tenantId]);<br>
