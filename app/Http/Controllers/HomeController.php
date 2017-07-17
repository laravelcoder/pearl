<?php

namespace App\Http\Controllers;
use App\Http\Requests\CreateDesignRequest;
use App\Http\Requests\UpdateDesignRequest;
use App\Repositories\DesignRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;


class HomeController extends AppBaseController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $designRepository;

    public function __construct(DesignRepository $designRepo)
    {
        $this->designRepository = $designRepo;

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $designs = $this->designRepository->all();

        return view('homepage')->with('designs', $designs);
    }
}
