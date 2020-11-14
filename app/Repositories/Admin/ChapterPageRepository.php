<?php

namespace App\Repositories\Admin;

use App\Models\ChapterPage;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ChapterPageRepository
 * @package App\Repositories\Admin
 * @version April 4, 2020, 6:54 pm UTC
 *
 * @method ChapterPage findWithoutFail($id, $columns = ['*'])
 * @method ChapterPage find($id, $columns = ['*'])
 * @method ChapterPage first($columns = ['*'])
*/
class ChapterPageRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'chapter_id',
        'number',
        'text'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return ChapterPage::class;
    }

    /**
     * @param $request
     * @return mixed
     */
    public function saveRecord($request)
    {
        $input = $request->all();
        $chapterPage = $this->create($input);
        return $chapterPage;
    }

    /**
     * @param $request
     * @param $chapterPage
     * @return mixed
     */
    public function updateRecord($request, $chapterPage)
    {
        $input = $request->all();
        $chapterPage = $this->update($input, $chapterPage->id);
        return $chapterPage;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function deleteRecord($id)
    {
        $chapterPage = $this->delete($id);
        return $chapterPage;
    }
}
