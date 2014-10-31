<?php

namespace Mozu\Api\Resource\Commerce\Catalog\Admin;

require_once __DIR__ . '/../../../../../../BaseTest.php';

use Mozu\Tests\BaseTest;
use Mozu\Api\Resources\Commerce\Catalog\Admin\ProductResource;
use Mozu\Api\Resources\Platform\TenantResource;
use Mozu\Api\ApiContext;
use Mozu\Api\DataViewMode;
use Mozu\Api\ApiException;

/**
 * Test class for ProductResource.
 * Generated by PHPUnit on 2013-09-25 at 15:38:56.
 */
class ProductResourceTest extends BaseTest
{
    /**
     * @var ProductResource
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
    	$apiContext = new ApiContext($this->tenantId,0,1,0);
        $this->object = new ProductResource($apiContext, DataViewMode::LIVE);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Mozu\Api\Resources\Commerce\Catalog\Admin\ProductResource::getProducts
     * @todo Implement testGetProducts().
     */
    public function testGetProducts()
    {
    	try {
	       $productCollection = $this->object->getProducts(0, 200);
            $this->assertNotNull($productCollection->items);
            $this->assertNotNull($productCollection->pageCount);
    	} catch(ApiException $ex) {
    		//echo $ex->getMessage();
    	}
       //var_dump($productCollection);
    }

    
}
?>
