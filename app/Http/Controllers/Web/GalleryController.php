<?php

namespace App\Http\Controllers\Web;

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
    public function index()
    {
        $gallery = $this->galleryRepository->all();
//        dd($gallery);
        return view('web.gallery')->with([
            'gallery' => $gallery
        ]);
    }
}
