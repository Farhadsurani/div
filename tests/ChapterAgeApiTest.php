<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ChapterAgeApiTest extends TestCase
{
    use MakeChapterAgeTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateChapterAge()
    {
        $chapterAge = $this->fakeChapterAgeData();
        $this->json('POST', '/api/v1/chapterAges', $chapterAge);

        $this->assertApiResponse($chapterAge);
    }

    /**
     * @test
     */
    public function testReadChapterAge()
    {
        $chapterAge = $this->makeChapterAge();
        $this->json('GET', '/api/v1/chapterAges/'.$chapterAge->id);

        $this->assertApiResponse($chapterAge->toArray());
    }

    /**
     * @test
     */
    public function testUpdateChapterAge()
    {
        $chapterAge = $this->makeChapterAge();
        $editedChapterAge = $this->fakeChapterAgeData();

        $this->json('PUT', '/api/v1/chapterAges/'.$chapterAge->id, $editedChapterAge);

        $this->assertApiResponse($editedChapterAge);
    }

    /**
     * @test
     */
    public function testDeleteChapterAge()
    {
        $chapterAge = $this->makeChapterAge();
        $this->json('DELETE', '/api/v1/chapterAges/'.$chapterAge->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/chapterAges/'.$chapterAge->id);

        $this->assertResponseStatus(404);
    }
}
