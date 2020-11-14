<?php

namespace App\Repositories\Admin;

use App\Models\Testimonial;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class TestimonialRepository
 * @package App\Repositories\Admin
 * @version September 23, 2020, 12:07 am UTC
 *
 * @method Testimonial findWithoutFail($id, $columns = ['*'])
 * @method Testimonial find($id, $columns = ['*'])
 * @method Testimonial first($columns = ['*'])
*/
class TestimonialRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'designation',
        'comment'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Testimonial::class;
    }

    /**
     * @param $request
     * @return mixed
     */
    public function saveRecord($request)
    {
        $input = $request->all();
        $testimonial = $this->create($input);
        return $testimonial;
    }

    /**
     * @param $request
     * @param $testimonial
     * @return mixed
     */
    public function updateRecord($request, $testimonial)
    {
        $input = $request->all();
        $testimonial = $this->update($input, $testimonial->id);
        return $testimonial;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function deleteRecord($id)
    {
        $testimonial = $this->delete($id);
        return $testimonial;
    }
}
