<?php

namespace App\Repositories\Admin;

use App\Models\Subscription;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class SubscriptionRepository
 * @package App\Repositories\Admin
 * @version April 2, 2020, 10:06 pm UTC
 *
 * @method Subscription findWithoutFail($id, $columns = ['*'])
 * @method Subscription find($id, $columns = ['*'])
 * @method Subscription first($columns = ['*'])
*/
class SubscriptionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'name'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Subscription::class;
    }

    /**
     * @param $request
     * @return mixed
     */
    public function saveRecord($request)
    {
        $input = $request->only(['name']);
        $subscription = $this->create($input);
        return $subscription;
    }

    /**
     * @param $request
     * @param $subscription
     * @return mixed
     */
    public function updateRecord($request, $subscription)
    {
        $input = $request->only(['name']);
        $subscription = $this->update($input, $subscription->id);
        return $subscription;
    }

    /**
     * @param $id
     * @return mixed
     */
    public function deleteRecord($id)
    {
        $subscription = $this->delete($id);
        return $subscription;
    }
}
