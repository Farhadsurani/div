<?php

use App\Models\Testimonial;
use App\Repositories\Admin\TestimonialRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TestimonialRepositoryTest extends TestCase
{
    use MakeTestimonialTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var TestimonialRepository
     */
    protected $testimonialRepo;

    public function setUp()
    {
        parent::setUp();
        $this->testimonialRepo = App::make(TestimonialRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateTestimonial()
    {
        $testimonial = $this->fakeTestimonialData();
        $createdTestimonial = $this->testimonialRepo->create($testimonial);
        $createdTestimonial = $createdTestimonial->toArray();
        $this->assertArrayHasKey('id', $createdTestimonial);
        $this->assertNotNull($createdTestimonial['id'], 'Created Testimonial must have id specified');
        $this->assertNotNull(Testimonial::find($createdTestimonial['id']), 'Testimonial with given id must be in DB');
        $this->assertModelData($testimonial, $createdTestimonial);
    }

    /**
     * @test read
     */
    public function testReadTestimonial()
    {
        $testimonial = $this->makeTestimonial();
        $dbTestimonial = $this->testimonialRepo->find($testimonial->id);
        $dbTestimonial = $dbTestimonial->toArray();
        $this->assertModelData($testimonial->toArray(), $dbTestimonial);
    }

    /**
     * @test update
     */
    public function testUpdateTestimonial()
    {
        $testimonial = $this->makeTestimonial();
        $fakeTestimonial = $this->fakeTestimonialData();
        $updatedTestimonial = $this->testimonialRepo->update($fakeTestimonial, $testimonial->id);
        $this->assertModelData($fakeTestimonial, $updatedTestimonial->toArray());
        $dbTestimonial = $this->testimonialRepo->find($testimonial->id);
        $this->assertModelData($fakeTestimonial, $dbTestimonial->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteTestimonial()
    {
        $testimonial = $this->makeTestimonial();
        $resp = $this->testimonialRepo->delete($testimonial->id);
        $this->assertTrue($resp);
        $this->assertNull(Testimonial::find($testimonial->id), 'Testimonial should not exist in DB');
    }
}
