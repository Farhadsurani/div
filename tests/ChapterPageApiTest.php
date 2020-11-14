<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ChapterPageApiTest extends TestCase
{
    use MakeChapterPageTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateChapterPage()
    {
        $chapterPage = $this->fakeChapterPageData();
        $this->json('POST', '/api/v1/chapterPages', $chapterPage);

        $this->assertApiResponse($chapterPage);
    }

    /**
     * @test
     */
    public function testReadChapterPage()
    {
        $chapterPage = $this->makeChapterPage();
        $this->json('GET', '/api/v1/chapterPages/'.$chapterPage->id);

        $this->assertApiResponse($chapterPage->toArray());
    }

    /**
     * @test
     */
    public function testUpdateChapterPage()
    {
        $chapterPage = $this->makeChapterPage();
        $editedChapterPage = $this->fakeChapterPageData();

        $this->json('PUT', '/api/v1/chapterPages/'.$chapterPage->id, $editedChapterPage);

        $this->assertApiResponse($editedChapterPage);
    }

    /**
     * @test
     */
    public function testDeleteChapterPage()
    {
        $chapterPage = $this->makeChapterPage();
        $this->json('DELETE', '/api/v1/chapterPages/'.$chapterPage->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/chapterPages/'.$chapterPage->id);

        $this->assertResponseStatus(404);
    }
}
