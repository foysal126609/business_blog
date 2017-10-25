<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Comment;
use Illuminate\Support\Facades\DB;
use App\Slider;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function home(){

      return view('front-end.home');
    }
    public function aboutUs(){
      return view('front-end.aboutUs');
    }
    public function services(){
      return view('front-end.services');
    }
    public function blog(){
      $allPublishedBlogs= Blog::where('publication_status','1')->get();
      return view('front-end.blog',[
          'allPublishedBlogs'=>$allPublishedBlogs
      ]);
    }
    public function blogDetails($id){
        $comments = DB::table('comments')
            ->join('customers', 'comments.customer_id', '=', 'customers.id')
            ->select('comments.*', 'customers.first_name', 'customers.second_name')
            ->where('publication_status', '1')
            ->get();

//        $allPublishedComments = Comment::where('publication_status','1')->get();
        $blogById= Blog::find($id);
        return view('front-end.blog-details',[
            'comments'=>$comments,
            'blogById'=>$blogById
        ]);
    }

    public function contact(){
      return view('front-end.contact');
    }


}
