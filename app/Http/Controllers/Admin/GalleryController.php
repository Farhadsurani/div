<?php

namespace App\Http\Controllers\Admin;

use App\Helper\BreadcrumbsRegister;
use App\DataTables\Admin\GalleryDataTable;
use App\Http\Requests\Admin;
use App\Http\Requests\Admin\CreateGalleryRequest;
use App\Http\Requests\Admin\UpdateGalleryRequest;
use App\Models\UserGallery;
use App\Repositories\Admin\GalleryRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Laracasts\Flash\Flash;
use Illuminate\Http\Response;

class GalleryController extends AppBaseController
{
    /** ModelName */
    private $ModelName;

    /** BreadCrumbName */
    private $BreadCrumbName;

    /** @var  GalleryRepository */
    private $galleryRepository;

    public function __construct(GalleryRepository $galleryRepo)
    {
        $this->galleryRepository = $galleryRepo;
        $this->ModelName = 'galleries';
        $this->BreadCrumbName = 'Galleries';
    }

    /**
     * Display a listing of the Gallery.
     *
     * @param GalleryDataTable $galleryDataTable
     * @return Response
     */
    public function index(GalleryDataTable $galleryDataTable)
    {
        BreadcrumbsRegister::Register($this->ModelName,$this->BreadCrumbName);
        return $galleryDataTable->render('admin.galleries.index', ['title' => $this->BreadCrumbName]);
    }

    /**
     * Show the form for creating a new Gallery.
     *
     * @return Response
     */
    public function create()
    {
        BreadcrumbsRegister::Register($this->ModelName,$this->BreadCrumbName);
        return view('admin.galleries.create')->with(['title' => $this->BreadCrumbName]);
    }

    /**
     * Store a newly created Gallery in storage.
     *
     * @param CreateGalleryRequest $request
     *
     * @return Response
     */
    public function store(CreateGalleryRequest $request)
    {
        $user = Auth::id();
        $images = Input::file('image');
        $gallery = $this->galleryRepository->saveRecord($request, $images);

        Flash::success($this->BreadCrumbName . ' saved successfully.');
        if (isset($request->continue)) {
            $redirect_to = redirect(route('admin.galleries.create'));
        } elseif (isset($request->translation)) {
            $redirect_to = redirect(route('admin.galleries.edit', $gallery->id));
        } else {
            $redirect_to = redirect(route('admin.galleries.index'));
        }
        return $redirect_to->with([
            'title' => $this->BreadCrumbName
        ]);
    }

    /**
     * Display the specified Gallery.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $gallery = $this->galleryRepository->findWithoutFail($id);

        if (empty($gallery)) {
            Flash::error($this->BreadCrumbName . ' not found');
            return redirect(route('admin.galleries.index'));
        }

        BreadcrumbsRegister::Register($this->ModelName,$this->BreadCrumbName, $gallery);
        return view('admin.galleries.show')->with(['gallery' => $gallery, 'title' => $this->BreadCrumbName]);
    }

    /**
     * Show the form for editing the specified Gallery.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $gallery = $this->galleryRepository->findWithoutFail($id);

        if (empty($gallery)) {
            Flash::error($this->BreadCrumbName . ' not found');
            return redirect(route('admin.galleries.index'));
        }
        
    

        BreadcrumbsRegister::Register($this->ModelName,$this->BreadCrumbName, $gallery);
        return view('admin.galleries.edit')->with(['gallery' => $gallery, 'title' => $this->BreadCrumbName]);
    }

    /**
     * Update the specified Gallery in storage.
     *
     * @param  int              $id
     * @param UpdateGalleryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateGalleryRequest $request)
    {
        $gallery = $this->galleryRepository->findWithoutFail($id);

        if (empty($gallery)) {
            Flash::error($this->BreadCrumbName . ' not found');
            return redirect(route('admin.galleries.index'));
        }

        $images = Input::file('image');
        $gallery = $this->galleryRepository->updateRecord($request, $gallery, $images ?? null);

        Flash::success($this->BreadCrumbName . ' updated successfully.');
        if (isset($request->continue)) {
            $redirect_to = redirect(route('admin.galleries.create'));
        } else {
            $redirect_to = redirect(route('admin.galleries.index'));
        }
        return $redirect_to->with(['title' => $this->BreadCrumbName]);
    }

    /**
     * Remove the specified Gallery from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $gallery = $this->galleryRepository->findWithoutFail($id);

        if (empty($gallery)) {
            Flash::error($this->BreadCrumbName . ' not found');
            return redirect(route('admin.galleries.index'));
        }

        $this->galleryRepository->deleteRecord($id);

        Flash::success($this->BreadCrumbName . ' deleted successfully.');
        return redirect(route('admin.galleries.index'))->with(['title' => $this->BreadCrumbName]);
    }
}
