<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class GalleryApiTest extends TestCase
{
    use MakeGalleryTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateGallery()
    {
        $gallery = $this->fakeGalleryData();
        $this->json('POST', '/api/v1/galleries', $gallery);

        $this->assertApiResponse($gallery);
    }

    /**
     * @test
     */
    public function testReadGallery()
    {
        $gallery = $this->makeGallery();
        $this->json('GET', '/api/v1/galleries/'.$gallery->id);

        $this->assertApiResponse($gallery->toArray());
    }

    /**
     * @test
     */
    public function testUpdateGallery()
    {
        $gallery = $this->makeGallery();
        $editedGallery = $this->fakeGalleryData();

        $this->json('PUT', '/api/v1/galleries/'.$gallery->id, $editedGallery);

        $this->assertApiResponse($editedGallery);
    }

    /**
     * @test
     */
    public function testDeleteGallery()
    {
        $gallery = $this->makeGallery();
        $this->json('DELETE', '/api/v1/galleries/'.$gallery->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/galleries/'.$gallery->id);

        $this->assertResponseStatus(404);
    }
}
