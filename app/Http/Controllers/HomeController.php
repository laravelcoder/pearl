<?php

namespace App\Http\Controllers;
use App\Http\Requests\CreateDesignRequest;
use App\Http\Requests\UpdateDesignRequest;
use App\Repositories\DesignRepository;
use App\Repositories\PostRepository;
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
    private $postRepository;

    public function __construct(DesignRepository $designRepo, PostRepository $postRepo)
    {
        $this->designRepository = $designRepo;
        $this->postRepository = $postRepo;

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $designs = $this->designRepository->all();
        $posts = $this->postRepository->all();

        return view('homepage', compact('designs','posts'));
    }

    public function admin()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function terms()
    {
        return view('terms');
    }
}
