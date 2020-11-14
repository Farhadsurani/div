<?php

namespace App\Http\Controllers\Admin;

use App\Helper\BreadcrumbsRegister;
use App\DataTables\Admin\SubscriptionDataTable;
use App\Http\Requests\Admin;
use App\Http\Requests\Admin\CreateSubscriptionRequest;
use App\Http\Requests\Admin\UpdateSubscriptionRequest;
use App\Models\SubscriptionDetail;
use App\Repositories\Admin\SubscriptionRepository;
use App\Http\Controllers\AppBaseController;
use Laracasts\Flash\Flash;
use Illuminate\Http\Response;

class SubscriptionController extends AppBaseController
{
    /** ModelName */
    private $ModelName;

    /** BreadCrumbName */
    private $BreadCrumbName;

    /** @var  SubscriptionRepository */
    private $subscriptionRepository;

    public function __construct(SubscriptionRepository $subscriptionRepo)
    {
        $this->subscriptionRepository = $subscriptionRepo;
        $this->ModelName = 'subscriptions';
        $this->BreadCrumbName = 'Subscriptions';
    }

    /**
     * Display a listing of the Subscription.
     *
     * @param SubscriptionDataTable $subscriptionDataTable
     * @return Response
     */
    public function index(SubscriptionDataTable $subscriptionDataTable)
    {
        BreadcrumbsRegister::Register($this->ModelName,$this->BreadCrumbName);
        return $subscriptionDataTable->render('admin.subscriptions.index', ['title' => $this->BreadCrumbName]);
    }

    /**
     * Show the form for creating a new Subscription.
     *
     * @return Response
     */
    public function create()
    {
        BreadcrumbsRegister::Register($this->ModelName,$this->BreadCrumbName);
        return view('admin.subscriptions.create')->with(['title' => $this->BreadCrumbName]);
    }

    /**
     * Store a newly created Subscription in storage.
     *
     * @param CreateSubscriptionRequest $request
     *
     * @return Response
     */
    public function store(CreateSubscriptionRequest $request)
    {
        $subscription = $this->subscriptionRepository->saveRecord($request);
        $details = [];
        $details['subscription_id'] = $subscription->id;
        $details['details'] = $request->details;

        SubscriptionDetail::create($details);
        Flash::success($this->BreadCrumbName . ' saved successfully.');
        if (isset($request->continue)) {
            $redirect_to = redirect(route('admin.subscriptions.create'));
        } elseif (isset($request->translation)) {
            $redirect_to = redirect(route('admin.subscriptions.edit', $subscription->id));
        } else {
            $redirect_to = redirect(route('admin.subscriptions.index'));
        }
        return $redirect_to->with([
            'title' => $this->BreadCrumbName
        ]);
    }

    /**
     * Display the specified Subscription.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $subscription = $this->subscriptionRepository->findWithoutFail($id);

        if (empty($subscription)) {
            Flash::error($this->BreadCrumbName . ' not found');
            return redirect(route('admin.subscriptions.index'));
        }

        BreadcrumbsRegister::Register($this->ModelName,$this->BreadCrumbName, $subscription);
        return view('admin.subscriptions.show')->with(['subscription' => $subscription, 'title' => $this->BreadCrumbName]);
    }

    /**
     * Show the form for editing the specified Subscription.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $subscription = $this->subscriptionRepository->findWithoutFail($id);
        if (empty($subscription)) {
            Flash::error($this->BreadCrumbName . ' not found');
            return redirect(route('admin.subscriptions.index'));
        }
        BreadcrumbsRegister::Register($this->ModelName,$this->BreadCrumbName, $subscription);
        return view('admin.subscriptions.edit')->with(['subscription' => $subscription, 'title' => $this->BreadCrumbName]);
    }

    /**
     * Update the specified Subscription in storage.
     *
     * @param  int              $id
     * @param UpdateSubscriptionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSubscriptionRequest $request)
    {
        $subscription = $this->subscriptionRepository->findWithoutFail($id);

        if (empty($subscription)) {
            Flash::error($this->BreadCrumbName . ' not found');
            return redirect(route('admin.subscriptions.index'));
        }

        $subscription = $this->subscriptionRepository->updateRecord($request, $subscription);
        $details = [];
        $details['details']= $request->details;
        SubscriptionDetail::where('subscription_id',$subscription->id)->update($details);

        Flash::success($this->BreadCrumbName . ' updated successfully.');
        if (isset($request->continue)) {
            $redirect_to = redirect(route('admin.subscriptions.create'));
        } else {
            $redirect_to = redirect(route('admin.subscriptions.index'));
        }
        return $redirect_to->with(['title' => $this->BreadCrumbName]);
    }

    /**
     * Remove the specified Subscription from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $subscription = $this->subscriptionRepository->findWithoutFail($id);

        if (empty($subscription)) {
            Flash::error($this->BreadCrumbName . ' not found');
            return redirect(route('admin.subscriptions.index'));
        }

        $this->subscriptionRepository->deleteRecord($id);

        Flash::success($this->BreadCrumbName . ' deleted successfully.');
        return redirect(route('admin.subscriptions.index'))->with(['title' => $this->BreadCrumbName]);
    }
}
