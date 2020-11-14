<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TestimonialApiTest extends TestCase
{
    use MakeTestimonialTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateTestimonial()
    {
        $testimonial = $this->fakeTestimonialData();
        $this->json('POST', '/api/v1/testimonials', $testimonial);

        $this->assertApiResponse($testimonial);
    }

    /**
     * @test
     */
    public function testReadTestimonial()
    {
        $testimonial = $this->makeTestimonial();
        $this->json('GET', '/api/v1/testimonials/'.$testimonial->id);

        $this->assertApiResponse($testimonial->toArray());
    }

    /**
     * @test
     */
    public function testUpdateTestimonial()
    {
        $testimonial = $this->makeTestimonial();
        $editedTestimonial = $this->fakeTestimonialData();

        $this->json('PUT', '/api/v1/testimonials/'.$testimonial->id, $editedTestimonial);

        $this->assertApiResponse($editedTestimonial);
    }

    /**
     * @test
     */
    public function testDeleteTestimonial()
    {
        $testimonial = $this->makeTestimonial();
        $this->json('DELETE', '/api/v1/testimonials/'.$testimonial->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/testimonials/'.$testimonial->id);

        $this->assertResponseStatus(404);
    }
}
