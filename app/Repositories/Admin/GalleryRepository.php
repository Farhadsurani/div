<?php

namespace App\Repositories\Admin;

use App\Models\Gallery;
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
class GalleryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'image'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Gallery::class;
    }

    /**
     * @param $request
     * @return mixed
     */
    public function saveRecord($request, $images)
    {
        $input = $request->all();
        foreach ($images as $file) {
            $input['image'] = Storage::putFile('Gallery', $file);
            $gallery = $this->create($input);

            $output = [];
            $output['gallery_id'] = $gallery->id;
            $output['user_id'] = Auth::id();

            UserGallery::create($output);
        }
        return $gallery;
    }

    /**
     * @param $request
     * @param $gallery
     * @return mixed
     */
    public function updateRecord($request, $gallery, $images)
    {
        $input = $request->all();
        if ($images != null) {
            if (isset($images)) {
                foreach ($images as $file) {
                    $input['image'] = Storage::putFile('Gallery', $file);
                    $gallery = $this->update($input, $gallery->id);

                    $output = [];
                    $output['gallery_id'] = $gallery->id;
                    $output['user_id'] = Auth::id();

                    UserGallery::where('gallery_id', $gallery->id)->update($output);
                }
            }
        }
        return $gallery;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function deleteRecord($id)
    {
        $gallery = $this->delete($id);
        return $gallery;
    }
}
