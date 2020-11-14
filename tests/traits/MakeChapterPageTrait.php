<?php

use Faker\Factory as Faker;
use App\Models\ChapterPage;
use App\Repositories\Admin\ChapterPageRepository;

trait MakeChapterPageTrait
{
    /**
     * Create fake instance of ChapterPage and save it in database
     *
     * @param array $chapterPageFields
     * @return ChapterPage
     */
    public function makeChapterPage($chapterPageFields = [])
    {
        /** @var ChapterPageRepository $chapterPageRepo */
        $chapterPageRepo = App::make(ChapterPageRepository::class);
        $theme = $this->fakeChapterPageData($chapterPageFields);
        return $chapterPageRepo->create($theme);
    }

    /**
     * Get fake instance of ChapterPage
     *
     * @param array $chapterPageFields
     * @return ChapterPage
     */
    public function fakeChapterPage($chapterPageFields = [])
    {
        return new ChapterPage($this->fakeChapterPageData($chapterPageFields));
    }

    /**
     * Get fake data of ChapterPage
     *
     * @param array $postFields
     * @return array
     */
    public function fakeChapterPageData($chapterPageFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'chapter_id' => $fake->word,
            'number' => $fake->word,
            'text' => $fake->text,
            'created_at' => $fake->date('Y-m-d H:i:s'),
            'updated_at' => $fake->date('Y-m-d H:i:s'),
            'deleted_at' => $fake->date('Y-m-d H:i:s')
        ], $chapterPageFields);
    }
}
