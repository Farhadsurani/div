<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AnswerApiTest extends TestCase
{
    use MakeAnswerTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateAnswer()
    {
        $answer = $this->fakeAnswerData();
        $this->json('POST', '/api/v1/answers', $answer);

        $this->assertApiResponse($answer);
    }

    /**
     * @test
     */
    public function testReadAnswer()
    {
        $answer = $this->makeAnswer();
        $this->json('GET', '/api/v1/answers/'.$answer->id);

        $this->assertApiResponse($answer->toArray());
    }

    /**
     * @test
     */
    public function testUpdateAnswer()
    {
        $answer = $this->makeAnswer();
        $editedAnswer = $this->fakeAnswerData();

        $this->json('PUT', '/api/v1/answers/'.$answer->id, $editedAnswer);

        $this->assertApiResponse($editedAnswer);
    }

    /**
     * @test
     */
    public function testDeleteAnswer()
    {
        $answer = $this->makeAnswer();
        $this->json('DELETE', '/api/v1/answers/'.$answer->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/answers/'.$answer->id);

        $this->assertResponseStatus(404);
    }
}
