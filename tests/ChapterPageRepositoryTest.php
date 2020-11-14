<?php

use App\Models\ChapterPage;
use App\Repositories\Admin\ChapterPageRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ChapterPageRepositoryTest extends TestCase
{
    use MakeChapterPageTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var ChapterPageRepository
     */
    protected $chapterPageRepo;

    public function setUp()
    {
        parent::setUp();
        $this->chapterPageRepo = App::make(ChapterPageRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateChapterPage()
    {
        $chapterPage = $this->fakeChapterPageData();
        $createdChapterPage = $this->chapterPageRepo->create($chapterPage);
        $createdChapterPage = $createdChapterPage->toArray();
        $this->assertArrayHasKey('id', $createdChapterPage);
        $this->assertNotNull($createdChapterPage['id'], 'Created ChapterPage must have id specified');
        $this->assertNotNull(ChapterPage::find($createdChapterPage['id']), 'ChapterPage with given id must be in DB');
        $this->assertModelData($chapterPage, $createdChapterPage);
    }

    /**
     * @test read
     */
    public function testReadChapterPage()
    {
        $chapterPage = $this->makeChapterPage();
        $dbChapterPage = $this->chapterPageRepo->find($chapterPage->id);
        $dbChapterPage = $dbChapterPage->toArray();
        $this->assertModelData($chapterPage->toArray(), $dbChapterPage);
    }

    /**
     * @test update
     */
    public function testUpdateChapterPage()
    {
        $chapterPage = $this->makeChapterPage();
        $fakeChapterPage = $this->fakeChapterPageData();
        $updatedChapterPage = $this->chapterPageRepo->update($fakeChapterPage, $chapterPage->id);
        $this->assertModelData($fakeChapterPage, $updatedChapterPage->toArray());
        $dbChapterPage = $this->chapterPageRepo->find($chapterPage->id);
        $this->assertModelData($fakeChapterPage, $dbChapterPage->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteChapterPage()
    {
        $chapterPage = $this->makeChapterPage();
        $resp = $this->chapterPageRepo->delete($chapterPage->id);
        $this->assertTrue($resp);
        $this->assertNull(ChapterPage::find($chapterPage->id), 'ChapterPage should not exist in DB');
    }
}
