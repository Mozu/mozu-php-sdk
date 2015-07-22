<?php


use Mozu\Api\ApiContext;
use Mozu\Api\DataViewMode;
use Mozu\Api\Resources\Content\Documentlists\DocumentResource;
use Mozu\Tests\BaseTest;

/**
 * Test class for DocumentResource.
 * Generated by PHPUnit on 2013-12-05 at 12:22:34.
 */
class DocumentResourceTest extends BaseTest
{
    /**
     * @var DocumentResource
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
    	$apiContext = new ApiContext($this->tenantId, 0, 1, 1);
        $this->object = new DocumentResource($apiContext, DataViewMode::LIVE);
        
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

   
    /**
     * @covers Mozu\Api\Resources\Content\Documentlists\DocumentResource::getDocumentContent
     * @todo Implement testGetDocumentContent().
     */
    public function testGetDocumentContent()
    {
        try {
            $mozuResult = $this->object->getDocumentContentAsync("files@mozu","c0e31b00-0a36-445d-94e2-8c8b670739b4")->wait();
            file_put_contents("c:\\files\\phpdownload.jpg", $mozuResult->body);
        } catch(\Exception $e) {
            parent::printError($e);
            $this->fail($e->getMessage());
        }
    }


    /**
     * @covers Mozu\Api\Resources\Content\Documentlists\DocumentResource::getDocumentContent
     */
    public function testGetDocumentContentNotFound()
    {
        try {
            $mozuResult = $this->object->getDocumentContentAsync("files@mozu","d2e80a00-40f9-4f89-a065-b6a27db2b4c3")->wait();

           $this->assertNull($mozuResult->json());
        } catch(\Exception $e) {
            parent::printError($e);
            $this->fail($e->getMessage());
        }
    }


    public function testUpdateDocumentContent() {
        $file = file_get_contents("C:\\files\\phpdownload.jpg");
        $promise = $this->object->updateDocumentContentAsync($file, "files@mozu", "a487bccd-7ee3-4fef-af9b-91b454559f7d", "image/jpg");
        $promise->then(function($mozuResult){
            printf($mozuResult->correlationId);
        }, function($apiException){
            parent::printError($apiException);
            $this->fail($apiException->getMessage());
        });
        $promise->wait();
   	}
}
?>
