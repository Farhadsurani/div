<?php

use Faker\Factory as Faker;
use App\Models\Testimonial;
use App\Repositories\Admin\TestimonialRepository;

trait MakeTestimonialTrait
{
    /**
     * Create fake instance of Testimonial and save it in database
     *
     * @param array $testimonialFields
     * @return Testimonial
     */
    public function makeTestimonial($testimonialFields = [])
    {
        /** @var TestimonialRepository $testimonialRepo */
        $testimonialRepo = App::make(TestimonialRepository::class);
        $theme = $this->fakeTestimonialData($testimonialFields);
        return $testimonialRepo->create($theme);
    }

    /**
     * Get fake instance of Testimonial
     *
     * @param array $testimonialFields
     * @return Testimonial
     */
    public function fakeTestimonial($testimonialFields = [])
    {
        return new Testimonial($this->fakeTestimonialData($testimonialFields));
    }

    /**
     * Get fake data of Testimonial
     *
     * @param array $postFields
     * @return array
     */
    public function fakeTestimonialData($testimonialFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'name' => $fake->word,
            'designation' => $fake->word,
            'comment' => $fake->text,
            'created_at' => $fake->date('Y-m-d H:i:s'),
            'updated_at' => $fake->date('Y-m-d H:i:s'),
            'deleted_at' => $fake->date('Y-m-d H:i:s')
        ], $testimonialFields);
    }
}
