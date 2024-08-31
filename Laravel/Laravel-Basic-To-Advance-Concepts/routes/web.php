<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Post;

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



// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/greeting', function(){  // show hello world at where we route
//     return "Hello World";
// });

// Route::get('/test/{tid?}', function($did = "karm"){ // ? => if id is pass or not it show the Hello Test but we have to use default parameter in function if not used id
//     return "Hello Test" . $did;
// });


// we can use the regular expression to evaluate the url parameters

// Route::get('test/{id}', function($sid){ 
//     return "You SID = " . $sid;
// })->where('id', '[0-9]+'); // use url parameter name not function pass name

// Route::get('test/{name}', function($name){
//     return "You Name = " . $name;
// })->where('name', '[A-za-z]+');


// Redirection / to /login

// Route::redirect('/', '/login');

// Route::get('/login', function(){
//     return "Welcome To Login Form";
// });


// Route list see in cmd

// php artisan route:list => use this in cmd to see all the routes
// php artisan route:list --except-vendor => it is remove the ignition partition routes from the list
// All the information of route is in the RouteServiceProvider.php
// By default for access web.php, we do not have to write any extra parameter in url it run on main page '/' for other file like api.php to access this we have to write /api


// Redirect from one route to another
// Route::get('/login', function(){
//     return "Welcome To Login Form<br>If Not Have Account Go To <a href='/signup'>Signup</a> Page";
// });

// Route::get('/signup', function(){
//     return "Welcome To SignUp Page";
// });


// Create View Blade(it is front end)
//it is fast then html and files are in Resource/Views folder
// it has all the frontend part

// Route::get('/greeting', function(){ // use small letter
//     return view('greeting');
// });
//Same as Upper
// Route::view('/greeting', 'greeting');


// pass the variable
// Route::get('greeting', function(){
//     $name = "Karm Patel";
//     $id = 1;
//     return view('greeting', ['name' => $name, 'id' => $id]);
// });
//same as upper
// Route::get('greeting', function(){
//     $name = "Karm Patel";
//     $id = 1;
//     return view('greeting', compact('name', 'id'));
// });
//same as upper
// Route::get('greeting', function(){
//     $name = "Karm Patel";
//     $id = 1;
//     return View::make('greeting', ['name' => $name, 'id' => $id]);
//     // return view('greeting')->with('name', $name)->with('id', $id);
// });


// Nested Views 
// Route::get('/test', function(){
//     return view('admin.profile'); 
//     // return view('admin/profile');
// });

// php artisan view:clear => for clear the view
// php artisan route:clear => for clear the route


// Master Layout in Blade
// @ use for blade directive also it start the path with views directory so we don't have to use ../ for back
// Route::view('master', 'layouts.master');  // we can extend the master blade and use it

// Route::view('test', 'test');

// Route::view('test1', 'test1');

// Route::view('user', 'user');

// Route::view('post', 'post');


// Controller => use to make individual file for different task
// used to interect the frontend and backend server
// We can make controller using below code in cmd
// php artisan make:controller UserController

// Now use Controller to Page

// use App\Http\Controllers\UserController;
// Route::get('users', [UserController::class, 'index']);
// Route::get('users/show/{name}/{id}', [UserController::class, 'show']);


// php artisan make:controller HostController --resource
// singular name(HostName)
// Upper Command use to make the Conroller with predifined show, edit, update, destroy method(CRUD)

// we can use it using below
// use App\Http\Controllers\HostController;
// Route::resource('posts', HostController::class);  // use plural name


// Route::get('/connection', function(){
//     try{
//         DB::connection()->getPdo();
//         return "Connected Successfully";
//     }catch(\Exception $e){
//         dd($e->getMessage());
//     }
// });


// Migration use for Tables Operation in DataBase
// php artisan make:migration create_users_table => used to make the migration file // plural
// php artisan migrate => run all the migrations file and create all the tables
// php artisan migrate:refresh => it is drop(rollback) the migration and re-create it and so on(rollback and re-create)
// php artisan migrate:fresh => it is drop all the tables and re-create it

