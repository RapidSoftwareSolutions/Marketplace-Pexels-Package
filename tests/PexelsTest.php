<?php
namespace Tests;

require_once(__DIR__ . '/../src/Models/checkRequest.php');

class PexelsTest extends BaseTestCase
{
    /**
     * @dataProvider dataProvider
     */
    public function testRoutes($url) {
        $response = $this->runApp("POST", '/api/Pexels/'.$url);

        $this->assertEquals(200, $response->getStatusCode());
    }

    public function dataProvider() {
        return [
            ['searchPhotos'],
            ['getPopularPhotos'],
        ];
    }
}