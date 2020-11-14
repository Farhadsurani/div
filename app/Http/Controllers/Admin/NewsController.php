<?php

namespace App\Http\Controllers\Admin;

use App\Helper\BreadcrumbsRegister;
use App\DataTables\Admin\NewsDataTable;
use App\Http\Requests\Admin;
use App\Http\Requests\Admin\CreateNewsRequest;
use App\Http\Requests\Admin\UpdateNewsRequest;
use App\Repositories\Admin\NewsRepository;
use App\Http\Controllers\AppBaseController;
use Laracasts\Flash\Flash;
use Illuminate\Http\Response;

class NewsController extends AppBaseController
{
    /** ModelName */
    private $ModelName;

    /** BreadCrumbName */
    private $BreadCrumbName;

    /** @var  NewsRepository */
    private $newsRepository;

    public function __construct(NewsRepository $newsRepo)
    {
        $this->newsRepository = $newsRepo;
        $this->ModelName = 'news';
        $this->BreadCrumbName = 'News';
    }

    /**
     * Display a listing of the News.
     *
     * @param NewsDataTable $newsDataTable
     * @return Response
     */
    public function index(NewsDataTable $newsDataTable)
    {
        BreadcrumbsRegister::Register($this->ModelName,$this->BreadCrumbName);
        return $newsDataTable->render('admin.news.index', ['title' => $this->BreadCrumbName]);
    }

    /**
     * Show the form for creating a new News.
     *
     * @return Response
     */
    public function create()
    {
        BreadcrumbsRegister::Register($this->ModelName,$this->BreadCrumbName);
        return view('admin.news.create')->with(['title' => $this->BreadCrumbName]);
    }

    /**
     * Store a newly created News in storage.
     *
     * @param CreateNewsRequest $request
     *
     * @return Response
     */
    public function store(CreateNewsRequest $request)
    {
        $news = $this->newsRepository->saveRecord($request);

        Flash::success($this->BreadCrumbName . ' saved successfully.');
        if (isset($request->continue)) {
            $redirect_to = redirect(route('admin.news.create'));
        } elseif (isset($request->translation)) {
            $redirect_to = redirect(route('admin.news.edit', $news->id));
        } else {
            $redirect_to = redirect(route('admin.news.index'));
        }
        return $redirect_to->with([
            'title' => $this->BreadCrumbName
        ]);
    }

    /**
     * Display the specified News.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $news = $this->newsRepository->findWithoutFail($id);

        if (empty($news)) {
            Flash::error($this->BreadCrumbName . ' not found');
            return redirect(route('admin.news.index'));
        }

        BreadcrumbsRegister::Register($this->ModelName,$this->BreadCrumbName, $news);
        return view('admin.news.show')->with(['news' => $news, 'title' => $this->BreadCrumbName]);
    }

    /**
     * Show the form for editing the specified News.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $news = $this->newsRepository->findWithoutFail($id);

        if (empty($news)) {
            Flash::error($this->BreadCrumbName . ' not found');
            return redirect(route('admin.news.index'));
        }

        BreadcrumbsRegister::Register($this->ModelName,$this->BreadCrumbName, $news);
        return view('admin.news.edit')->with(['news' => $news, 'title' => $this->BreadCrumbName]);
    }

    /**
     * Update the specified News in storage.
     *
     * @param  int              $id
     * @param UpdateNewsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateNewsRequest $request)
    {
        $news = $this->newsRepository->findWithoutFail($id);

        if (empty($news)) {
            Flash::error($this->BreadCrumbName . ' not found');
            return redirect(route('admin.news.index'));
        }

        $news = $this->newsRepository->updateRecord($request, $news);

        Flash::success($this->BreadCrumbName . ' updated successfully.');
        if (isset($request->continue)) {
            $redirect_to = redirect(route('admin.news.create'));
        } else {
            $redirect_to = redirect(route('admin.news.index'));
        }
        return $redirect_to->with(['title' => $this->BreadCrumbName]);
    }

    /**
     * Remove the specified News from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $news = $this->newsRepository->findWithoutFail($id);

        if (empty($news)) {
            Flash::error($this->BreadCrumbName . ' not found');
            return redirect(route('admin.news.index'));
        }

        $this->newsRepository->deleteRecord($id);

        Flash::success($this->BreadCrumbName . ' deleted successfully.');
        return redirect(route('admin.news.index'))->with(['title' => $this->BreadCrumbName]);
    }
}
