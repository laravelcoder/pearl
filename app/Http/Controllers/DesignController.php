<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateDesignRequest;
use App\Http\Requests\UpdateDesignRequest;
use App\Repositories\DesignRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use File;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use Intervention\Image\ImageManagerStatic as Image;

class DesignController extends AppBaseController {

    /** @var  DesignRepository */
    private $designRepository;

    public function __construct(DesignRepository $designRepo) {
        $this->designRepository = $designRepo;
        $this->middleware('auth', ['except' => 'show']);
    }

    /**
     * Display a listing of the Design.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request) {
        $this->designRepository->pushCriteria(new RequestCriteria($request));
        $designs = $this->designRepository->all();

        return view('designs.index')->with('designs', $designs);
    }

    /**
     * Show the form for creating a new Design.
     *
     * @return Response
     */
    public function create() {
        return view('designs.create');
    }

    /**
     * Store a newly created Design in storage.
     *
     * @param CreateDesignRequest $request
     *
     * @return Response
     */
    public function store(CreateDesignRequest $request) {
        $data = $request->all();

        $images = array();
        if ($files = $request->file('image')) {
            foreach ($files as $file) {
                $photoName = $file->getClientOriginalName();

                $path = public_path() . '/assets/images/designs/thumb/';
                File::isDirectory($path) or File::makeDirectory($path, 0777, true, true);
                Image::make($file)->resize(150, 150, function ($constraint) {
                    $constraint->upsize();
                })->save('assets/images/designs/thumb/' . $photoName);

                $path = public_path() . '/assets/images/designs/hp/';
                File::isDirectory($path) or File::makeDirectory($path, 0777, true, true);
                Image::make($file)->resize(660, 440, function ($constraint) {
                    $constraint->upsize();
                })->save('assets/images/designs/hp/' . $photoName);

                $path = public_path() . '/assets/images/designs/single/';
                File::isDirectory($path) or File::makeDirectory($path, 0777, true, true);
                Image::make($file)->resize(870, 1170, function ($constraint) {
                    $constraint->upsize();
                })->save('assets/images/designs/single/' . $photoName);

                $path = public_path() . '/assets/images/designs/upsell/';
                File::isDirectory($path) or File::makeDirectory($path, 0777, true, true);
                Image::make($file)->resize(800, 900, function ($constraint) {
                    $constraint->upsize();
                })->save('assets/images/designs/upsell/' . $photoName);

                $file->move(public_path('assets/images/designs'), $photoName);

                $images[] = $photoName;
            }

            $data['image'] = serialize($images);
        } else
            unset($data['image']);



        $design = $this->designRepository->create($data);

        Flash::success('Design saved successfully.');

        return redirect(route('designs.index'));
    }

    /**
     * Display the specified Design.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id) {
        $design = $this->designRepository->findWithoutFail($id);
        $other = \App\Models\Design::where('id', '!=', $id)->get();

        if (empty($design)) {
            Flash::error('Design not found');

            return redirect(route('designs.index'));
        }

        return view('designs.show')->with('design', $design)->with('other', $other);
    }

    /**
     * Show the form for editing the specified Design.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id) {
        $design = $this->designRepository->findWithoutFail($id);

        if (empty($design)) {
            Flash::error('Design not found');

            return redirect(route('designs.index'));
        }
        $design_image = '';
        $config = '';
        foreach (($design['image']) as $di):
            $design_image.='"' . url('assets/images/designs/thumb/' . $di) . '",';
            $config.='{"caption":"' . url('assets/images/designs/thumb/' . $di) . '","url":"delete_image/' . $di . '?_token=' . csrf_token() . '"},';
        endforeach;
        $image = '[' . rtrim($design_image, ',') . ']';
        $image_config = '[' . rtrim($config, ',') . ']';

        return view('designs.edit')->with('design', $design)->with('image', $image)->with('image_config', $image_config);
    }

    public function delete_image($id, $image) {
        $design = $this->designRepository->findWithoutFail($id);
        $old_image = $design->image;
        if (array_search($image, $old_image) !== false) {
            File::delete(public_path() . '/assets/images/designs/hp/' . $image);
            File::delete(public_path() . '/assets/images/designs/upsell/' . $image);
            File::delete(public_path() . '/assets/images/designs/single/' . $image);
            File::delete(public_path() . '/assets/images/designs/thumb/' . $image);
            unset($old_image[array_search($image, $old_image)]);
        }
        $data['image'] = serialize($old_image);
        $design = $this->designRepository->update($data, $id);
        return json_encode(1);
    }

    /**
     * Update the specified Design in storage.
     *
     * @param  int              $id
     * @param UpdateDesignRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateDesignRequest $request) {
        $design = $this->designRepository->findWithoutFail($id);

        if (empty($design)) {
            Flash::error('Design not found');

            return redirect(route('designs.index'));
        }

        $data = $request->all();
        $images = array();
        if ($files = $request->file('image')) {
            foreach ($files as $file) {
                $photoName = $file->getClientOriginalName();

                $path = public_path() . '/assets/images/designs/thumb/';
                File::isDirectory($path) or File::makeDirectory($path, 0777, true, true);
                Image::make($file)->resize(150, 150, function ($constraint) {
                    $constraint->upsize();
                })->save('assets/images/designs/thumb/' . $photoName);

                $path = public_path() . '/assets/images/designs/hp/';
                File::isDirectory($path) or File::makeDirectory($path, 0777, true, true);
                Image::make($file)->resize(660, 440, function ($constraint) {
                    $constraint->upsize();
                })->save('assets/images/designs/hp/' . $photoName);

                $path = public_path() . '/assets/images/designs/single/';
                File::isDirectory($path) or File::makeDirectory($path, 0777, true, true);
                Image::make($file)->resize(870, 1170, function ($constraint) {
                    $constraint->upsize();
                })->save('assets/images/designs/single/' . $photoName);

                $path = public_path() . '/assets/images/designs/upsell/';
                File::isDirectory($path) or File::makeDirectory($path, 0777, true, true);
                Image::make($file)->resize(800, 900, function ($constraint) {
                    $constraint->upsize();
                })->save('assets/images/designs/upsell/' . $photoName);


                $file->move(public_path('assets/images/designs'), $photoName);
                $images[] = $photoName;
            }
            $images = array_merge($images, $design->image);
            $data['image'] = serialize($images);
        } else
            unset($data['image']);


        $design = $this->designRepository->update($data, $id);

        Flash::success('Design updated successfully.');

        return redirect(route('designs.index'));
    }

    /**
     * Remove the specified Design from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id) {
        $design = $this->designRepository->findWithoutFail($id);

        if (empty($design)) {
            Flash::error('Design not found');

            return redirect(route('designs.index'));
        }

        // File::delete(public_path() . 'assets/images/designs/' . $design->image);
        foreach ($design->image as $image):
            File::delete(public_path() . '/assets/images/designs/hp/' . $image);
            File::delete(public_path() . '/assets/images/designs/upsell/' . $image);
            File::delete(public_path() . '/assets/images/designs/single/' . $image);
            File::delete(public_path() . '/assets/images/designs/thumb/' . $image);
        endforeach;

        $this->designRepository->delete($id);

        Flash::success('Design deleted successfully.');

        return redirect(route('designs.index'));
    }

}
