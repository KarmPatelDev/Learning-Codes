<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Gallery;
use App\Models\User;
use App\Scopes\PostScope;
use App\Http\Requests\Post\CreateRequest;
use App\Http\Requests\Post\UpdateRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class HostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // USE JSONformatter extension for JSON data see in well define format
        // $posts = Post::all();
        // return view('posts.index', ['posts' => $posts]);

        // $posts = Post::paginate(1);
        // return view('posts.index', ['posts' => $posts]);

        // $posts = Post::simplePaginate(1);
        // return view('posts.index', ['posts' => $posts]);

        // $posts = Post::cursorPaginate(1);
        // return view('posts.index', ['posts' => $posts]);

        $posts = Post::paginate(1);
        // $posts = Post::withTrashed()->paginate(1); // show deleted and non deleted posts
        // $posts = Post::onlyTrashed()->paginate(1); // show deleted post


        // to add LocalScope(active())
        // $posts = Post::active()->withTrashed()->paginate(1);

        return view('posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("posts.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
        //
        // Post::create([
        // 'title' => 'Java',
        // 'description' => 'Java is very cool',
        // 'is_publish' => true,
        // 'is_active' => true
        // ]);

        // return "Inserted Successfully";

        // for form validation parsley js
        // $request->validate([
        //     'title' => 'required|min:3|max:50',
        //     'description' => 'required|min:10|max:150',
        //     'is_publish' => 'required',
        //     'is_active' => 'required'
        // ]);

        // $request parameter use for get the data that send by use
        // return $request->all();

        // Post::create([
        //     'title' => $request->title,
        //    'user_id' => 1,
        //     'description' => $request->description,
        //     'is_publish' => $request->is_publish,
        //     'is_active' => $request->is_active
        // ]);

        // $request->session()->flash('login', 'login success');
        // Session::flash('login', 'login success');  // flush hold the session until the page refresh

        // Session::put('login', 'login success');  // put hold the session until we use flush or forget

        // if($request->session()->get('login')){
        // if(Session::get('login')){
        //     return "Session Started";
        // }
        // else{
        //     return "Session not Started";
        // }

        // use before laravel 9
        // return redirect('/posts/create');
        // return redirect()->route('posts.create');

        // use after laravel 9
    //     return to_route('posts.create');
    // }

    /* When We use request folder for authorize */

    public function store(CreateRequest $request)
    {

        $file = $request->file;

        if($file){
            $filename = time(). '-' . $file->getClientOriginalName();
            // $filePath = public_path() . '/assets/images';
            // $file->move($filePath, $filename);
            // dd($filename);

            // use php artisan storage:link for link storage/app/public and public/storage
            // $filePath = "/assets/posts/images";
            // Storage::disk('public')->put($filePath, $file);
            

            // when we change full storage path in filesystems public disk if we don't use disk then it use default disk that define in  filesytems.php 
            $filePath = "/"; 
            $file = Storage::disk('public')->put($filePath, $file);  
            $filename = basename($file); // retrive file name from $file object
           
            $gallery = Gallery::create([
                'name' => $filename,
                'type' => Gallery::Type, // Type it is gallery constant
            ]);

            

            // $gallery = Gallery::create([
            //     'name' => $filename,
            //     'type' => Gallery::Type, // Type it is gallery constant
            // ]);

             // for slug
            $slug = Str::slug($request->title . rand(1, 20), '-');
          

            $user = User::first();
            if($user){
                Post::create([
                    'gallery_id' => $gallery->id,
                    'title' => $request->title,
                    'slug' => $slug,
                    'user_id' => $user->id,
                    'description' => $request->description,
                    'is_publish' => $request->is_publish,
                    'is_active' => $request->is_active
                ]);
            }

            
        }

        // dd($file);

        

        Session::put('login', 'login success');

        return to_route('posts.create');
    }




    /**
     * Display the specified resource.
     */
    // public function show(string $id)
    // {
        
    //     $post = Post::find($id);
    //     if(! $post){
    //         abort(404);
    //     }
    //     return view('posts.show', ['post' => $post]);

    //     // it is with globalScope applied
    //     // return Post::all();
    //     // it is withoutGlobalScope
    //     // return Post::withoutGlobalScope(new PostScope)->get();
    //     // it is remove all scopes
    //     // return Post::withoutGlobalScopes([
    //     //           new PostScope,
    //     // ])->get();

    // }

    // for slug
    public function show(Post $post)
    {

        // for error handling
        // $post = Post::find($post->id);
        // if($post){

        //     // abort(404, 'Post is not found');

        //     // abort_if(1==1, 404);  // if condition true than abort

        //     abort_unless(1 == 2, 404);  // if condition false than abort

        // }


        return view('posts.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    // public function edit(string $id)
    // {
    //     //
    //     $post = Post::find($id);
    //     if(! $post){
    //         abort(404);
    //     }
    //     return view('posts.edit', compact('post'));
    // }

    // For Slug
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    /*
    public function update(Request $request, $id)
    {
        //
        // $post = Post::find(3); // search // we can also use where condition
        // if(! $post){
        //     return "Post Not Found";
        // }
        // $post->update([  // Update the record
        //     'title' => 'Java',
        // ]);
        // return 'Updated Successfully';


        $request->validate([
            'title' => 'required|min:3|max:50',
            'description' => 'required|min:10|max:150',
            'is_publish' => 'required',
            'is_active' => 'required'
        ]);

        $post = Post::find($id);
        if(! $post){
            return "Post Not Found";
        }
        $post->update([  // Update the record
            'title' => $request->title,
            'description' => $request->description,
            'is_publish' => $request->is_publish,
            'is_active' => $request->is_active
        ]);
        Session::put('login', 'login success');
        return to_route('posts.index');
    }
    */


     /* When We use request folder for authorize */
    //  public function update(UpdateRequest $request, $id)
    // {
    //     $post = Post::find($id);
    //     if(! $post){
    //         return "Post Not Found";
    //     }
    //     $post->update([  // Update the record
    //         'title' => $request->title,
    //         'description' => $request->description,
    //         'is_publish' => $request->is_publish,
    //         'is_active' => $request->is_active
    //     ]);
    //     Session::put('login', 'login success');
    //     return to_route('posts.index');
    // }

    // For Slug
    public function update(UpdateRequest $request, Post $post)
    {
        $slug = Str::slug($request->title . rand(1, 20), '-');

        $post->update([  // Update the record
            'title' => $request->title,
            'slug' => $slug,
            'description' => $request->description,
            'is_publish' => $request->is_publish,
            'is_active' => $request->is_active
        ]);
        Session::put('login', 'login success');
        return to_route('posts.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(String $id)
    // {
    //     //
    //     // $post = Post::find(3); // search // we can also use where condition
    //     // if(! $post){
    //     //     return "Post Not Found";
    //     // }
    //     // $post->delete();
    //     // return 'Deleted Successfully';

    //     $post = Post::find($id); // search // we can also use where condition
    //     if(! $post){
    //         return "Post Not Found";
    //     }

    //     // storage images delete
    //     $imageName = public_path() . $post->galleryimage->name; // we have already full path in this
    //     if(file_exists($imageName)){
    //         unlink($imageName);
    //     }

    //     $post->delete();
    //     Session::forget('login');
    //     return to_route('posts.index');  
    // }


    // slug
    public function destroy(Post $post)
    {
        // storage images delete
        $imageName = public_path() . $post->galleryimage->name; // we have already full path in this
        if(Storage::exists($imageName)){
            unlink($imageName);
        }

        $post->delete();
        Session::forget('login');
        return to_route('posts.index');  
    }


    public function softDelete(Request $request, $id){
        $post = Post::onlyTrashed()->find($id);
        if(! $post){
            return "Post Not Found";
        }
        $post->update([
            'deleted_at' => null
        ]);
        $request->session()->flash('alert-message', 'Post Recover Successfull');
        return to_route('posts.index');
    }


    public function getPosts(){

        // return DB::table('posts')->where('title', 'Karm Patel')->get();

        // return DB::table('posts')->where([
        //     'title' => 'Karm Patel',
        //     'description' => 'Karm Patel Very Brave'
        // ])->get();

        // return DB::table('posts')->where('title', null)->orWhere('title', 'Karm Patel')->get();

        // return DB::table('posts')->find(2);
        // return DB::table('posts')->first();

        // return DB::table('posts')->pluck('title');

       return DB::select('SELECT * FROM posts WHERE title = ?', ['Karm Patel']);
       // DB::type => type can be select, insert, update, delete, statement, unprepared


    }


    
}