// php artisan make:migration add_is_active_column_into_table --table=posts   
// ==> it create the method in migration file to add the column and you can add the column is_active is column name
// ==> --table used to add column in existing(method name show table)
// ==> --create used to table create(method name show create)
// Now you have to go new created file in migration and then you and add or drop the new column from that
// In migration up method used to create the things and down method used to drop the things
// and then use => php artisan migrate
// it add or drop only columns that defined in new file for particular table that we defined in command

// php artisan migrate:rollback => rollback all the migration
// php artisan migrate => to create again
// php artisan migrate:rollback --step=2 => it rollback last 2 migration
// php artisan migrate:rollback --path=database\migrations\2023_04_23_095949_add_is_active_column_into_table.php  => it is used to rollback the migration using path

// php artisan migrate:status => to check table status

// php artisan migrate --force => to migrate forcefully

// php artisan migrate:reset => to rollback all migration



// Object Relational Mapping(ORM) = Larvel Eloquent
// it is used to interact with database

// php artisan make:model model_name => for make model it is in the app/models
// model name is singular and make the model_name like your database table name
// also for security purpose you can assign database table in the model file also if table name is different

// php artisan make:model model_name -m => it make model with also its migration


// Add data to database

// Mass Fillable => we have to defin first table which we have to enter in database we have to make it fillable for security reasons 
// for make fillable write code in models that we define for particular data
// protected $fillable = ['col1', 'col2', and so on];

// use App\Models\Post;

// Route::get('test', function(){

    // Post::create([
    //     'title' => 'PHP 8',
    //     'description' => 'PHP 8 is very cool',
    //     'is_publish' => true,
    //     'is_active' => true
    // ]);
    // return "Inserted Successfully";

    // $posts = Post::all(); // fetch all data
    // return $posts;

    // $posts = Post::find(2); // fetch id = 2 data
    // return $posts;

    // $posts = Post::findOrFail(4); // find id = 4 and if not exist then it show 404 error
    // return $posts;
    
    // $posts = Post::find(4); // custom exception
    // if(!$posts){
    //     return "Post Not Found";
    // }
    // return $posts;

    // $posts = Post::where('title', 'Laravel 9')->get(); //fetch records where title column = Laravel 9
    // $posts = Post::where('title', '=', Laravel 9')->get();  //same as upper
    // $posts = Post::where('title', 'Laravel 9')->where('is_publish', false)->get(); for two condition
    // $posts = Post::where('title', 'Laravel 9')->orwhere('is_publish', true)->get(); // or use in condition
    // $posts = Post::where(['title' => 'Laravel 9', 'is_publish' => false])->get(); // using array
    // if(!$posts){
    //     return "Post Not Found";
    // }
    // return $posts;

    // $post = Post::find(2); // search // we can also use where condition
    // if(! $post){
    //     return "Post Not Found";
    // }
    // $post->update([  // Update the record
    //     'title' => 'PHP 8.1.2',
    // ]);
    // return 'Updated Successfully';


    // $post = Post::find(2); // search // we can also use where condition
    // if(! $post){
    //     return "Post Not Found";
    // }
    // else{
    //     $post->delete();  // Delete the record
    //     return 'Deleted Successfully';
    // }

