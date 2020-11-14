<?php

namespace App\Http\Controllers\Web;

use App\Helper\BreadcrumbsRegister;
use App\DataTables\Admin\ContactUsDataTable;
use App\Http\Controllers\Controller;

use App\Http\Requests\Admin\CreateContactUsRequest;
use App\Http\Requests\Admin\UpdateContactUsRequest;
use App\Repositories\Admin\ContactUsRepository;
use App\Http\Controllers\AppBaseController;
use App\Repositories\Admin\PageRepository;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Laracasts\Flash\Flash;

/**
 * Class AboutController
 * @package App\Http\Controllers\Web
 */
class ServiceController extends Controller
{
    /** ModelName */
    private $ModelName;

    /** BreadCrumbName */
    private $BreadCrumbName;

    private $pageRepository;

    public function __construct(PageRepository $pageRepo)
    {
//        $this->middleware('auth');
        $this->pageRepository = $pageRepo;
    }

    /**
     * Display a listing of the ContactUs.
     *
     * @param ContactUsDataTable $contactUsDataTable
     * @return Response
     */
    public function index()
    {
        $service = $this->pageRepository->all();
//        $user = Auth::user();
        return view('web.service')->with([
            'service' => $service
        ]);

    }
}