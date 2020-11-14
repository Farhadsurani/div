<?php

use App\Models\Answer;
use App\Repositories\Admin\AnswerRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AnswerRepositoryTest extends TestCase
{
    use MakeAnswerTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var AnswerRepository
     */
    protected $answerRepo;

    public function setUp()
    {
        parent::setUp();
        $this->answerRepo = App::make(AnswerRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateAnswer()
    {
        $answer = $this->fakeAnswerData();
        $createdAnswer = $this->answerRepo->create($answer);
        $createdAnswer = $createdAnswer->toArray();
        $this->assertArrayHasKey('id', $createdAnswer);
        $this->assertNotNull($createdAnswer['id'], 'Created Answer must have id specified');
        $this->assertNotNull(Answer::find($createdAnswer['id']), 'Answer with given id must be in DB');
        $this->assertModelData($answer, $createdAnswer);
    }

    /**
     * @test read
     */
    public function testReadAnswer()
    {
        $answer = $this->makeAnswer();
        $dbAnswer = $this->answerRepo->find($answer->id);
        $dbAnswer = $dbAnswer->toArray();
        $this->assertModelData($answer->toArray(), $dbAnswer);
    }

    /**
     * @test update
     */
    public function testUpdateAnswer()
    {
        $answer = $this->makeAnswer();
        $fakeAnswer = $this->fakeAnswerData();
        $updatedAnswer = $this->answerRepo->update($fakeAnswer, $answer->id);
        $this->assertModelData($fakeAnswer, $updatedAnswer->toArray());
        $dbAnswer = $this->answerRepo->find($answer->id);
        $this->assertModelData($fakeAnswer, $dbAnswer->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteAnswer()
    {
        $answer = $this->makeAnswer();
        $resp = $this->answerRepo->delete($answer->id);
        $this->assertTrue($resp);
        $this->assertNull(Answer::find($answer->id), 'Answer should not exist in DB');
    }
}
