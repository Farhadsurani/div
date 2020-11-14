<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Api\CreateTestimonialAPIRequest;
use App\Http\Requests\Api\UpdateTestimonialAPIRequest;
use App\Models\Testimonial;
use App\Repositories\Admin\TestimonialRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use InfyOm\Generator\Criteria\LimitOffsetCriteria;
use Prettus\Repository\Criteria\RequestCriteria;
use Illuminate\Http\Response;

/**
 * Class TestimonialController
 * @package App\Http\Controllers\Api
 */

class TestimonialAPIController extends AppBaseController
{
    /** @var  TestimonialRepository */
    private $testimonialRepository;

    public function __construct(TestimonialRepository $testimonialRepo)
    {
        $this->testimonialRepository = $testimonialRepo;
    }

    /**
     * @param Request $request
     * @return mixed
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     * @return Response
     *
     * @SWG\Get(
     *      path="/testimonials",
     *      summary="Get a listing of the Testimonials.",
     *      tags={"Testimonial"},
     *      description="Get all Testimonials",
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
     *                  @SWG\Items(ref="#/definitions/Testimonial")
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
        $this->testimonialRepository->pushCriteria(new RequestCriteria($request));
        $this->testimonialRepository->pushCriteria(new LimitOffsetCriteria($request));
        $testimonials = $this->testimonialRepository->all();

        return $this->sendResponse($testimonials->toArray(), 'Testimonials retrieved successfully');
    }

    /**
     * @param CreateTestimonialAPIRequest $request
     * @return Response
     *
     * @SWG\Post(
     *      path="/testimonials",
     *      summary="Store a newly created Testimonial in storage",
     *      tags={"Testimonial"},
     *      description="Store Testimonial",
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
     *          description="Testimonial that should be stored",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Testimonial")
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
     *                  ref="#/definitions/Testimonial"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function store(CreateTestimonialAPIRequest $request)
    {
        $testimonials = $this->testimonialRepository->saveRecord($request);

        return $this->sendResponse($testimonials->toArray(), 'Testimonial saved successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Get(
     *      path="/testimonials/{id}",
     *      summary="Display the specified Testimonial",
     *      tags={"Testimonial"},
     *      description="Get Testimonial",
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
     *          description="id of Testimonial",
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
     *                  ref="#/definitions/Testimonial"
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
        /** @var Testimonial $testimonial */
        $testimonial = $this->testimonialRepository->findWithoutFail($id);

        if (empty($testimonial)) {
            return $this->sendError('Testimonial not found');
        }

        return $this->sendResponse($testimonial->toArray(), 'Testimonial retrieved successfully');
    }

    /**
     * @param int $id
     * @param UpdateTestimonialAPIRequest $request
     * @return Response
     *
     * @SWG\Put(
     *      path="/testimonials/{id}",
     *      summary="Update the specified Testimonial in storage",
     *      tags={"Testimonial"},
     *      description="Update Testimonial",
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
     *          description="id of Testimonial",
     *          type="integer",
     *          required=true,
     *          in="path"
     *      ),
     *      @SWG\Parameter(
     *          name="body",
     *          in="body",
     *          description="Testimonial that should be updated",
     *          required=false,
     *          @SWG\Schema(ref="#/definitions/Testimonial")
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
     *                  ref="#/definitions/Testimonial"
     *              ),
     *              @SWG\Property(
     *                  property="message",
     *                  type="string"
     *              )
     *          )
     *      )
     * )
     */
    public function update($id, UpdateTestimonialAPIRequest $request)
    {
        /** @var Testimonial $testimonial */
        $testimonial = $this->testimonialRepository->findWithoutFail($id);

        if (empty($testimonial)) {
            return $this->sendError('Testimonial not found');
        }

        $testimonial = $this->testimonialRepository->updateRecord($request, $id);

        return $this->sendResponse($testimonial->toArray(), 'Testimonial updated successfully');
    }

    /**
     * @param int $id
     * @return Response
     *
     * @SWG\Delete(
     *      path="/testimonials/{id}",
     *      summary="Remove the specified Testimonial from storage",
     *      tags={"Testimonial"},
     *      description="Delete Testimonial",
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
     *          description="id of Testimonial",
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
        /** @var Testimonial $testimonial */
        $testimonial = $this->testimonialRepository->findWithoutFail($id);

        if (empty($testimonial)) {
            return $this->sendError('Testimonial not found');
        }

        $this->testimonialRepository->deleteRecord($id);

        return $this->sendResponse($id, 'Testimonial deleted successfully');
    }
}
