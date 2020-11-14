<?php

use Faker\Factory as Faker;
use App\Models\ChapterAge;
use App\Repositories\Admin\ChapterAgeRepository;

trait MakeChapterAgeTrait
{
    /**
     * Create fake instance of ChapterAge and save it in database
     *
     * @param array $chapterAgeFields
     * @return ChapterAge
     */
    public function makeChapterAge($chapterAgeFields = [])
    {
        /** @var ChapterAgeRepository $chapterAgeRepo */
        $chapterAgeRepo = App::make(ChapterAgeRepository::class);
        $theme = $this->fakeChapterAgeData($chapterAgeFields);
        return $chapterAgeRepo->create($theme);
    }

    /**
     * Get fake instance of ChapterAge
     *
     * @param array $chapterAgeFields
     * @return ChapterAge
     */
    public function fakeChapterAge($chapterAgeFields = [])
    {
        return new ChapterAge($this->fakeChapterAgeData($chapterAgeFields));
    }

    /**
     * Get fake data of ChapterAge
     *
     * @param array $postFields
     * @return array
     */
    public function fakeChapterAgeData($chapterAgeFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'chapter_id' => $fake->word,
            'number' => $fake->word,
            'text' => $fake->text,
            'created_at' => $fake->date('Y-m-d H:i:s'),
            'updated_at' => $fake->date('Y-m-d H:i:s'),
            'deleted_at' => $fake->date('Y-m-d H:i:s')
        ], $chapterAgeFields);
    }
}
