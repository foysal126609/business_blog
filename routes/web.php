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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/','FrontEndController@home');
Route::get('/aboutUs','FrontEndController@aboutUs');
Route::get('/services','FrontEndController@services');
Route::get('/blog','FrontEndController@blog');
Route::get('/blog-details/{id}','FrontEndController@blogDetails');
Route::get('/contact','FrontEndController@contact');






Auth::routes();



Route::group(['middleware' =>'AuthenticateMiddleware'], function (){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/add-catagory', 'CategoryController@addCatagory');
    Route::post('/category/new', 'CategoryController@saveCatagoryInfo');
    Route::get('/manage-catagory', 'CategoryController@manageCatagory');
    Route::get('/edit-category/{id}', 'CategoryController@editCategoryInfo');
    Route::post('/category/update', 'CategoryController@updateCategoryInfo');
    Route::get('/delete-category/{id}', 'CategoryController@deleteCategory');

    Route::get('/add-Blog', 'BlogController@addBlog');
    Route::post('/blog/new', 'BlogController@saveBlogInfo');
    Route::get('/manage-Blog', 'BlogController@manageBlog');
    Route::get('/blogs/details/{id}', 'BlogController@viewBlogDetailsInfo');
    Route::get('/blogs/edit/{id}', 'BlogController@editBlogDetailsInfo');
    Route::post('/blog/update', 'BlogController@updateBlogDetailsInfo');
    Route::get('/blogs/unpublished/{id}', 'BlogController@unpublishedBlogInfo');
    Route::get('/blogs/published/{id}', 'BlogController@publishedBlogInfo');
    Route::get('/delete-blog/{id}', 'BlogController@deleteBloginfo');

    Route::get('/add-slider', 'SliderController@addSlider');
    Route::post('/slider/new', 'SliderController@saveSlider');
    Route::get('/manage-slider', 'SliderController@manageSlider');
    Route::get('/slider/unpublished/{id}', 'SliderController@unpublishedSliderInfo');
    Route::get('/slider/published/{id}', 'SliderController@publishedSliderInfo');
    Route::get('/delete-slider/{id}', 'SliderController@deleteSliderinfo');

    Route::get('/manage-comment', 'CommentController@manageCommentInfo');
    Route::get('/comment/unpublished/{id}', 'CommentController@unpublishedCommentInfo');
    Route::get('/comment/published/{id}', 'CommentController@publishedCommentInfo');
    Route::get('/delete-comment/{id}', 'CommentController@deleteComment');

});



Route::post('/customer-registration', 'CustomerController@saveCustomerInfo');
Route::post('/user-login', 'CustomerController@userLogin');
Route::get('/user-logout', 'CustomerController@userLogout');

Route::post('/user-comment', 'CommentController@saveUserComment');
//->middleware('CustomerMiddleware');



