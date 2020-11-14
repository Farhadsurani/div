<?php

namespace App\Http\Controllers\Web;

use App\Helper\BreadcrumbsRegister;
use App\DataTables\Admin\ContactUsDataTable;
use App\Http\Controllers\Controller;

use App\Http\Requests\Admin\CreateContactUsRequest;
use App\Http\Requests\Admin\UpdateContactUsRequest;
use App\Models\User;
use App\Repositories\Admin\ContactUsRepository;
use App\Http\Controllers\AppBaseController;
use App\Repositories\Admin\CourseRepository;
use App\Repositories\Admin\UserDetailRepository;
use App\Repositories\Admin\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Laracasts\Flash\Flash;

/**
 * Class ContactUsController
 * @package App\Http\Controllers\Web
 */
class ProfileController extends Controller
{
    /** ModelName */
    private $ModelName;

    /** BreadCrumbName */
    private $BreadCrumbName;

    /** @var  ContactUsRepository */
    private $contactUsRepository;

    /** @var  UserRepository */
    private $userRepository;

    /** @var  CourseRepository */
    private $courseRepository;

    /** @var  UserDetailRepository */
    private $userDetailRepository;

    public function __construct(UserRepository $userRepo, UserDetailRepository $userDetailRepo, CourseRepository $courseRepo)
    {
        $this->middleware('auth');
        $this->userRepository = $userRepo;
        $this->userDetailRepository = $userDetailRepo;
        $this->courseRepository = $courseRepo;
    }

    /**
     * Display a listing of the ContactUs.
     *
     * @param ContactUsDataTable $contactUsDataTable
     * @return Response
     */
    public function index()
    {
        $user = Auth::user();
        $assign = $user->assign;
        $price = 0;
        foreach ($assign as $row){
            if($row->type == 0){
                $course[] = $this->courseRepository->find($row->assign);
                $price = 1;
            }
            else{
                $course = null;
            }
        }




        return view('user.profile')->with([
            'user'  => $user,
            'price' => $price,
            'course' => $course
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

    public function updateProfile(Request $request)
    {
        $id = Auth::id();
        $profile = $this->userRepository->findWithoutFail($id);
        if (empty($profile)) {
            Flash::error('User not found');
            return redirect(route('profile'));
        }

        $this->userDetailRepository->updateRecord($id, $request);

        $input = [];
        $input['name'] = $request->name;
        User::where('id', $id)->update($input);

        Flash::success('Profile updated successfully.');

        return redirect(route('profile'));
    }
}