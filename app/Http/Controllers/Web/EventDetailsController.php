<?php

namespace App\Http\Controllers\Web;

use App\Helper\BreadcrumbsRegister;
use App\DataTables\Admin\ContactUsDataTable;
use App\Http\Controllers\Controller;

use App\Http\Requests\Admin\CreateContactUsRequest;
use App\Http\Requests\Admin\UpdateContactUsRequest;
use App\Models\Subscription;
use App\Models\UserAssign;
use App\Repositories\Admin\ChapterRepository;
use App\Repositories\Admin\ContactUsRepository;
use App\Http\Controllers\AppBaseController;
use App\Repositories\Admin\CourseRepository;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Laracasts\Flash\Flash;

/**
 * Class ContactUsController
 * @package App\Http\Controllers\Web
 */
class EventDetailsController extends Controller
{
    /** ModelName */
    private $ModelName;

    /** BreadCrumbName */
    private $BreadCrumbName;
    private $courseRepository;
    private $chapterRepository;

    public function __construct(CourseRepository $courseRepo, ChapterRepository $chapterRepo)
    {
//        $this->middleware('auth');
        $this->courseRepository = $courseRepo;
        $this->chapterRepository = $chapterRepo;
    }

    /**
     * Display a listing of the ContactUs.
     *
     * @param ContactUsDataTable $contactUsDataTable
     * @return Response
     */
    public function index()
    {
//        $user = Auth::user();
        return view('web.event-details');

    }

    public function courseDetails($id){

        $course = $this->courseRepository->findWhere(['id' => $id]);
        $chapter = $this->chapterRepository->findWhere(['course_id' => $id]);

        if (empty($course)) {
            Flash::error('Course Details not found');
            return redirect(route('web.courses'));
        }
//        dd($course_details);
        $status = 0;
        $user = Auth::user();
        if($user){
            $courses = $user->assign;
            foreach ($courses as $row){
                $assign = UserAssign::where(['user_id'=>$user->id, 'type'=> Subscription::COURSE,'assign'=> $id])->get();
            }
            if($assign->count() > 0){
                $status = 1;
            }
        }
        return view('web.web-course-details')->with([
            'course' => $course,
            'chapter' => $chapter,
            'status' => $status
        ]);
    }

    /**
     * Show the form for creating a new ContactUs.
     *
     * @return Response
     */
    public function create()
    {
        BreadcrumbsRegister::Register($this->ModelName, $this->BreadCrumbName);
        return view('admin.contactus.create');
    }

    /**
     * Store a newly created ContactUs in storage.
     *
     * @param CreateContactUsRequest $request
     *
     * @return Response
     */
    public function store(CreateContactUsRequest $request)
    {
        $contactUs = $this->contactUsRepository->saveRecord($request);

        Flash::success('Contact Us saved successfully.');
        return redirect(route('admin.contactus.index'));
    }

    /**
     * Display the specified ContactUs.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $contactUs = $this->contactUsRepository->findWithoutFail($id);
        if (empty($contactUs)) {
            Flash::error('Contact Us not found');
            return redirect(route('admin.contactus.index'));
        }

        BreadcrumbsRegister::Register($this->ModelName, $this->BreadCrumbName, $contactUs);
        return view('admin.contactus.show')->with('contactUs', $contactUs);
    }

    /**
     * Show the form for editing the specified ContactUs.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $contactUs = $this->contactUsRepository->findWithoutFail($id);
        if (empty($contactUs)) {
            Flash::error('Contact Us not found');
            return redirect(route('admin.contactus.index'));
        }

        BreadcrumbsRegister::Register($this->ModelName, $this->BreadCrumbName, $contactUs);
        return view('admin.contactus.edit')->with('contactUs', $contactUs);
    }

    /**
     * Update the specified ContactUs in storage.
     *
     * @param int $id
     * @param UpdateContactUsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateContactUsRequest $request)
    {
        $contactUs = $this->contactUsRepository->findWithoutFail($id);
        if (empty($contactUs)) {
            Flash::error('Contact Us not found');
            return redirect(route('admin.contactus.index'));
        }

        $contactUs = $this->contactUsRepository->updateRecord($request, $id);

        Flash::success('Contact Us updated successfully.');
        return redirect(route('admin.contactus.index'));
    }

    /**
     * Remove the specified ContactUs from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $contactUs = $this->contactUsRepository->findWithoutFail($id);
        if (empty($contactUs)) {
            Flash::error('Contact Us not found');
            return redirect(route('admin.contactus.index'));
        }

        $this->contactUsRepository->deleteRecord($id);

        Flash::success('Contact Us deleted successfully.');
        return redirect(route('admin.contactus.index'));
    }
}