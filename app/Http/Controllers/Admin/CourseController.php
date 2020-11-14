<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\ChapterDataTable;
use App\Helper\BreadcrumbsRegister;
use App\DataTables\Admin\CourseDataTable;
use App\Http\Requests\Admin;
use App\Http\Requests\Admin\CreateCourseRequest;
use App\Http\Requests\Admin\UpdateCourseRequest;
use App\Models\CourseDetail;
use App\Repositories\Admin\CourseRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Support\Facades\Storage;
use Laracasts\Flash\Flash;
use Illuminate\Http\Response;

class CourseController extends AppBaseController
{
    /** ModelName */
    private $ModelName;

    /** BreadCrumbName */
    private $BreadCrumbName;

    /** @var  CourseRepository */
    private $courseRepository;

    public function __construct(CourseRepository $courseRepo)
    {
        $this->courseRepository = $courseRepo;
        $this->ModelName = 'courses';
        $this->BreadCrumbName = 'Courses';
    }

    /**
     * Display a listing of the Course.
     *
     * @param CourseDataTable $courseDataTable
     * @return Response
     */
    public function index(CourseDataTable $courseDataTable)
    {
        BreadcrumbsRegister::Register($this->ModelName, $this->BreadCrumbName);
        return $courseDataTable->render('admin.courses.index', ['title' => $this->BreadCrumbName]);
    }

    /**
     * Show the form for creating a new Course.
     *
     * @return Response
     */
    public function create()
    {
        BreadcrumbsRegister::Register($this->ModelName, $this->BreadCrumbName);
        return view('admin.courses.create')->with(['title' => $this->BreadCrumbName]);
    }

    /**
     * Store a newly created Course in storage.
     *
     * @param CreateCourseRequest $request
     *
     * @return Response
     */
    public function store(CreateCourseRequest $request)
    {

        $course = $this->courseRepository->saveRecord($request);
        $detail = [];
        $detail['course_id'] = $course->id;
        $detail['details'] = $request->details;
        if ($request->hasFile('cover')) {
            $file = $request->file('cover');
            $detail['cover'] = Storage::putFile('Course', $file);
        }
        CourseDetail::create($detail);

        Flash::success($this->BreadCrumbName . ' saved successfully.');
        if (isset($request->continue)) {
            $redirect_to = redirect(route('admin.courses.create'));
        } elseif (isset($request->translation)) {
            $redirect_to = redirect(route('admin.courses.edit', $course->id));
        } else {
            $redirect_to = redirect(route('admin.courses.index'));
        }
        return $redirect_to->with([
            'title' => $this->BreadCrumbName
        ]);
    }

    /**
     * Display the specified Course.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id, ChapterDataTable $chapterDataTable)
    {
        $course = $this->courseRepository->findWithoutFail($id);
        $chapterDataTable->course_id = $id;
        if (empty($course)) {
            Flash::error($this->BreadCrumbName . ' not found');
            return redirect(route('admin.courses.index'));
        }

        BreadcrumbsRegister::Register($this->ModelName, $this->BreadCrumbName, $course);
        return $chapterDataTable->render('admin.courses.show', [
            'course' => $course,
            'title'  => $this->BreadCrumbName
        ]);
        // return view('admin.courses.show')->with(['course' => $course, 'title' => $this->BreadCrumbName]);
    }

    /**
     * Show the form for editing the specified Course.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $course = $this->courseRepository->findWithoutFail($id);

        if (empty($course)) {
            Flash::error($this->BreadCrumbName . ' not found');
            return redirect(route('admin.courses.index'));
        }

        BreadcrumbsRegister::Register($this->ModelName, $this->BreadCrumbName, $course);
        return view('admin.courses.edit')->with(['course' => $course, 'title' => $this->BreadCrumbName]);
    }

    /**
     * Update the specified Course in storage.
     *
     * @param int $id
     * @param UpdateCourseRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCourseRequest $request)
    {
        $course = $this->courseRepository->findWithoutFail($id);

        if (empty($course)) {
            Flash::error($this->BreadCrumbName . ' not found');
            return redirect(route('admin.courses.index'));
        }

        $course = $this->courseRepository->updateRecord($request, $course);
        $detail['details'] = $request->details;
        if ($request->hasFile('cover')) {
            $file = $request->file('cover');
            $detail['cover'] = Storage::putFile('Course', $file);
        }
        CourseDetail::where('course_id', $id)->update($detail);
        Flash::success($this->BreadCrumbName . ' updated successfully.');
        if (isset($request->continue)) {
            $redirect_to = redirect(route('admin.courses.create'));
        } else {
            $redirect_to = redirect(route('admin.courses.index'));
        }
        return $redirect_to->with(['title' => $this->BreadCrumbName]);
    }

    /**
     * Remove the specified Course from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $course = $this->courseRepository->findWithoutFail($id);

        if (empty($course)) {
            Flash::error($this->BreadCrumbName . ' not found');
            return redirect(route('admin.courses.index'));
        }

        $this->courseRepository->deleteRecord($id);

        Flash::success($this->BreadCrumbName . ' deleted successfully.');
        return redirect(route('admin.courses.index'))->with(['title' => $this->BreadCrumbName]);
    }
}
