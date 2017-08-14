<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::model('design', 'App\Models\Design');
// Route::pattern('slug', '[a-z0-9- _]+');

# Error pages should be shown without requiring login
// Route::get('404', function () {
//     return View('admin/404');
// });

// Route::get('500', function () {
//     return View::make('admin/500');
// });


Route::get('/r', function () {
    function philsroutes()
    {
        $routeCollection = Route::getRoutes();
        echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">';
        echo "<div class='container'><div class='col-md-12'><table class='table table-striped' style='width:100%'>";
        echo '<tr>';
        echo "<td width='10%'><h4>HTTP Method</h4></td>";
        echo "<td width='30%'><h4>URL</h4></td>";
        echo "<td width='30%'><h4>Route</h4></td>";
        echo "<td width='30%'><h4>Corresponding Action</h4></td>";
        echo '</tr>';
        foreach ($routeCollection as $value) {
            echo '<tr>';
            echo '<td>'.$value->methods()[0].'</td>';
            echo "<td><a href='".$value->uri()."' target='_blank'>".$value->uri().'</a> </td>';
            echo '<td>'.$value->getName().'</td>';
            echo '<td>'.$value->getActionName().'</td>';
            echo '</tr>';
        }
        echo '</table></div></div>';
        echo '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>';
    }

    return philsroutes();
});


    Route::get('/', ['as'=> 'homepage', 'uses' => 'HomeController@index']);
    Route::get('/about', ['as'=> 'about', 'uses' => 'HomeController@about']);
    Route::get('/parties', ['as'=> 'about', 'uses' => 'HomeController@parties']);
    Route::get('/contact', ['as'=> 'parties', 'uses' => 'HomeController@contact']);
    Route::post('/contact/sendrequest', ['as'=> 'contact/sendrequest', 'uses' => 'HomeController@sendrequest']);
    Route::get('/terms', ['as'=> 'terms', 'uses' => 'HomeController@terms']);

    Route::get('designs/{design}', ['as'=> 'design', 'uses' => 'DesignController@show']);

    Auth::routes();


    Route::middleware('auth')->group(function ()
    {
        Route::prefix('admin')->group(function ()
        {
            Route::get('/', ['as'=> 'admin', 'uses' => 'HomeController@admin']);
            Route::post('designs/{design}/delete_image/{image}', ['as'=> 'design.delete_image', 'uses' => 'DesignController@delete_image']);
            Route::post('designs/uploadimage', ['as'=> 'design.uploadimage', 'uses' => 'DesignController@uploadimage']);
            Route::post('posts/{post}/delete_image/{image}', ['as'=> 'post.delete_image', 'uses' => 'PostController@delete_image']);
            Route::post('posts/{post}/delete_banner/{image}', ['as'=> 'post.delete_banner', 'uses' => 'PostController@delete_banner']);
            Route::post('categories/{category}/delete_image/{image}', ['as'=> 'categories.delete_image', 'uses' => 'DCategoryController@delete_image']);


            Route::resource('designs', 'DesignController', ['except' => ['show'], 'names' => [
            'create' => 'designs.create'
            ]]);

            Route::resource('posts', 'PostController');


            Route::resource('categories', 'CategoryController');

            Route::resource('tags', 'TagController');

        });
    });
