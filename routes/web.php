<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Models\Category;

use Illuminate\Support\Facades\URL;

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

Route::get('/', function () {
    return view('home');
});

/* products routes */
Route::get('/products/{rowId}', [App\Http\Controllers\ProductController::class, 'index'])->name('product.index');
Route::get('/products/single/{rowId}', [App\Http\Controllers\ProductController::class, 'show'])->name('product.show');
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/blog', function () {
    return view('blog.index');
});
Route::get('/about', function () {
    return view('about-us');
});



Auth::routes();

Route::get('/home', function () {
    return view('home');
});


Route::get('sitemap', function(){
    //create new sitemap object
     $sitemap = App::make("sitemap"); 
     //add items to the sitemap (url, date, priority, freq)
     $sitemap->add(URL::to('/'), '2012-08-25T20:10:00+02:00', '1.0', 'daily'); 
     $sitemap->add(URL::to('contact'), '2012-08-26T12:30:00+02:00', '0.9', 'monthly'); 
     $sitemap->add(URL::to('about'), '2012-08-26T12:30:00+02:00', '0.9', 'monthly'); 
     $sitemap->add(URL::to('blog'), '2012-08-26T12:30:00+02:00', '0.9', 'monthly'); 
     //get all posts from db 
     $categories = Category::all(); 
     //add every post to the sitemap 
     foreach ($categories as $category) { $sitemap->add(URL::to('products/'.$category->id), $category->updated_at, '1.0', 'daily'); } 
     //generate your sitemap (format, filename)
      $sitemap->store('xml', 'sitemap'); 
    // this will generate file mysitemap.xml to your public folder 
    return redirect(url('sitemap.xml'));
    
    });
