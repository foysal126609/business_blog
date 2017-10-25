<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use DB;
use Illuminate\Http\Request;

class BlogController extends Controller
{
   public function addBlog(){
           $publishdeCategories= Category::where('publication_status','1')->get();
             return view('admin.blog.add-blog',[
               'publishdeCategories'=>$publishdeCategories
           ]);
   }

    public function saveBlogInfo(Request $request){
        $blogImage= $request->file('blog_image');
        $imageName=$blogImage->getClientOriginalName();
        $directory='blog_image/';
        $imageUrl=$directory.$imageName;
        $blogImage->move($directory, $imageName);

        $blog = new Blog();
        $blog->category_id = $request->category_id;
        $blog->blog_title = $request->blog_title;
        $blog->author_name = $request->author_name;
        $blog->blog_short_discription = $request->blog_short_discription;
        $blog->blog_long_discription = $request->blog_long_discription;
        $blog->blog_image = $imageUrl;
        $blog->publication_status = $request->publication_status;
        $blog->save();
        return redirect('/add-Blog')->with('message','blog info save sccessfully');

    }

    public function manageBlog(){
//        $blogs = Blog::all();
        $blogs = DB::table('blogs')
            ->join('categories', 'blogs.category_id', '=', 'categories.id')
            ->select('blogs.id', 'blogs.blog_title','blogs.author_name','blogs.publication_status','categories.category_name')
            ->get();

        return view('admin.blog.manage-blog',[
            'blogs'=>$blogs
        ]);
    }

    public function viewBlogDetailsInfo($id){
        $blogbyId = DB::table('blogs')
            ->join('categories', 'blogs.category_id', '=', 'categories.id')
            ->select('blogs.*','categories.category_name')
            ->where('blogs.id', $id )
            ->first();
        //return $blogbyId->id;
        return view('admin.blog.view-blog',[
            'blogbyId'=>$blogbyId
        ]);

    }
    public function editBlogDetailsInfo($id){

        $publishdeCategories= Category::where('publication_status','1')->get();
        $blogById = Blog::find($id);
        return view('admin.blog.edit-blog',[
            'publishdeCategories'=>$publishdeCategories,
            'blogById'=>$blogById
        ]);
    }
    public function updateBlogDetailsInfo(Request$request){
       if($request->blog_image){
           $blog = Blog::find($request->blog_id);

           unlink($blog->blog_image);
           $blogImage= $request->file('blog_image');
           $imageName=$blogImage->getClientOriginalName();
           $directory='blog_image/';
           $imageUrl=$directory.$imageName;
           $blogImage->move($directory, $imageName);

           $blog->category_id = $request->category_id;
           $blog->blog_title = $request->blog_title;
           $blog->author_name = $request->author_name;
           $blog->blog_short_discription = $request->blog_short_discription;
           $blog->blog_long_discription = $request->blog_long_discription;
           $blog->blog_image = $imageUrl;
           $blog->publication_status = $request->publication_status;
           $blog->save();
           return redirect('/manage-Blog')->with('message','blog info update Sccessfully');


       }else{
           $blog = Blog::find($request->blog_id);
           $blog->category_id = $request->category_id;
           $blog->blog_title = $request->blog_title;
           $blog->author_name = $request->author_name;
           $blog->blog_short_discription = $request->blog_short_discription;
           $blog->blog_long_discription = $request->blog_long_discription;
           $blog->publication_status = $request->publication_status;
           $blog->save();
           return redirect('/manage-Blog')->with('message','blog info update Sccessfully');


       }

    }
    public function unpublishedBlogInfo($id){
        $blogById = Blog::find($id);
        $blogById->publication_status = 0;
        $blogById->save();
        return redirect('/manage-Blog');

    }
    public function publishedBlogInfo($id){
        $blogById = Blog::find($id);
        $blogById->publication_status = 1;
        $blogById->save();
        return redirect('/manage-Blog');

    }
    public function deleteBloginfo($id){
        $blogById = Blog::find($id);
        $blogById->delete();
        return redirect('/manage-Blog');
    }
}
