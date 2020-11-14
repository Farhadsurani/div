<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\ChapterPageDataTable;
use App\DataTables\Admin\PageDataTable;
use App\DataTables\Admin\QuestionDataTable;
use App\Helper\BreadcrumbsRegister;
use App\DataTables\Admin\ChapterDataTable;
use App\Http\Requests\Admin;
use App\Http\Requests\Admin\CreateChapterRequest;
use App\Http\Requests\Admin\UpdateChapterRequest;
use App\Models\Video;
use App\Repositories\Admin\ChapterRepository;
use App\Http\Controllers\AppBaseController;
use App\Repositories\Admin\VideoRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
use Laracasts\Flash\Flash;
use Illuminate\Http\Response;

class ChapterController extends AppBaseController
{
    /** ModelName */
    private $ModelName;

    /** BreadCrumbName */
    private $BreadCrumbName;

    /** @var  ChapterRepository */
    private $chapterRepository;

    private $videoRepository;

    public function __construct(ChapterRepository $chapterRepo, VideoRepository $videoRepo)
    {
        $this->chapterRepository = $chapterRepo;
        $this->ModelName = 'chapters';
        $this->BreadCrumbName = 'Chapters';
        $this->videoRepository = $videoRepo;
    }

    /**
     * Display a listing of the Chapter.
     *
     * @param ChapterDataTable $chapterDataTable
     * @return Response
     */
    public function index(ChapterDataTable $chapterDataTable)
    {
        BreadcrumbsRegister::Register($this->ModelName, $this->BreadCrumbName);
        return $chapterDataTable->render('admin.chapters.index', ['title' => $this->BreadCrumbName]);
    }

    /**
     * Show the form for creating a new Chapter.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        BreadcrumbsRegister::Register($this->ModelName, $this->BreadCrumbName);

        return view('admin.chapters.create')->with([
            'title'     => $this->BreadCrumbName,
            'course_id' => $request->get('course_id'),
        ]);

    }

    /**
     * Store a newly created Chapter in storage.
     *
     * @param CreateChapterRequest $request
     *
     * @return Response
     */
    public function store(CreateChapterRequest $request)
    {
        $chapter = $this->chapterRepository->saveRecord($request);

        $output = [];
        $output['chapter_id'] = $chapter->id;
        if ($request->hasFile('video')) {
            $file = $request->file('video');
            $output['video'] = Storage::putFile('Chapter/Video', $file);
        }
        Video::create($output);

        Flash::success($this->BreadCrumbName . ' saved successfully.');
        if (isset($request->continue)) {
            $redirect_to = redirect(route('admin.chapters.create'));
        } elseif (isset($request->translation)) {
            $redirect_to = redirect(route('admin.chapters.edit', $chapter->id));
        } else {
            $redirect_to = redirect(route('admin.courses.show', [$chapter->course_id]));
        }
        return $redirect_to->with([
            'title' => $this->BreadCrumbName
        ]);
    }

    /**
     * Display the specified Chapter.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id, ChapterPageDataTable $chapterPageDataTable)
    {
        $chapter = $this->chapterRepository->findWithoutFail($id);
        $chapterPageDataTable->chapter_id = $id;
        if (empty($chapter)) {
            Flash::error($this->BreadCrumbName . ' not found');
            return redirect(route('admin.chapters.index'));
        }

        BreadcrumbsRegister::Register($this->ModelName, $this->BreadCrumbName, $chapter);
        return $chapterPageDataTable->render('admin.chapters.show', [
            'chapter' => $chapter,
            'title'   => $this->BreadCrumbName]);
//        return view('admin.chapters.show')->with(['chapter' => $chapter, 'title' => $this->BreadCrumbName]);
    }

    /**
     * Show the form for editing the specified Chapter.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $chapter = $this->chapterRepository->findWithoutFail($id);

        $video = $this->videoRepository->where('chapter_id', $id)->get();

        if (empty($chapter)) {
            Flash::error($this->BreadCrumbName . ' not found');
            return redirect(route('admin.chapters.index'));
        }

        BreadcrumbsRegister::Register($this->ModelName, $this->BreadCrumbName, $chapter);
        return view('admin.chapters.edit')->with(['chapter' => $chapter, 'video' => $video, 'title' => $this->BreadCrumbName]);
    }

    /**
     * Update the specified Chapter in storage.
     *
     * @param int $id
     * @param UpdateChapterRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateChapterRequest $request)
    {
        $chapter = $this->chapterRepository->findWithoutFail($id);
        if (empty($chapter)) {
            Flash::error($this->BreadCrumbName . ' not found');
            return redirect(route('admin.chapters.index'));
        }
        $chapter = $this->chapterRepository->updateRecord($request, $chapter);
        if ($request->hasFile('video')) {
            $file = $request->file('video');
            $output['video'] = Storage::putFile('Chapter/Video', $file);
            Video::where('chapter_id', $id)->update($output);
        }
        Flash::success($this->BreadCrumbName . ' updated successfully.');
//        if (isset($request->continue)) {
//            $redirect_to = redirect(route('admin.chapters.create'));
//        } else {
//            $redirect_to = redirect(route('admin.chapters.index'));
//        }
        $redirect_to = redirect(route('admin.courses.show', [$chapter->course_id]));
        return $redirect_to->with(['title' => $this->BreadCrumbName]);
    }

    /**
     * Remove the specified Chapter from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $chapter = $this->chapterRepository->findWithoutFail($id);

        if (empty($chapter)) {
            Flash::error($this->BreadCrumbName . ' not found');
            return redirect(route('admin.chapters.index'));
        }

        $this->chapterRepository->deleteRecord($id);

        Flash::success($this->BreadCrumbName . ' deleted successfully.');
        return redirect(route('admin.chapters.index'))->with(['title' => $this->BreadCrumbName]);
    }
}
