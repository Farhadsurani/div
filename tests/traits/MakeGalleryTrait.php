<?php

use Faker\Factory as Faker;
use App\Models\Gallery;
use App\Repositories\Admin\GalleryRepository;

trait MakeGalleryTrait
{
    /**
     * Create fake instance of Gallery and save it in database
     *
     * @param array $galleryFields
     * @return Gallery
     */
    public function makeGallery($galleryFields = [])
    {
        /** @var GalleryRepository $galleryRepo */
        $galleryRepo = App::make(GalleryRepository::class);
        $theme = $this->fakeGalleryData($galleryFields);
        return $galleryRepo->create($theme);
    }

    /**
     * Get fake instance of Gallery
     *
     * @param array $galleryFields
     * @return Gallery
     */
    public function fakeGallery($galleryFields = [])
    {
        return new Gallery($this->fakeGalleryData($galleryFields));
    }

    /**
     * Get fake data of Gallery
     *
     * @param array $postFields
     * @return array
     */
    public function fakeGalleryData($galleryFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'image' => $fake->word,
            'created_at' => $fake->date('Y-m-d H:i:s'),
            'updated_at' => $fake->date('Y-m-d H:i:s'),
            'deleted_at' => $fake->date('Y-m-d H:i:s')
        ], $galleryFields);
    }
}
