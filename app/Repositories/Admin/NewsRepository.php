<?php

namespace App\Repositories\Admin;

use App\Models\News;
use Illuminate\Support\Facades\Storage;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class NewsRepository
 * @package App\Repositories\Admin
 * @version May 10, 2020, 2:33 pm UTC
 *
 * @method News findWithoutFail($id, $columns = ['*'])
 * @method News find($id, $columns = ['*'])
 * @method News first($columns = ['*'])
*/
class NewsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'author',
        'title',
        'description',
        'image'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return News::class;
    }

    /**
     * @param $request
     * @return mixed
     */
    public function saveRecord($request)
    {
        $input = $request->all();
        if ($input['image'] != null) {
            $file = $request->file('image');
            $input['image'] = Storage::putFile('News', $file);
        }
        $news = $this->create($input);
        return $news;
    }

    /**
     * @param $request
     * @param $news
     * @return mixed
     */
    public function updateRecord($request, $news)
    {
        $input = $request->all();
        if ($input['image'] != null) {
            $file = $request->file('image');
            $input['image'] = Storage::putFile('News', $file);
        }
        $news = $this->update($input, $news->id);
        return $news;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function deleteRecord($id)
    {
        $news = $this->delete($id);
        return $news;
    }
}
