<?php

use App\User;
use App\Models\Comment;
use App\Models\Roles;
use App\Models\Kala;
use App\Models\Baskets;



// use App\Models\User;




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
// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/users/delete/{id}',function($id){
    
    $user= User::find($id);
    $user->delete();

});

Route::get('/users/delete2/{id}',function($id){
    
    $user= User::destroy($id);
    $user= User::where('id',$id)->delete();

    
});

Route::get('/users/softdelete/all',function(){
    return User::onlyTrashed()->get();

});

Route::get('/users/forcedelete/{id}',function($id){

    $user= User::where('id',$id)->forcedelete();
    

});

Route::get('/comments/user',['middleware'=>'Role'],function(){

    echo "<br>route is running";

    // $comments= Comment::all();
    // foreach($comments as $comment){
    //     echo $comment->User['name'];
    // }

});

Route::get('/comments/{id}/user',function($id){

   return User::find($id)->comments;

});

Route::get('/user/{id}/role',function($id){

    $user= User::find($id);
    // var_dump($user);die;
    return $user->roles()->get();
 
 });

Route::get('/user/roles/attach',function(){

    $user= User::find($id);
    $role=Roles::find(1);
    $user->Roles()->attach($role->id,['created_at'=>'2020-02-05 00:00:00']);
 
 });

Route::get('/user/roles/dettach',function(){

    $user= User::find($id);
    $role=Roles::find(1);
    $user->Roles()->detach($role->id);
 
 });

Route::get('/session',[ 'uses' => 'PostController@index']);


Route::get('/kala/{id}/basket',function($id){

    $kala=Kala::findOrFail($id);
    $basket=new Baskets(['num'=>'6']);
    $kala->baskets()->save($basket);
    return "saved";

});

Route::get('/kala/{id}/basketread',function($id){

    $kala=Kala::findOrFail($id);
    foreach($kala->Baskets as $basket){
        echo $kala->name. " said :  ".$basket->num. "<br>";
    }

});

Route::get('/kala/{id}/basketcreate',function($id){

    $kala=Kala::findOrFail($id);
    $basket=Baskets::findOrFail(1);
    $kala->baskets()->save($basket);
    return "successful";

});

Route::get('/kala/{id}/faktorsync',function($id){

    $kala=Kala::findOrFail($id);
    $kala->Faktors()->sync([1]);
    return true;

});






Route::get('/homepagesite',array('as'=>'homepage',function(){
    return route('homepage');
    // if($id>10)
    // echo "this page is home page $id";
    // else
    // echo "sorry";
}));


Route::get('/', 'SiteController@showproduct');


Route::get('/allusers',['as' => 'users.all', 'uses' => 'SiteController@getall']);

Route::post('/validate',['as' => 'users.all', 'uses' =>'SiteController@validateusers']);

Route::get('/login',['as' => 'users.login', 'uses' => 'UsersController@login']);

Route::get('/register',['as' => 'kala.category', 'uses' => 'UsersController@register']);

Route::get('/showusers',['as' => 'users.showusers', 'uses' => 'SiteController@getall']);

Route::get('/showusers/{id}',['as' => 'users.update', 'uses' => 'SiteController@update']);

// Route::get('/update/{id}',['as' => 'users.update', 'uses' => 'SiteController@updateusers']);

Route::get('/deleteusers/{id}',['as' => 'users.update', 'uses' => 'SiteController@delete']);

Route::get('/shopmobile',['as' => '/', 'uses' => 'KalaController@shopmobile']);



Route::get('/kalaexplanation',['as' => 'kala.shopmobile', 'uses' => 'KalaController@kalaexplanation']);

Route::get('/digitalkala',['as' => '/', 'uses' => 'KalaController@digitalkala']);

Route::get('/checkout-step1',['as' => '/', 'uses' => 'BasketController@checkoutstep1']);

Route::get('/checkout-step2',['as' => '/checkout-step1', 'uses' => 'BasketController@checkoutstep2']);

Route::get('/checkout-step3',['as' => '/checkout-step2', 'uses' => 'BasketController@checkoutstep3']);

Route::get('/checkout-step4',['as' => '/checkout-step3', 'uses' => 'BasketController@checkoutstep4']);




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/admin/products', 'Admin\ProductController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){

    Route::get('alluserdatatabels', 'UserController@alluserdatatabels')->name('users.alluserdatatabels');
    Route::resource('/users', 'UserController',['except'=>['show','create','store']]);
    
});

//==============================Admin Start============================================ 
Route::get('/edit/{id}', 'Admin\UserController@edit');
Route::get('/delete/{id}', 'Admin\UserController@destroy');
Route::post('/update', 'Admin\UserController@updateusers'); 
Route::get('/users/all', 'Admin\UserController@index');

Route::get('/edit/{id}', 'Admin\ProductController@edit');
Route::get('/update/{id}', 'Admin\ProductController@update');
Route::get('/delete/{id}', 'Admin\ProductController@destroy');
Route::post('/update', 'Admin\ProductController@updateusers');

Route::get('/showmobile','Admin\ProductController@show');
Route::get('/ShowProducts','Admin\ProductController@showproduct'); 

Route::get('/editproduct/{id}', 'Admin\ProductController@edit');
Route::get('/deleteproduct/{id}', 'Admin\ProductController@destroy');
Route::get('/InsertProducts','Admin\ProductController@create'); 

Route::get('/logout','Auth\LoginController@logout');


//==========================Admin End===========================================




