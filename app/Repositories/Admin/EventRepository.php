<?php

namespace App\Repositories\Admin;

use App\Models\Event;
use Illuminate\Support\Facades\Storage;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class EventRepository
 * @package App\Repositories\Admin
 * @version May 10, 2020, 2:33 pm UTC
 *
 * @method Event findWithoutFail($id, $columns = ['*'])
 * @method Event find($id, $columns = ['*'])
 * @method Event first($columns = ['*'])
*/
class EventRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'image',
        'city',
        'country',
        'description'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Event::class;
    }

    /**
     * @param $request
     * @return mixed
     */
    public function saveRecord($request)
    {
        $input = $request->all();
//        dd($input['image']);
        if ($input['image'] != null) {
            $file = $request->file('image');
            $input['image'] = Storage::putFile('Event', $file);
        }
        $event = $this->create($input);
        return $event;
    }

    /**
     * @param $request
     * @param $event
     * @return mixed
     */
    public function updateRecord($request, $event)
    {
        $input = $request->all();
        if ($input['image'] != null) {
            $file = $request->file('image');
            $input['image'] = Storage::putFile('Event', $file);
        }
        $event = $this->update($input, $event->id);
        return $event;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function deleteRecord($id)
    {
        $event = $this->delete($id);
        return $event;
    }
}
