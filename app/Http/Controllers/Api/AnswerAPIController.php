<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\CreateAnswerAPIRequest;
use App\Http\Requests\Api\UpdateAnswerAPIRequest;
use App\Models\Answer;
use App\Repositories\Admin\AnswerRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Illuminate\Http\Response;

/**
 * Class AnswerController
 * @package App\Http\Controllers\Api
 */

class AnswerAPIController extends AppBaseController
{
    /** @var  AnswerRepository */
    private $answerRepository;

    public function __construct(AnswerRepository $answerRepo)
    {
        $this->answerRepository = $answerRepo;
    }

    /**
     * @param Request $request
     * @return mixed
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     * @return Response
     *
     * @SWG\Get(
     *      path="/answers",
     *      summary="Get a listing of the Answers.",
     *      tags={"Answer"},
     *      description="Get all Answers",
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
     *                  @SWG\Items(ref="#/definitions/Answer")
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
        $this->answerRepository->pushCriteria(new RequestCriteria($request));
        $this->answerRepository->pushCriteria(new LimitOffsetCriteria($request));
        $answers = $this->answerRepository->all();

        return $this->sendResponse($answers->toArray(), 'Answers retrieved successfully');
    }

    /**
     * @param CreateAnswerAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/answers",
     *      summary="Store a newly created Answer in storage",
     *      tags={"Answer"},
     *      description="Store Answer",
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
     *          description="Answer that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Answer")
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
     *                  ref="#/definitions/Answer"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateAnswerAPIRequest $request)
    {
        $answers = $this->answerRepository->saveRecord($request);

        return $this->sendResponse($answers->toArray(), 'Answer saved successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/answers/{id}",
     *      summary="Display the specified Answer",
     *      tags={"Answer"},
     *      description="Get Answer",
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
     *          description="id of Answer",
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
     *                  ref="#/definitions/Answer"
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
        /** @var Answer $answer */
        $answer = $this->answerRepository->findWithoutFail($id);

        if (empty($answer)) {
            return $this->sendError('Answer not found');
        }

        return $this->sendResponse($answer->toArray(), 'Answer retrieved successfully');
    }

    /**
     * @param int $id
     * @param UpdateAnswerAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/answers/{id}",
     *      summary="Update the specified Answer in storage",
     *      tags={"Answer"},
     *      description="Update Answer",
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
     *          description="id of Answer",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Answer that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Answer")
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
     *                  ref="#/definitions/Answer"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateAnswerAPIRequest $request)
    {
        /** @var Answer $answer */
        $answer = $this->answerRepository->findWithoutFail($id);

        if (empty($answer)) {
            return $this->sendError('Answer not found');
        }

        $answer = $this->answerRepository->updateRecord($request, $id);

        return $this->sendResponse($answer->toArray(), 'Answer updated successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/answers/{id}",
     *      summary="Remove the specified Answer from storage",
     *      tags={"Answer"},
     *      description="Delete Answer",
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
     *          description="id of Answer",
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
        /** @var Answer $answer */
        $answer = $this->answerRepository->findWithoutFail($id);

        if (empty($answer)) {
            return $this->sendError('Answer not found');
        }

        $this->answerRepository->deleteRecord($id);

        return $this->sendResponse($id, 'Answer deleted successfully');
    }
}
