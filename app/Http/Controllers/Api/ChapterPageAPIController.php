<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\CreateChapterPageAPIRequest;
use App\Http\Requests\Api\UpdateChapterPageAPIRequest;
use App\Models\ChapterPage;
use App\Repositories\Admin\ChapterPageRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Illuminate\Http\Response;

/**
 * Class ChapterPageController
 * @package App\Http\Controllers\Api
 */

class ChapterPageAPIController extends AppBaseController
{
    /** @var  ChapterPageRepository */
    private $chapterPageRepository;

    public function __construct(ChapterPageRepository $chapterPageRepo)
    {
        $this->chapterPageRepository = $chapterPageRepo;
    }

    /**
     * @param Request $request
     * @return mixed
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     * @return Response
     *
     * @SWG\Get(
     *      path="/chapter-pages",
     *      summary="Get a listing of the ChapterPages.",
     *      tags={"ChapterPage"},
     *      description="Get all ChapterPages",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="Authorization",
     *          description="User Auth Token{ Bearer ABC123 }",
     *          type="string",
     *          required=true,
     *          default="Bearer ABC123",
     *          in="header"
     *      ),
     *      @SWG\Parameter(
     *          name="orderBy",
     *          description="Pass the property name you want to sort your response. If not found, Returns All Records in DB without sorting.",
     *          type="string",
     *          required=false,
     *          in="query"
     *      ),
     *      @SWG\Parameter(
     *          name="sortedBy",
     *          description="Pass 'asc' or 'desc' to define the sorting method. If not found, 'asc' will be used by default",
     *          type="string",
     *          required=false,
     *          in="query"
     *      ),
     *      @SWG\Parameter(
     *          name="limit",
     *          description="Change the Default Record Count. If not found, Returns All Records in DB.",
     *          type="integer",
     *          required=false,
     *          in="query"
     *      ),
     *     @SWG\Parameter(
     *          name="offset",
     *          description="Change the Default Offset of the Query. If not found, 0 will be used.",
     *          type="integer",
     *          required=false,
     *          in="query"
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  type="array",
     *                  @SWG\Items(ref="#/definitions/ChapterPage")
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function index(Request $request)
    {
        $this->chapterPageRepository->pushCriteria(new RequestCriteria($request));
        $this->chapterPageRepository->pushCriteria(new LimitOffsetCriteria($request));
        $chapterPages = $this->chapterPageRepository->all();

        return $this->sendResponse($chapterPages->toArray(), 'Chapter Pages retrieved successfully');
    }

    /**
     * @param CreateChapterPageAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/chapter-pages",
     *      summary="Store a newly created ChapterPage in storage",
     *      tags={"ChapterPage"},
     *      description="Store ChapterPage",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="Authorization",
     *          description="User Auth Token{ Bearer ABC123 }",
     *          type="string",
     *          required=true,
     *          default="Bearer ABC123",
     *          in="header"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="ChapterPage that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/ChapterPage")
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/ChapterPage"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateChapterPageAPIRequest $request)
    {
        $chapterPages = $this->chapterPageRepository->saveRecord($request);

        return $this->sendResponse($chapterPages->toArray(), 'Chapter Page saved successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/chapter-pages/{id}",
     *      summary="Display the specified ChapterPage",
     *      tags={"ChapterPage"},
     *      description="Get ChapterPage",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="Authorization",
     *          description="User Auth Token{ Bearer ABC123 }",
     *          type="string",
     *          required=true,
     *          default="Bearer ABC123",
     *          in="header"
     *      ),
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of ChapterPage",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/ChapterPage"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function show($id)
    {
        /** @var ChapterPage $chapterPage */
        $chapterPage = $this->chapterPageRepository->findWithoutFail($id);

        if (empty($chapterPage)) {
            return $this->sendError('Chapter Page not found');
        }

        return $this->sendResponse($chapterPage->toArray(), 'Chapter Page retrieved successfully');
    }

    /**
     * @param int $id
     * @param UpdateChapterPageAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/chapter-pages/{id}",
     *      summary="Update the specified ChapterPage in storage",
     *      tags={"ChapterPage"},
     *      description="Update ChapterPage",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="Authorization",
     *          description="User Auth Token{ Bearer ABC123 }",
     *          type="string",
     *          required=true,
     *          default="Bearer ABC123",
     *          in="header"
     *      ),
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of ChapterPage",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="ChapterPage that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/ChapterPage")
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  ref="#/definitions/ChapterPage"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateChapterPageAPIRequest $request)
    {
        /** @var ChapterPage $chapterPage */
        $chapterPage = $this->chapterPageRepository->findWithoutFail($id);

        if (empty($chapterPage)) {
            return $this->sendError('Chapter Page not found');
        }

        $chapterPage = $this->chapterPageRepository->updateRecord($request, $id);

        return $this->sendResponse($chapterPage->toArray(), 'ChapterPage updated successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/chapter-pages/{id}",
     *      summary="Remove the specified ChapterPage from storage",
     *      tags={"ChapterPage"},
     *      description="Delete ChapterPage",
     *      produces={"application/json"},
     *      @SWG\Parameter(
     *          name="Authorization",
     *          description="User Auth Token{ Bearer ABC123 }",
     *          type="string",
     *          required=true,
     *          default="Bearer ABC123",
     *          in="header"
     *      ),
     *      @SWG\Parameter(
     *          name="id",
     *          description="id of ChapterPage",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Response(
     *          response=200,
     *          description="successful operation",
     *          @SWG\Schema(
     *              type="object",
     *              @SWG\Property(
     *                  property="success",
     *                  type="boolean"
     *              ),
     *              @SWG\Property(
     *                  property="data",
     *                  type="string"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function destroy($id)
    {
        /** @var ChapterPage $chapterPage */
        $chapterPage = $this->chapterPageRepository->findWithoutFail($id);

        if (empty($chapterPage)) {
            return $this->sendError('Chapter Page not found');
        }

        $this->chapterPageRepository->deleteRecord($id);

        return $this->sendResponse($id, 'Chapter Page deleted successfully');
    }
}
