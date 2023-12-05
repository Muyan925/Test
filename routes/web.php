<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\RegisterController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


   
Route::get('/', function () {

    return view('posts',[
        'posts'=>Post::latest()->with(['category','author'])->get()
    ]);
});
    
  
    



   


   



Route::get('posts/{post:slug}', function (Post $post) {
 
    return view('post', [ 
        'post'=>$post
    ]);



    // if(! file_exists($path =  __DIR__ . "/../resources/posts/{$slug}.html")){
    //      return redirect('/');
    //     // abort(404);
    // }
   
   
    // $post = cache()->remember("posts.{$slug}", 1200, fn() => file_get_contents($path));


    // return view('post', [ 'post'=> $post]);
});

Route::get('categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'posts' => $category->posts->load(['category','author']) 
    ]);
});


Route::get('authors/{author:username}', function (User $author) {
    return view('posts', [
        'posts' => $author->posts->load(['category','author'])  
    ]);
});

