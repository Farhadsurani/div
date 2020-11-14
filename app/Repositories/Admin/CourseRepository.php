<?php

namespace App\Repositories\Admin;

use App\Models\Course;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class CourseRepository
 * @package App\Repositories\Admin
 * @version April 4, 2020, 5:00 pm UTC
 *
 * @method Course findWithoutFail($id, $columns = ['*'])
 * @method Course find($id, $columns = ['*'])
 * @method Course first($columns = ['*'])
 */
class CourseRepository extends BaseRepository
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
        return Course::class;
    }

    /**
     * @param $request
     * @return mixed
     */
    public function saveRecord($request)
    {
        $input = $request->only(['name','amount']);
        $course = $this->create($input);
        return $course;
    }

    /**
     * @param $request
     * @param $course
     * @return mixed
     */
    public function updateRecord($request, $course)
    {
        $input = $request->only(['name','amount']);
        $course = $this->update($input, $course->id);
        return $course;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function deleteRecord($id)
    {
        $course = $this->delete($id);
        return $course;
    }
}
