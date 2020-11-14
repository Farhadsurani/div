<?php

use App\Models\Gallery;
use App\Repositories\Admin\GalleryRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class GalleryRepositoryTest extends TestCase
{
    use MakeGalleryTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var GalleryRepository
     */
    protected $galleryRepo;

    public function setUp()
    {
        parent::setUp();
        $this->galleryRepo = App::make(GalleryRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateGallery()
    {
        $gallery = $this->fakeGalleryData();
        $createdGallery = $this->galleryRepo->create($gallery);
        $createdGallery = $createdGallery->toArray();
        $this->assertArrayHasKey('id', $createdGallery);
        $this->assertNotNull($createdGallery['id'], 'Created Gallery must have id specified');
        $this->assertNotNull(Gallery::find($createdGallery['id']), 'Gallery with given id must be in DB');
        $this->assertModelData($gallery, $createdGallery);
    }

    /**
     * @test read
     */
    public function testReadGallery()
    {
        $gallery = $this->makeGallery();
        $dbGallery = $this->galleryRepo->find($gallery->id);
        $dbGallery = $dbGallery->toArray();
        $this->assertModelData($gallery->toArray(), $dbGallery);
    }

    /**
     * @test update
     */
    public function testUpdateGallery()
    {
        $gallery = $this->makeGallery();
        $fakeGallery = $this->fakeGalleryData();
        $updatedGallery = $this->galleryRepo->update($fakeGallery, $gallery->id);
        $this->assertModelData($fakeGallery, $updatedGallery->toArray());
        $dbGallery = $this->galleryRepo->find($gallery->id);
        $this->assertModelData($fakeGallery, $dbGallery->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteGallery()
    {
        $gallery = $this->makeGallery();
        $resp = $this->galleryRepo->delete($gallery->id);
        $this->assertTrue($resp);
        $this->assertNull(Gallery::find($gallery->id), 'Gallery should not exist in DB');
    }
}
