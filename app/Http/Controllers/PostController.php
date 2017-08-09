<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Repositories\PostRepository;
use App\Repositories\CategoryRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use File;
use App\User;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Intervention\Image\ImageManagerStatic as Image;

class PostController extends AppBaseController {

    /** @var  PostRepository */
    private $postRepository;
    protected $user;
    protected $category;

    public function __construct(PostRepository $postRepo, User $user, CategoryRepository $categoryRepo) {
        $this->postRepository = $postRepo;
        $this->categoryRepository = $categoryRepo;
        $this->user    = $user;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the Post.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request) {
        $this->postRepository->pushCriteria(new RequestCriteria($request));
        $posts = $this->postRepository->all();

        return view('posts.index')
                        ->with('posts', $posts);
    }

    /**
     * Show the form for creating a new Post.
     *
     * @return Response
     */

    public function create(Category $categories) {

        $users = User::pluck('name', 'id');
        // $categories = Category::pluck('title', 'id');
        $categories = ['0' => 'Select a Category'] + collect($categories)->toArray();

  //  public function create() {

    //    $users = User::pluck('name', 'id');
      //  $categories = Category::pluck('title', 'id');


        return view('posts.create', compact('categories', 'users'));
    }

    /**
     * Store a newly created Post in storage.
     *
     * @param CreatePostRequest $request
     *
     * @return Response
     */
    public function store(CreatePostRequest $request) {
        $input = $request->all();
        $input['view_count']=($input['view_count'])?$input['view_count']:0;
        $input['notes']=($input['notes'])?$input['notes']:'';
        $images = array();
        if ($files = $request->file('image')) {
            foreach ($files as $file) {
                $photoName = $file->getClientOriginalName();
                $path = public_path() . '/assets/images/post/thumb/';
                File::isDirectory($path) or File::makeDirectory($path, 0777, true, true);
                Image::make($file)->resize(150, 150, function ($constraint) {
                    $constraint->upsize();
                })->save('assets/images/post/thumb/' . $photoName);

                $path = public_path() . '/assets/images/post/hp/';
                File::isDirectory($path) or File::makeDirectory($path, 0777, true, true);
                Image::make($file)->resize(660, 440, function ($constraint) {
                    $constraint->upsize();
                })->save('assets/images/post/hp/' . $photoName);

                $path = public_path() . '/assets/images/post/';
                File::isDirectory($path) or File::makeDirectory($path, 0777, true, true);
                Image::make($file)->resize(1620, 1080, function ($constraint) {
                    $constraint->upsize();
                })->save('assets/images/post/' . $photoName);

                $file->move(public_path('assets/images/post/'), $photoName);
                $images[] = $photoName;
            }
            $input['image'] = serialize($images);
        } else
            unset($input['image']);

        $images = array();
        if ($files = $request->file('banner')) {
            foreach ($files as $file) {
                $photoName = $file->getClientOriginalName();
                $path = public_path() . '/assets/images/post/banners/';
                File::isDirectory($path) or File::makeDirectory($path, 0777, true, true);
                $file->move(public_path('assets/images/post/banners'), $photoName);
                $images[] = $photoName;
            }
            $input['banner'] = serialize($images);
        } else
            unset($input['banner']);

        $post = $this->postRepository->create($input);

        Flash::success('Post saved successfully.');

        return redirect(route('posts.index'));
    }

    /**
     * Display the specified Post.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id) {
        $post = $this->postRepository->findWithoutFail($id);

        if (empty($post)) {
            Flash::error('Post not found');

            return redirect(route('posts.index'));
        }

        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified Post.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id,Category $categories) {
        $post = $this->postRepository->findWithoutFail($id);
        $users = User::pluck('name', 'id');
          $categories = ['0' => 'Select a Category'] + collect($categories)->toArray();
        if (empty($post)) {
            Flash::error('Post not found');

            return redirect(route('posts.index'));
        }
        $post_image = '';
        $config = '';
        foreach (($post['image']) as $di):
            $post_image.='"' . url('assets/images/post/thumb/' . $di) . '",';
            $config.='{"caption":"' . url('assets/images/post/thumb/' . $di) . '","url":"delete_image/' . $di . '?_token=' . csrf_token() . '"},';
        endforeach;
        $image = '[' . rtrim($post_image, ',') . ']';
        $image_config = '[' . rtrim($config, ',') . ']';
        
        $post_banner = '';
        $config = '';
        foreach (($post['banner']) as $di):
            $post_banner.='"' . url('assets/images/post/banners/' . $di) . '",';
            $config.='{"caption":"' . url('assets/images/post/banners/' . $di) . '","url":"delete_banner/' . $di . '?_token=' . csrf_token() . '"},';
        endforeach;
        $banner = '[' . rtrim($post_banner, ',') . ']';
        $banner_config = '[' . rtrim($config, ',') . ']';

        return view('posts.edit',compact('post', 'categories','users','image','image_config','banner','banner_config'));
    }

    /**
     * Update the specified Post in storage.
     *
     * @param  int              $id
     * @param UpdatePostRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePostRequest $request) {
        $post = $this->postRepository->findWithoutFail($id);

        if (empty($post)) {
            Flash::error('Post not found');

            return redirect(route('posts.index'));
        }

        $data = $request->all();
        // $lawyer

        $images = array();
        if ($files = $request->file('image')) {
            foreach ($files as $file) {
                $photoName = $file->getClientOriginalName();
                $path = public_path() . '/assets/images/post/thumb/';
                File::isDirectory($path) or File::makeDirectory($path, 0777, true, true);
                $file->move(public_path('assets/images/post/thumb/'), $photoName);
                $images[] = $photoName;
            }
            $images = array_merge($images, $post->image);
            $data['image'] = serialize($images);
        } else
            unset($data['image']);

        $images = array();
        if ($files = $request->file('banner')) {
            foreach ($files as $file) {
                $photoName = $file->getClientOriginalName();
                $path = public_path() . '/assets/images/post/banners/';
                File::isDirectory($path) or File::makeDirectory($path, 0777, true, true);
                $file->move(public_path('assets/images/post/banners'), $photoName);
                $images[] = $photoName;
            }
            $images = array_merge($images, $post->banner);
            $data['banner'] = serialize($images);
        } else
            unset($data['banner']);




        $post = $this->postRepository->update($data, $id);

        Flash::success('Post updated successfully.');

        return redirect(route('posts.index'));
    }

    /**
     * Remove the specified Post from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id) {
        $post = $this->postRepository->findWithoutFail($id);

        if (empty($post)) {
            Flash::error('Post not found');

            return redirect(route('posts.index'));
        }

        $this->postRepository->delete($id);

        Flash::success('Post deleted successfully.');

        return redirect(route('posts.index'));
    }
    
     public function delete_image($id, $image) {
        $design = $this->postRepository->findWithoutFail($id);
        $old_image = $design->image;
        if (array_search($image, $old_image) !== false)
            unset($old_image[array_search($image, $old_image)]);
        $data['image'] = serialize($old_image);
        $design = $this->postRepository->update($data, $id);
        return json_encode(1);
    }
     public function delete_banner($id, $image) {
        $design = $this->postRepository->findWithoutFail($id);
        $old_image = $design->banner;
        if (array_search($image, $old_image) !== false)
            unset($old_image[array_search($image, $old_image)]);
        $data['banner'] = serialize($old_image);
        $design = $this->postRepository->update($data, $id);
        return json_encode(1);
    }

}
