<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Repositories\Admin\CourseRepository;
use App\Repositories\Admin\EventRepository;
use App\Repositories\Admin\NewsRepository;
use App\Repositories\Admin\PageRepository;
use Illuminate\Http\Request;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\Auth;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $courseRepository;
    private $eventRepository;
    private $newsRepository;
    private $pageRepository;
    private $session;

    public function __construct(CourseRepository $courseRepo, EventRepository $eventRepo, NewsRepository $newsRepo, PageRepository $pageRepo, Store $session)
    {
        //$this->middleware('auth');
        $this->courseRepository = $courseRepo;
        $this->eventRepository = $eventRepo;
        $this->newsRepository = $newsRepo;
        $this->pageRepository = $pageRepo;
        $this->session = $session;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $course = $this->courseRepository->all();
        $event = $this->eventRepository->all();
        $news = $this->newsRepository->all();
        $pages = $this->pageRepository->all();
        return view('index')->with([
            'course' => $course,
            'event'  => $event,
            'news'   => $news,
            'pages'  => $pages
        ]);
    }

    public function register(Request $request, $type, $var)
    {
        return view('web.registeruser')->with([
            'type'            => $type,
            'var'             => $var
        ]);
    }
}
