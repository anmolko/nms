<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Auth::routes([
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

Route::any('/register', function() {
    abort(404);
});

Route::get('/slider-list', function () {
    return redirect('/');
});


Route::get('/categories', function () {
    return redirect('/blog');
});

Route::get('/contact-us', 'App\Http\Controllers\FrontController@contact')->name('contact');
Route::post('/contact-us', 'App\Http\Controllers\FrontController@contactStore')->name('contact.store');


Route::get('/', 'App\Http\Controllers\FrontController@index')->name('home');

//blog
Route::get('blog/search/', 'App\Http\Controllers\FrontController@searchBlog')->name('searchBlog');

Route::get('blog/{slug}','App\Http\Controllers\FrontController@blogSingle')->name('blog.single');
Route::get('service/{slug}','App\Http\Controllers\FrontController@serviceSingle')->name('service.single');
Route::get('/service','App\Http\Controllers\FrontController@service')->name('service.frontend');
Route::get('/blog/categories/{slug}', 'App\Http\Controllers\FrontController@blogCategories')->name('blog.category');
Route::get('/blog', 'App\Http\Controllers\FrontController@blogs')->name('blog.frontend');
Route::get('/faq', 'App\Http\Controllers\FrontController@faq')->name('faq.frontend');


//jobs
Route::get('demand/search/', 'App\Http\Controllers\FrontController@searchDemand')->name('searchDemand');

Route::get('/demand','App\Http\Controllers\FrontController@demands')->name('demand.list');
Route::get('/demand/{slug}','App\Http\Controllers\FrontController@demandSingle')->name('demand.single');

Route::get('/privacy-policy', 'App\Http\Controllers\FrontController@privacy')->name('privacy.frontend');
Route::get('/terms-condition', 'App\Http\Controllers\FrontController@terms')->name('term.frontend');

//slider list single page
Route::get('slider-list/{slug}','App\Http\Controllers\FrontController@sliderSingle')->name('slider.single');

//end blog

Route::group(['prefix' => 'auth', 'middleware' => ['auth']], function () {
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

    //signed-in user routes
    Route::get('/profile/{slug?}', 'App\Http\Controllers\UserController@profile')->name('profile');
    Route::get('/filemanager', 'App\Http\Controllers\HomeController@filemanager')->name('filemanager');
    Route::get('/profile/edit/{slug}', 'App\Http\Controllers\UserController@profileEdit')->name('profile.edit');
    Route::post('/profile/socials/', 'App\Http\Controllers\UserController@socialsUpdate')->name('profile.socials');
    Route::put('/profile/{id}/update', 'App\Http\Controllers\UserController@update')->name('user.update');
    Route::post('/user-image/update/', 'App\Http\Controllers\UserController@imageupdate')->name('user.imageupdate');
    Route::post('/profile/oldpassword', 'App\Http\Controllers\UserController@checkoldpassword')->name('user.oldpassword');
    Route::post('/profile/password', 'App\Http\Controllers\UserController@profilepassword')->name('user.password');
    Route::post('/user/removeaccount', 'App\Http\Controllers\UserController@removeAccount')->name('user.removeaccount');
    //end of signed-in user routes

    Route::get('/user-management', 'App\Http\Controllers\UserController@alluser')->name('alluser');
    Route::get('/user-management/create', 'App\Http\Controllers\UserController@create')->name('user.create');
    Route::post('/user-management/store', 'App\Http\Controllers\UserController@store')->name('user.store');
    Route::delete('/user-management/{id}', 'App\Http\Controllers\UserController@destroy')->name('user.destroy');
    Route::patch('/status/update/{id}', 'App\Http\Controllers\UserController@statusupdate')->name('user-status.update');
    Route::patch('/role/update/{id}', 'App\Http\Controllers\UserController@roleupdate')->name('user-type.update');

    //homepage
    Route::get('/homepage-setting', 'App\Http\Controllers\HomePageController@index')->name('homepage.index');
    Route::post('/homepage-setting', 'App\Http\Controllers\HomePageController@store')->name('homepage.store');
    Route::put('/homepage-setting/{settings}', 'App\Http\Controllers\HomePageController@update')->name('homepage.update');
    Route::put('/homepage-setting/callaction/{settings}', 'App\Http\Controllers\HomePageController@callactionhome')->name('homepage.action');
    Route::put('/homepage-setting/core-values/{settings}', 'App\Http\Controllers\HomePageController@corevalues')->name('homepage.corevalues');
    Route::put('/homepage-setting/mission-values/{settings}', 'App\Http\Controllers\HomePageController@missionvalues')->name('homepage.mv');
    Route::put('/homepage-setting/makes-us-different/{settings}', 'App\Http\Controllers\HomePageController@makesdifferent')->name('homepage.different');
    Route::put('/homepage-setting/why-us/{settings}', 'App\Http\Controllers\HomePageController@whyus')->name('homepage.whyus');



    Route::get('/contact', 'App\Http\Controllers\ContactController@index')->name('contact.index');
    Route::delete('/contact/{id}', 'App\Http\Controllers\ContactController@destroy')->name('contact.destroy');
    Route::get('/contact/edit/{slug}', 'App\Http\Controllers\ContactController@edit')->name('contact.edit');

    //Blog categories
    Route::get('/blog-category', 'App\Http\Controllers\BlogCategoryController@index')->name('blogcategory.index');
    Route::get('/blog-category/create', 'App\Http\Controllers\BlogCategoryController@create')->name('blogcategory.create');
    Route::post('/blog-category', 'App\Http\Controllers\BlogCategoryController@store')->name('blogcategory.store');
    Route::put('/blog-category/{category}', 'App\Http\Controllers\BlogCategoryController@update')->name('blogcategory.update');
    Route::delete('/blog-category/{category}', 'App\Http\Controllers\BlogCategoryController@destroy')->name('blogcategory.destroy');
    Route::get('/blog-category/{category}/edit', 'App\Http\Controllers\BlogCategoryController@edit')->name('blogcategory.edit');
    //End of Blog categories


    //Blog
    Route::get('/blogs', 'App\Http\Controllers\BlogController@index')->name('blog.index');
    Route::get('/blogs/create', 'App\Http\Controllers\BlogController@create')->name('blog.create');
    Route::post('/blogs', 'App\Http\Controllers\BlogController@store')->name('blog.store');
    Route::put('/blogs/{blogs}', 'App\Http\Controllers\BlogController@update')->name('blog.update');
    Route::delete('/blogs/{blogs}', 'App\Http\Controllers\BlogController@destroy')->name('blog.destroy');
    Route::get('/blogs/{blogs}/edit', 'App\Http\Controllers\BlogController@edit')->name('blog.edit');
    Route::patch('/blogs/{id}/update', 'App\Http\Controllers\BlogController@updateStatus')->name('blog-status.update');

    //End Blog

    Route::get('/dashboard-settings', 'App\Http\Controllers\SettingController@index')->name('settings.index');
    Route::get('/dashboard-settings/create', 'App\Http\Controllers\SettingController@create')->name('settings.create');
    Route::post('/dashboard-settings', 'App\Http\Controllers\SettingController@store')->name('settings.store');
    Route::put('/dashboard-settings/{settings}', 'App\Http\Controllers\SettingController@update')->name('settings.update');
    Route::delete('/dashboard-settings/{settings}', 'App\Http\Controllers\SettingController@destroy')->name('settings.destroy');
    Route::get('/dashboard-settings/{settings}/edit', 'App\Http\Controllers\SettingController@edit')->name('settings.edit');
    Route::post('/dashboard-settings/theme-mode', 'App\Http\Controllers\SettingController@themeMode')->name('settings.theme');
    Route::put('/dashboard-settings/privacy-policy/{settings}', 'App\Http\Controllers\SettingController@privacyPolicy')->name('settings.privacy');
    Route::put('/dashboard-settings/terms-conditions/{settings}', 'App\Http\Controllers\SettingController@termsConditions')->name('settings.terms');
    Route::put('/dashboard-settings/status/{settings}', 'App\Http\Controllers\SettingController@siteStatus')->name('settings.status');

    //for menu
    Route::get('/manage-menus/{slug?}', 'App\Http\Controllers\MenuController@index')->name('menu.index');
    Route::post('/create-menu', 'App\Http\Controllers\MenuController@store')->name('menu.store');
    Route::get('/add-page-to-menu','App\Http\Controllers\MenuController@addPage')->name('menu.page');
    Route::get('/add-service-to-menu','App\Http\Controllers\MenuController@addService')->name('menu.service');
    Route::get('add-post-to-menu','App\Http\Controllers\MenuController@addPost')->name('menu.post');
    Route::get('add-custom-link','App\Http\Controllers\MenuController@addCustomLink')->name('menu.custom');
    Route::get('/update-menu','App\Http\Controllers\MenuController@updateMenu')->name('menu.updateMenu');
    Route::post('/update-menuitem/{id}','App\Http\Controllers\MenuController@updateMenuItem')->name('menu.updatemenuitem');
    Route::get('/delete-menuitem/{id}/{key}/{in?}/{inside?}','App\Http\Controllers\MenuController@deleteMenuItem')->name('menu.deletemenuitem');
    Route::get('/delete-menu/{id}','App\Http\Controllers\MenuController@destroy')->name('menu.delete');

    //services
    Route::get('/services', 'App\Http\Controllers\ServiceController@index')->name('services.index');
    Route::get('/services/create', 'App\Http\Controllers\ServiceController@create')->name('services.create');
    Route::post('/services', 'App\Http\Controllers\ServiceController@store')->name('services.store');
    Route::put('/services/{service}', 'App\Http\Controllers\ServiceController@update')->name('services.update');
    Route::delete('/services/{service}', 'App\Http\Controllers\ServiceController@destroy')->name('services.destroy');
    Route::get('/services/{service}/edit', 'App\Http\Controllers\ServiceController@edit')->name('services.edit');

    //pages

    Route::get('/pages', 'App\Http\Controllers\PageController@index')->name('pages.index');
    Route::get('/pages/create', 'App\Http\Controllers\PageController@create')->name('pages.create');
    Route::post('/pages', 'App\Http\Controllers\PageController@store')->name('pages.store');
    Route::put('/pages/{pages}', 'App\Http\Controllers\PageController@update')->name('pages.update');
    Route::delete('/pages/{pages}', 'App\Http\Controllers\PageController@destroy')->name('pages.destroy');
    Route::get('/pages/{pages}/edit', 'App\Http\Controllers\PageController@edit')->name('pages.edit');
    Route::patch('/pages/{id}/update', 'App\Http\Controllers\PageController@updateStatus')->name('pages-status.update');

    Route::get('/section-elements/', 'App\Http\Controllers\SectionElementController@index')->name('section-elements.index');
    Route::get('/section-elements/create/{id}', 'App\Http\Controllers\SectionElementController@create')->name('section-elements.create');
    Route::post('/section-elements', 'App\Http\Controllers\SectionElementController@store')->name('section-elements.store');
    Route::put('/section-elements/{elements}', 'App\Http\Controllers\SectionElementController@update')->name('section-elements.update');
    Route::delete('/section-elements/{elements}', 'App\Http\Controllers\SectionElementController@destroy')->name('section-elements.destroy');
    Route::get('/section-elements/{elements}/edit', 'App\Http\Controllers\SectionElementController@edit')->name('section-elements.edit');
    Route::put('/section-elements-upload-gallery/{id}', 'App\Http\Controllers\SectionElementController@uploadGallery')->name('section-elements-gallery.update');
    Route::post('/section-elements/image-delete', 'App\Http\Controllers\SectionElementController@deleteGallery')->name('section-elements-gallery.delete');
    Route::get('/section-elements/gallery/{id}', 'App\Http\Controllers\SectionElementController@getGallery')->name('section-elements-gallery.display');

    Route::put('/section-elements-upload-gallery2/{id}', 'App\Http\Controllers\SectionElementController@uploadGallery2')->name('section-elements-gallery2.update');
    Route::post('/section-elements/image2-delete', 'App\Http\Controllers\SectionElementController@deleteGallery2')->name('section-elements-gallery2.delete');
    Route::get('/section-elements/gallery2/{id}', 'App\Http\Controllers\SectionElementController@getGallery2')->name('section-elements-gallery2.display');
    Route::post('/section-elements/tablist/', 'App\Http\Controllers\SectionElementController@tablistUpdate')->name('section-elements.tablistUpdate');

    //End of pages

    //sliders
    Route::get('/sliders', 'App\Http\Controllers\SliderController@index')->name('sliders.index');
    Route::get('/sliders/create', 'App\Http\Controllers\SliderController@create')->name('sliders.create');
    Route::post('/sliders', 'App\Http\Controllers\SliderController@store')->name('sliders.store');
    Route::put('/sliders/{sliders}', 'App\Http\Controllers\SliderController@update')->name('sliders.update');
    Route::delete('/sliders/{sliders}', 'App\Http\Controllers\SliderController@destroy')->name('sliders.destroy');
    Route::get('/sliders/{sliders}/edit', 'App\Http\Controllers\SliderController@edit')->name('sliders.edit');
    Route::patch('/sliders/{id}/update', 'App\Http\Controllers\SliderController@updateStatus')->name('sliders-status.update');
    //End sliders

    Route::get('/clients', 'App\Http\Controllers\ClientController@index')->name('clients.index');
    Route::get('/clients/create', 'App\Http\Controllers\ClientController@create')->name('clients.create');
    Route::post('/clients', 'App\Http\Controllers\ClientController@store')->name('clients.store');
    Route::put('/clients/{clients}', 'App\Http\Controllers\ClientController@update')->name('clients.update');
    Route::delete('/clients/{clients}', 'App\Http\Controllers\ClientController@destroy')->name('clients.destroy');
    Route::get('/clients/{clients}/edit', 'App\Http\Controllers\ClientController@edit')->name('clients.edit');


    //jobs

    Route::get('/demands', 'App\Http\Controllers\JobController@index')->name('job.index');
    Route::get('/demands/create', 'App\Http\Controllers\JobController@create')->name('job.create');
    Route::post('/demands', 'App\Http\Controllers\JobController@store')->name('job.store');
    Route::put('/demands/{demand}', 'App\Http\Controllers\JobController@update')->name('job.update');
    Route::delete('/demands/{jobs}', 'App\Http\Controllers\JobController@destroy')->name('job.destroy');
    Route::get('/demands/{jobs}/edit', 'App\Http\Controllers\JobController@edit')->name('job.edit');
    Route::patch('/demands/{id}/update', 'App\Http\Controllers\JobController@updateStatus')->name('job-status.update');

    //End jobs
});


Route::get('/{page}', 'App\Http\Controllers\FrontController@page')
        ->name('page');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
