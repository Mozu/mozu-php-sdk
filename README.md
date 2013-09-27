php-mozu-api
============

PHP SDK for the full v1 Mozu Api


Usage:
	<B>Authenticating an Application with server provided refresh interval tokens</B>
	Authentication::initialize("<AppID>","<Shared Secret>",static::$baseUrl);
	
	<B>Authenticating an Application with Custom refresh token intervals</B>
	$refreshInterval = new RefreshInterval();
	$currentTime = time();
	
	$refreshInterval->setAccessTokenExpirationInterval($currentTime+5) //In Seconds
	->setRefreshTokenExpirationInterval($currentTime+20); //In Seconds
	Authentication::initialize("<AppID>","<Shared Secret>",static::$baseUrl, $refreshInterval);
	
	

	<B>Querying for tenants</B>