<?php

namespace App\Http\Controllers\Admin;

use App\Helper\BreadcrumbsRegister;
use App\DataTables\Admin\AnswerDataTable;
use App\Http\Requests\Admin;
use App\Http\Requests\Admin\CreateAnswerRequest;
use App\Http\Requests\Admin\UpdateAnswerRequest;
use App\Repositories\Admin\AnswerRepository;
use App\Http\Controllers\AppBaseController;
use Laracasts\Flash\Flash;
use Illuminate\Http\Response;

class AnswerController extends AppBaseController
{
    /** ModelName */
    private $ModelName;

    /** BreadCrumbName */
    private $BreadCrumbName;

    /** @var  AnswerRepository */
    private $answerRepository;

    public function __construct(AnswerRepository $answerRepo)
    {
        $this->answerRepository = $answerRepo;
        $this->ModelName = 'answers';
        $this->BreadCrumbName = 'Answers';
    }

    /**
     * Display a listing of the Answer.
     *
     * @param AnswerDataTable $answerDataTable
     * @return Response
     */
    public function index(AnswerDataTable $answerDataTable)
    {
        BreadcrumbsRegister::Register($this->ModelName,$this->BreadCrumbName);
        return $answerDataTable->render('admin.answers.index', ['title' => $this->BreadCrumbName]);
    }

    /**
     * Show the form for creating a new Answer.
     *
     * @return Response
     */
    public function create()
    {
        BreadcrumbsRegister::Register($this->ModelName,$this->BreadCrumbName);
        return view('admin.answers.create')->with(['title' => $this->BreadCrumbName]);
    }

    /**
     * Store a newly created Answer in storage.
     *
     * @param CreateAnswerRequest $request
     *
     * @return Response
     */
    public function store(CreateAnswerRequest $request)
    {
        $answer = $this->answerRepository->saveRecord($request);

        Flash::success($this->BreadCrumbName . ' saved successfully.');
        if (isset($request->continue)) {
            $redirect_to = redirect(route('admin.answers.create'));
        } elseif (isset($request->translation)) {
            $redirect_to = redirect(route('admin.answers.edit', $answer->id));
        } else {
            $redirect_to = redirect(route('admin.answers.index'));
        }
        return $redirect_to->with([
            'title' => $this->BreadCrumbName
        ]);
    }

    /**
     * Display the specified Answer.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $answer = $this->answerRepository->findWithoutFail($id);

        if (empty($answer)) {
            Flash::error($this->BreadCrumbName . ' not found');
            return redirect(route('admin.answers.index'));
        }

        BreadcrumbsRegister::Register($this->ModelName,$this->BreadCrumbName, $answer);
        return view('admin.answers.show')->with(['answer' => $answer, 'title' => $this->BreadCrumbName]);
    }

    /**
     * Show the form for editing the specified Answer.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $answer = $this->answerRepository->findWithoutFail($id);

        if (empty($answer)) {
            Flash::error($this->BreadCrumbName . ' not found');
            return redirect(route('admin.answers.index'));
        }

        BreadcrumbsRegister::Register($this->ModelName,$this->BreadCrumbName, $answer);
        return view('admin.answers.edit')->with(['answer' => $answer, 'title' => $this->BreadCrumbName]);
    }

    /**
     * Update the specified Answer in storage.
     *
     * @param  int              $id
     * @param UpdateAnswerRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAnswerRequest $request)
    {
        $answer = $this->answerRepository->findWithoutFail($id);

        if (empty($answer)) {
            Flash::error($this->BreadCrumbName . ' not found');
            return redirect(route('admin.answers.index'));
        }

        $answer = $this->answerRepository->updateRecord($request, $answer);

        Flash::success($this->BreadCrumbName . ' updated successfully.');
        if (isset($request->continue)) {
            $redirect_to = redirect(route('admin.answers.create'));
        } else {
            $redirect_to = redirect(route('admin.answers.index'));
        }
        return $redirect_to->with(['title' => $this->BreadCrumbName]);
    }

    /**
     * Remove the specified Answer from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $answer = $this->answerRepository->findWithoutFail($id);

        if (empty($answer)) {
            Flash::error($this->BreadCrumbName . ' not found');
            return redirect(route('admin.answers.index'));
        }

        $this->answerRepository->deleteRecord($id);

        Flash::success($this->BreadCrumbName . ' deleted successfully.');
        return redirect(route('admin.answers.index'))->with(['title' => $this->BreadCrumbName]);
    }
}
