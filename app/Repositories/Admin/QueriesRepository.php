<?php

namespace App\Repositories\Admin;

use App\Models;
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
class QueriesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Models\Queries::class;
    }

    /**
     * @param $request
     * @return mixed
     */
    public function saveRecord($request)
    {
        $input = $request->all();
        $queries = $this->create($input);
        return $queries;
    }
}
