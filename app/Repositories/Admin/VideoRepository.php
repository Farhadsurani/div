<?php

namespace App\Repositories\Admin;

use App\Models\Chapter;
use App\Models\Video;
use Illuminate\Support\Facades\Storage;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class ChapterRepository
 * @package App\Repositories\Admin
 * @version April 4, 2020, 5:35 pm UTC
 *
 * @method Chapter findWithoutFail($id, $columns = ['*'])
 * @method Chapter find($id, $columns = ['*'])
 * @method Chapter first($columns = ['*'])
 */
class VideoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'video',
        'chapter_id'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Video::class;
    }

    /**
     * @param $request
     * @return mixed
     */
    public function saveRecord($request)
    {
        $input = $request->all();
        if ($request->hasFile('video')) {
            $file = $request->file('video');
            $input['video'] = Storage::putFile('Video', $file);
        }
        $chapter = $this->create($input);
        return $chapter;
    }

    /**
     * @param $request
     * @param $chapter
     * @return mixed
     */
    public function updateRecord($request, $chapter)
    {
        $input = $request->all();
        if ($request->hasFile('video')) {
            $file = $request->file('video');
            $input['video'] = Storage::putFile('Video', $file);
        }
        $chapter = $this->update($input, $chapter->id);
        return $chapter;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function deleteRecord($id)
    {
        $chapter = $this->delete($id);
        return $chapter;
    }
}
