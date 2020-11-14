<?php

namespace App\Repositories\Admin;

use App\Models\Gallery;
use App\Models\UserAssign;
use App\Models\UserGallery;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class GalleryRepository
 * @package App\Repositories\Admin
 * @version May 21, 2020, 7:03 pm UTC
 *
 * @method Gallery findWithoutFail($id, $columns = ['*'])
 * @method Gallery find($id, $columns = ['*'])
 * @method Gallery first($columns = ['*'])
*/
class UserAssignRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
//        'user_id',
        'assign',
        'type',
        'email'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return UserAssign::class;
    }

    /**
     * @param $request
     * @return mixed
     */
    public function saveRecord($request)
    {
        $input = $request->all();
        $assign = $this->create($input);
        return $assign;
    }

    /**
     * @param $request
     * @param $gallery
     * @return mixed
     */
    public function updateRecord($request)
    {
        $input = $request->all();
        $assign = $this->update($input);
        return $assign;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function deleteRecord($id)
    {
        $assign = $this->delete($id);
        return $assign;
    }
}