// });

    // use App\Http\Controllers\HostController;
    // Route::get('posts', [HostController::class, 'index']);
    // Route::get('posts/store', [HostController::class, 'store']);
    // Route::get('posts/delete', [HostController::class, 'destroy']);



    // For use the anchor tag create.blade.php 
    Route::get('/test1', function(){
        return "Test Page";
    })->name('test.1');

    Route::get('/test2', function(){
        return "Test2 Page";
    })->name('test.2');

    use App\Http\Controllers\HostController;
    Route::resource('posts', HostController::class);
    
    // CSRF Token used to save the site from CRAPS Type Attack

    // NOTE: Use fake filler chrome extention that use for fill the fake data in the site forms
        //   For Form Validation we can use parsley js file and its css (jquery reuire)

    

    // use Illuminate\Support\Facades\Session;
    // Route::get('test', function(){ 
    //     Session::put('login', 'You are Logged In'); // put method is only for session method available to set session

    //     // Session::forget('login');  // it is for particular session forget
    //     Session::flush();  // it is for destroy all the session

    //     if(Session::has('login')){
    //         return "Session is set.";
    //     }
    //     else{
    //         return "Session is not set.";
    //     }
    // });

    // another method to set session(work or not try this)
    // use Illuminate\Support\Facades\Session;
    // Route::get('test2', function(Request $request){
    //    $request->session()->flash('login', 'You are Logged In'); // flash used to set first time session
    //     // Session::flash('login', 'You are Logged In');
    //     if(Session::has('login')){
    //         return "Session is set.";
    //     }
    //     else{
    //         return "Session is not set.";
    //     }
    // });


    // php artisan vendor:publish => it has many codes that use in pagination, mail or other feature from that which we have to add then enter that number


    // php artisan make:request Post/CreateRequest  => it is used for make the request create a request folder in app it's file hase to functions rules and authorize


    Route::get('posts/soft-delete/{id}', [HostController::class, 'softDelete'])->name('posts.soft-delete');
    Route::get('get/posts', [HostController::class, 'getPosts'])->name('get.posts');

    Route::get('test11', function(){   
        $user = User::first();
        return $user->post; // we have to add use statementin top
    });

    Route::get('test22', function(){
        $post = Post::first();
        return $post->user; // we have to add use statementin top
    });

    Route::get('test111', function(){
        $users = User::first();
        return $users->posts;
    });

    Route::get('test222', function(){
        $post = Post::first();
        return $post->user;
    });

    Route::get('test1111', function(){
        $user = User::first();
        return $user->postComment;
    });

    Route::get('test11111', function(){
        $user = User::first();
        return $user->postComments;
    });

    // php artisan make:model Role -m => make model with migration (-mcf for migration, contoller, factory three)

    Route::get('test22222', function(){
        $user = User::first();
        $post = Post::first();

        // return $user->roles()->attach($post);
        //  $user->roles()->detach($post);
        // return $user->roles;

        // $user->users()->attach($user);

        // $user->roles()->attach([1, 2, 3, 4]);  // it add 1, 2, 3, 4(ids relations in role_user table)

        // $user->roles()->detach([1, 2, 3, 4]);  // it remove 1, 2, 3, 4(ids relations in role_user table)
 
        // $user->roles()->sync([1, 2]); // it remove all id other then 1 and 2(ids relations in role_user table)

        return 'attached';
    });

    Route::get('test111111', function(){
        $user = User::first();
        return $user->image;
    });

    Route::get('test222222', function(){
        $post = Post::first();
        return $post->image;
    });


    Route::get('test33', function(){ 
        $image = Image::first(); // for user 
        // $image = Image::find(2); // for post
        return $image->imageable;
    });
    
    Route::get('test333', function(){
        $user = User::first();
        return $user->images;
    });

    Route::get('test444', function(){
        $post = Post::first();
        return $post->images;
    });

    Route::get('test3333', function(){
        $post = Post::first();
        return $post->tags;
    });


    /*
    We can use (php artisan tinker) command for use tinker command line in this we can communicate with database

    User::all();
    $user = User::find(1);
    $user->name;

    Post::create(['title'=>'Karm Patel', 'description'=>'Good Boy', 'is_publish'=>0, 'is_active'=>1]);
    $post = Post::find(2);

    $post->title = 'updated title';
    $post->save();

    $post->update(['description'=>'Good Boy', 'is_publish'=>0, 'is_active'=>1]);


    //search and delete
    $post = Post::where('title', 'Karm Patel)->first();
    $post->delete();

    like this command we use in tinker

    */

    // for  slug and group all the routes in one function
    Route::controller(HostController::class)->group(
        function(){
           Route::get('posts', 'index')->name('posts.index');
           Route::post('posts', 'store')->name('posts.store');
           Route::get('posts/create', 'create')->name('posts.create');
           Route::get('posts/{post:slug}', 'show')->name('posts.show');
           Route::get('posts/{post:slug}/edit', 'edit')->name('posts.edit');
           Route::put('posts/update/{post:slug}', 'update')->name('posts.update');
           Route::delete('posts/destroy/{post:slug}', 'destroy')->name('posts.destroy');
        }
    );

    



    //Components

    Route::view('/', 'welcome');
    Route::view('/home', 'home');
    Route::view('/about', 'about');



    
