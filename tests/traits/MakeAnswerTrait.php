<?php

use Faker\Factory as Faker;
use App\Models\Answer;
use App\Repositories\Admin\AnswerRepository;

trait MakeAnswerTrait
{
    /**
     * Create fake instance of Answer and save it in database
     *
     * @param array $answerFields
     * @return Answer
     */
    public function makeAnswer($answerFields = [])
    {
        /** @var AnswerRepository $answerRepo */
        $answerRepo = App::make(AnswerRepository::class);
        $theme = $this->fakeAnswerData($answerFields);
        return $answerRepo->create($theme);
    }

    /**
     * Get fake instance of Answer
     *
     * @param array $answerFields
     * @return Answer
     */
    public function fakeAnswer($answerFields = [])
    {
        return new Answer($this->fakeAnswerData($answerFields));
    }

    /**
     * Get fake data of Answer
     *
     * @param array $postFields
     * @return array
     */
    public function fakeAnswerData($answerFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'question_id' => $fake->word,
            'answer' => $fake->text,
            'created_at' => $fake->date('Y-m-d H:i:s'),
            'updated_at' => $fake->date('Y-m-d H:i:s'),
            'deleted_at' => $fake->date('Y-m-d H:i:s')
        ], $answerFields);
    }
}
