<?php

namespace App\Http\Controllers;

use App\Category;
use App\Post;
use App\Tag;
use App\Upload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{

    /**
     * Show Admin Dashboard
    **/
    public function index_admin()
    {
        return view('Layout.adminLayout');
    }

    /**
     * Show Post On Manege Content
    **/
    public function index()
    {
        $posts = Post::paginate(10);
        return view('dashboard', ['posts' => $posts]);
    }

    public function posts()
    {
        return view('posts');
    }

    public function post()
    {
        $categories = Category::all();
        return view('addPost')->with('categories' , $categories);
    }

    public function insertPost(Request $request)
    {
        $validation = \Validator::make($request->all(),[
            ''
        ]);
    }

    public function draftPost()
    {
        return view('draftPost');
    }

    public function ctegories()
    {
        return view('categories');
    }

    public function createCategory()
    {

    }

    public function tags()
    {

    }

    public function createPage()
    {

    }

    public function pages()
    {

    }

    public function comments()
    {
        return view('comments');
    }

    /*
     * Upload File
     */
    public function upload()
    {
        return view('upload');
    }

    public function uploadFile(Request $request)
    {
        $validation = \Validator::make($request->all(),[
            'image' => 'required|image'
        ],[
            'image.required' => 'فایلی انتخاب نشده است لطفا یک فایل برای ',
            'image.image' => 'فایل انتخاب شده تصویر نمی باشد.',
        ]);

        if($validation->fails())
        {
            return back()->with('errors', $validation->errors());
        }
        //$request->file('image')->store('upload');
        //return $path;

        $image = $request->file('image');
        $input['imagename'] = time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('\upload\\');
        $image->move($destinationPath, $input['imagename']);
        $img = $destinationPath.$input['imagename'];

        Upload::create(['filePath' => $img]);

        $lastImage = Upload::orderBy('created_at', 'desc')->first();

        return back()->with('message', 'تصویر شما با موفقیت آپلود شد.', 'lastImage', $lastImage);

    }



    /**
     * Delete Post
    **/
//    public function delete($id)
//    {
//        $res = Post::destroy($id);
//        if ($res) {
//            return back()->with('message', 'پست شما با موفقیت حذف شد.');
//        }
//        else
//        {
//            return back()->with('message', 'مشکلی پیش آمده');
//        }
//    }
//
//    /**
//     * Show Information Post On Edit Post Page
//    **/
//    public function showPost($id)
//    {
//        $post = Post::find($id);
//        $categories = Category::all();
//        $tags = Tag::select()->where('post_id', $post->ID)->get();
//        //dd($tags);
//        return view('Layout.postSingle', ['post' => $post, 'categories' => $categories, 'tags' => $tags]);
//    }
//
//    /**
//    *  Get All Category
//     **/
//    public function postForm()
//    {
//        $category = Category::all();
//        return view('Layout.createPost', ['categorie' => $category]);
//    }
//
//    /**
//     * Create Post
//     **/
//    public function create(Request $request)
//    {
//        $auther = "رضا";
//        $user_id = 1;
//        Post::create(['title' => $request->title, 'content' => $request->article, 'auther' => $auther, 'slug' => $request->slug,
//            'category_id' => $request->category, 'user_id' => $user_id, 'tags' => $request->tags]);
//            return back()->with('message' , 'پست افزوده شد');
//    }
//
//    /**
//    * Update Post
//     **/
//    public function updatePost(Request $request, $id)
//    {
//        $auther = "رضا";
//        $user_id = 1;
//        $res = Post::where('id', $id)->update(['title' => $request->title, 'content' =>
//            $request->article, 'auther' => $auther, 'slug' => $request->slug, 'category_id' => $request->category,
//            'user_id' => $user_id]);
//        if($res == 1)
//        {
//            return back()->with('message', 'پست شما با موفقیت بروز رسانی شد.');
//        }
//        else
//        {
//            return back()->with('message', 'مشکلی در بروز رسانی پیش آمده');
//        }
//    }

}
