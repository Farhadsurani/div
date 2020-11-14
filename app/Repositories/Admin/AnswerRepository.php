<?php

namespace App\Repositories\Admin;

use App\Models\Answer;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class AnswerRepository
 * @package App\Repositories\Admin
 * @version May 27, 2020, 1:16 pm UTC
 *
 * @method Answer findWithoutFail($id, $columns = ['*'])
 * @method Answer find($id, $columns = ['*'])
 * @method Answer first($columns = ['*'])
*/
class AnswerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'question_id',
        'answer'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Answer::class;
    }

    /**
     * @param $request
     * @return mixed
     */
    public function saveRecord($request)
    {
        $input = $request->all();
        $answer = $this->create($input);
        return $answer;
    }

    /**
     * @param $request
     * @param $answer
     * @return mixed
     */
    public function updateRecord($request, $answer)
    {
        $input = $request->all();
        $answer = $this->update($input, $answer->id);
        return $answer;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function deleteRecord($id)
    {
        $answer = $this->delete($id);
        return $answer;
    }
}
