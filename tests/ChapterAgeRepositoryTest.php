<?php

use App\Models\ChapterAge;
use App\Repositories\Admin\ChapterAgeRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ChapterAgeRepositoryTest extends TestCase
{
    use MakeChapterAgeTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var ChapterAgeRepository
     */
    protected $chapterAgeRepo;

    public function setUp()
    {
        parent::setUp();
        $this->chapterAgeRepo = App::make(ChapterAgeRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateChapterAge()
    {
        $chapterAge = $this->fakeChapterAgeData();
        $createdChapterAge = $this->chapterAgeRepo->create($chapterAge);
        $createdChapterAge = $createdChapterAge->toArray();
        $this->assertArrayHasKey('id', $createdChapterAge);
        $this->assertNotNull($createdChapterAge['id'], 'Created ChapterAge must have id specified');
        $this->assertNotNull(ChapterAge::find($createdChapterAge['id']), 'ChapterAge with given id must be in DB');
        $this->assertModelData($chapterAge, $createdChapterAge);
    }

    /**
     * @test read
     */
    public function testReadChapterAge()
    {
        $chapterAge = $this->makeChapterAge();
        $dbChapterAge = $this->chapterAgeRepo->find($chapterAge->id);
        $dbChapterAge = $dbChapterAge->toArray();
        $this->assertModelData($chapterAge->toArray(), $dbChapterAge);
    }

    /**
     * @test update
     */
    public function testUpdateChapterAge()
    {
        $chapterAge = $this->makeChapterAge();
        $fakeChapterAge = $this->fakeChapterAgeData();
        $updatedChapterAge = $this->chapterAgeRepo->update($fakeChapterAge, $chapterAge->id);
        $this->assertModelData($fakeChapterAge, $updatedChapterAge->toArray());
        $dbChapterAge = $this->chapterAgeRepo->find($chapterAge->id);
        $this->assertModelData($fakeChapterAge, $dbChapterAge->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteChapterAge()
    {
        $chapterAge = $this->makeChapterAge();
        $resp = $this->chapterAgeRepo->delete($chapterAge->id);
        $this->assertTrue($resp);
        $this->assertNull(ChapterAge::find($chapterAge->id), 'ChapterAge should not exist in DB');
    }
}
