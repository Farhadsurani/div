<?php

namespace App\Http\Controllers\Admin;

use App\Helper\BreadcrumbsRegister;
use App\DataTables\Admin\TestimonialDataTable;
use App\Http\Requests\Admin;
use App\Http\Requests\Admin\CreateTestimonialRequest;
use App\Http\Requests\Admin\UpdateTestimonialRequest;
use App\Repositories\Admin\TestimonialRepository;
use App\Http\Controllers\AppBaseController;
use Laracasts\Flash\Flash;
use Illuminate\Http\Response;

class TestimonialController extends AppBaseController
{
    /** ModelName */
    private $ModelName;

    /** BreadCrumbName */
    private $BreadCrumbName;

    /** @var  TestimonialRepository */
    private $testimonialRepository;

    public function __construct(TestimonialRepository $testimonialRepo)
    {
        $this->testimonialRepository = $testimonialRepo;
        $this->ModelName = 'testimonials';
        $this->BreadCrumbName = 'Testimonials';
    }

    /**
     * Display a listing of the Testimonial.
     *
     * @param TestimonialDataTable $testimonialDataTable
     * @return Response
     */
    public function index(TestimonialDataTable $testimonialDataTable)
    {
        BreadcrumbsRegister::Register($this->ModelName,$this->BreadCrumbName);
        return $testimonialDataTable->render('admin.testimonials.index', ['title' => $this->BreadCrumbName]);
    }

    /**
     * Show the form for creating a new Testimonial.
     *
     * @return Response
     */
    public function create()
    {
        BreadcrumbsRegister::Register($this->ModelName,$this->BreadCrumbName);
        return view('admin.testimonials.create')->with(['title' => $this->BreadCrumbName]);
    }

    /**
     * Store a newly created Testimonial in storage.
     *
     * @param CreateTestimonialRequest $request
     *
     * @return Response
     */
    public function store(CreateTestimonialRequest $request)
    {
        $testimonial = $this->testimonialRepository->saveRecord($request);

        Flash::success($this->BreadCrumbName . ' saved successfully.');
        if (isset($request->continue)) {
            $redirect_to = redirect(route('admin.testimonials.create'));
        } elseif (isset($request->translation)) {
            $redirect_to = redirect(route('admin.testimonials.edit', $testimonial->id));
        } else {
            $redirect_to = redirect(route('admin.testimonials.index'));
        }
        return $redirect_to->with([
            'title' => $this->BreadCrumbName
        ]);
    }

    /**
     * Display the specified Testimonial.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $testimonial = $this->testimonialRepository->findWithoutFail($id);

        if (empty($testimonial)) {
            Flash::error($this->BreadCrumbName . ' not found');
            return redirect(route('admin.testimonials.index'));
        }

        BreadcrumbsRegister::Register($this->ModelName,$this->BreadCrumbName, $testimonial);
        return view('admin.testimonials.show')->with(['testimonial' => $testimonial, 'title' => $this->BreadCrumbName]);
    }

    /**
     * Show the form for editing the specified Testimonial.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $testimonial = $this->testimonialRepository->findWithoutFail($id);

        if (empty($testimonial)) {
            Flash::error($this->BreadCrumbName . ' not found');
            return redirect(route('admin.testimonials.index'));
        }

        BreadcrumbsRegister::Register($this->ModelName,$this->BreadCrumbName, $testimonial);
        return view('admin.testimonials.edit')->with(['testimonial' => $testimonial, 'title' => $this->BreadCrumbName]);
    }

    /**
     * Update the specified Testimonial in storage.
     *
     * @param  int              $id
     * @param UpdateTestimonialRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTestimonialRequest $request)
    {
        $testimonial = $this->testimonialRepository->findWithoutFail($id);

        if (empty($testimonial)) {
            Flash::error($this->BreadCrumbName . ' not found');
            return redirect(route('admin.testimonials.index'));
        }

        $testimonial = $this->testimonialRepository->updateRecord($request, $testimonial);

        Flash::success($this->BreadCrumbName . ' updated successfully.');
        if (isset($request->continue)) {
            $redirect_to = redirect(route('admin.testimonials.create'));
        } else {
            $redirect_to = redirect(route('admin.testimonials.index'));
        }
        return $redirect_to->with(['title' => $this->BreadCrumbName]);
    }

    /**
     * Remove the specified Testimonial from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $testimonial = $this->testimonialRepository->findWithoutFail($id);

        if (empty($testimonial)) {
            Flash::error($this->BreadCrumbName . ' not found');
            return redirect(route('admin.testimonials.index'));
        }

        $this->testimonialRepository->deleteRecord($id);

        Flash::success($this->BreadCrumbName . ' deleted successfully.');
        return redirect(route('admin.testimonials.index'))->with(['title' => $this->BreadCrumbName]);
    }
}
