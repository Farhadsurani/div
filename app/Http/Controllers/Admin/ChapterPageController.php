<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\QuestionDataTable;
use App\Helper\BreadcrumbsRegister;
use App\DataTables\Admin\ChapterPageDataTable;
use App\Http\Requests\Admin;
use App\Http\Requests\Admin\CreateChapterPageRequest;
use App\Http\Requests\Admin\UpdateChapterPageRequest;
use App\Repositories\Admin\ChapterPageRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;
use Illuminate\Http\Response;

class ChapterPageController extends AppBaseController
{
    /** ModelName */
    private $ModelName;

    /** BreadCrumbName */
    private $BreadCrumbName;

    /** @var  ChapterPageRepository */
    private $chapterPageRepository;

    public function __construct(ChapterPageRepository $chapterPageRepo)
    {
        $this->chapterPageRepository = $chapterPageRepo;
        $this->ModelName = 'chapter-pages';
        $this->BreadCrumbName = 'Chapter Pages';
    }

    /**
     * Display a listing of the ChapterPage.
     *
     * @param ChapterPageDataTable $chapterPageDataTable
     * @return Response
     */
    public function index(ChapterPageDataTable $chapterPageDataTable)
    {
        BreadcrumbsRegister::Register($this->ModelName, $this->BreadCrumbName);
        return $chapterPageDataTable->render('admin.chapter_pages.index', ['title' => $this->BreadCrumbName]);
    }

    /**
     * Show the form for creating a new ChapterPage.
     *
     * @return Response
     */
    public function create(Request $request)
    {
//        dd($request->chapter);
        BreadcrumbsRegister::Register($this->ModelName, $this->BreadCrumbName);
        return view('admin.chapter_pages.create')->with([
            'title'      => $this->BreadCrumbName,
            'chapter_id' => $request->chapter
        ]);
    }

    /**
     * Store a newly created ChapterPage in storage.
     *
     * @param CreateChapterPageRequest $request
     *
     * @return Response
     */
    public function store(CreateChapterPageRequest $request)
    {
//        dd($request);
        $chapterPage = $this->chapterPageRepository->saveRecord($request);

        Flash::success($this->BreadCrumbName . ' saved successfully.');
        if (isset($request->continue)) {
            $redirect_to = redirect(route('admin.chapter-pages.create'));
        } elseif (isset($request->translation)) {
            $redirect_to = redirect(route('admin.chapter-pages.edit', $chapterPage->id));
        } else {
            $redirect_to = redirect(route('admin.chapter-pages.index'));
        }
        return $redirect_to->with([
            'title' => $this->BreadCrumbName
        ]);
    }

    /**
     * Display the specified ChapterPage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id, QuestionDataTable $questionDataTable)
    {
        $chapterPage = $this->chapterPageRepository->findWithoutFail($id);

        $questionDataTable->chapter_id = $id;
        if (empty($chapterPage)) {
            Flash::error($this->BreadCrumbName . ' not found');
            return redirect(route('admin.chapter-pages.index'));
        }

        BreadcrumbsRegister::Register($this->ModelName, $this->BreadCrumbName, $chapterPage);
        return $questionDataTable->render('admin.chapter_pages.show', [
            'chapterPage' => $chapterPage,
            'title'   => $this->BreadCrumbName]);
//        return view('admin.chapter_pages.show')->with(['chapterPage' => $chapterPage, 'title' => $this->BreadCrumbName]);
    }

    /**
     * Show the form for editing the specified ChapterPage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $chapterPage = $this->chapterPageRepository->findWithoutFail($id);

        if (empty($chapterPage)) {
            Flash::error($this->BreadCrumbName . ' not found');
            return redirect(route('admin.chapter-pages.index'));
        }

        BreadcrumbsRegister::Register($this->ModelName, $this->BreadCrumbName, $chapterPage);
        return view('admin.chapter_pages.edit')->with(['chapterPage' => $chapterPage, 'title' => $this->BreadCrumbName]);
    }

    /**
     * Update the specified ChapterPage in storage.
     *
     * @param int $id
     * @param UpdateChapterPageRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateChapterPageRequest $request)
    {
        $chapterPage = $this->chapterPageRepository->findWithoutFail($id);

        if (empty($chapterPage)) {
            Flash::error($this->BreadCrumbName . ' not found');
            return redirect(route('admin.chapter-pages.index'));
        }

        $chapterPage = $this->chapterPageRepository->updateRecord($request, $chapterPage);

        Flash::success($this->BreadCrumbName . ' updated successfully.');
//        if (isset($request->continue)) {
//            $redirect_to = redirect(route('admin.chapter-pages.create'));
//        } else {
//            $redirect_to = redirect(route('admin.chapter-pages.index'));
//        }
        $redirect_to = redirect(route('admin.chapters.show', [$chapterPage->chapter_id]));
        return $redirect_to->with(['title' => $this->BreadCrumbName]);
    }

    /**
     * Remove the specified ChapterPage from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $chapterPage = $this->chapterPageRepository->findWithoutFail($id);

        if (empty($chapterPage)) {
            Flash::error($this->BreadCrumbName . ' not found');
            return redirect(route('admin.chapter-pages.index'));
        }

        $this->chapterPageRepository->deleteRecord($id);

        Flash::success($this->BreadCrumbName . ' deleted successfully.');
        return redirect(route('admin.chapter-pages.index'))->with(['title' => $this->BreadCrumbName]);
    }
}
