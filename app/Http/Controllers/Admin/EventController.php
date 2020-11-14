<?php

namespace App\Http\Controllers\Admin;

use App\Helper\BreadcrumbsRegister;
use App\DataTables\Admin\EventDataTable;
use App\Http\Requests\Admin;
use App\Http\Requests\Admin\CreateEventRequest;
use App\Http\Requests\Admin\UpdateEventRequest;
use App\Repositories\Admin\EventRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Support\Facades\Storage;
use Laracasts\Flash\Flash;
use Illuminate\Http\Response;

class EventController extends AppBaseController
{
    /** ModelName */
    private $ModelName;

    /** BreadCrumbName */
    private $BreadCrumbName;

    /** @var  EventRepository */
    private $eventRepository;

    public function __construct(EventRepository $eventRepo)
    {
        $this->eventRepository = $eventRepo;
        $this->ModelName = 'events';
        $this->BreadCrumbName = 'Events';
    }

    /**
     * Display a listing of the Event.
     *
     * @param EventDataTable $eventDataTable
     * @return Response
     */
    public function index(EventDataTable $eventDataTable)
    {
        BreadcrumbsRegister::Register($this->ModelName,$this->BreadCrumbName);
        return $eventDataTable->render('admin.events.index', ['title' => $this->BreadCrumbName]);
    }

    /**
     * Show the form for creating a new Event.
     *
     * @return Response
     */
    public function create()
    {
        BreadcrumbsRegister::Register($this->ModelName,$this->BreadCrumbName);
        return view('admin.events.create')->with(['title' => $this->BreadCrumbName]);
    }

    /**
     * Store a newly created Event in storage.
     *
     * @param CreateEventRequest $request
     *
     * @return Response
     */
    public function store(CreateEventRequest $request)
    {

        $event = $this->eventRepository->saveRecord($request);

        Flash::success($this->BreadCrumbName . ' saved successfully.');
        if (isset($request->continue)) {
            $redirect_to = redirect(route('admin.events.create'));
        } elseif (isset($request->translation)) {
            $redirect_to = redirect(route('admin.events.edit', $event->id));
        } else {
            $redirect_to = redirect(route('admin.events.index'));
        }
        return $redirect_to->with([
            'title' => $this->BreadCrumbName
        ]);
    }

    /**
     * Display the specified Event.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $event = $this->eventRepository->findWithoutFail($id);

        if (empty($event)) {
            Flash::error($this->BreadCrumbName . ' not found');
            return redirect(route('admin.events.index'));
        }

        BreadcrumbsRegister::Register($this->ModelName,$this->BreadCrumbName, $event);
        return view('admin.events.show')->with(['event' => $event, 'title' => $this->BreadCrumbName]);
    }

    /**
     * Show the form for editing the specified Event.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $event = $this->eventRepository->findWithoutFail($id);

        if (empty($event)) {
            Flash::error($this->BreadCrumbName . ' not found');
            return redirect(route('admin.events.index'));
        }

        BreadcrumbsRegister::Register($this->ModelName,$this->BreadCrumbName, $event);
        return view('admin.events.edit')->with(['event' => $event, 'title' => $this->BreadCrumbName]);
    }

    /**
     * Update the specified Event in storage.
     *
     * @param  int              $id
     * @param UpdateEventRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEventRequest $request)
    {
        $event = $this->eventRepository->findWithoutFail($id);

        if (empty($event)) {
            Flash::error($this->BreadCrumbName . ' not found');
            return redirect(route('admin.events.index'));
        }

        $event = $this->eventRepository->updateRecord($request, $event);

        Flash::success($this->BreadCrumbName . ' updated successfully.');
        if (isset($request->continue)) {
            $redirect_to = redirect(route('admin.events.create'));
        } else {
            $redirect_to = redirect(route('admin.events.index'));
        }
        return $redirect_to->with(['title' => $this->BreadCrumbName]);
    }

    /**
     * Remove the specified Event from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $event = $this->eventRepository->findWithoutFail($id);

        if (empty($event)) {
            Flash::error($this->BreadCrumbName . ' not found');
            return redirect(route('admin.events.index'));
        }

        $this->eventRepository->deleteRecord($id);

        Flash::success($this->BreadCrumbName . ' deleted successfully.');
        return redirect(route('admin.events.index'))->with(['title' => $this->BreadCrumbName]);
    }
}
