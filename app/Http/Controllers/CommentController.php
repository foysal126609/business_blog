<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function saveUserComment(Request $request){


        $comment = new Comment();
        $comment->customer_id = $request->customer_id;
        $comment->comment = $request->comment;
        $comment->publication_status = $request->publication_status;
        $comment->save();
        return redirect('/');

    }
    public function manageCommentInfo()
    {
//       $comment= Comment::all();
//       return $comment;

        $comments = DB::table('comments')
            ->join('customers', 'comments.customer_id', '=', 'customers.id')
            ->select('comments.*', 'customers.first_name', 'customers.second_name')
            ->get();
        return view('admin.comment.manage-comment', [
            'comments' => $comments
        ]);
    }

    public function unpublishedCommentInfo($id){
        $commentsById = Comment::find($id);
        $commentsById->publication_status = 0;
        $commentsById->save();
        return redirect('/manage-comment');

    }
    public function publishedCommentInfo($id){
        $commentsById = Comment::find($id);
        $commentsById->publication_status = 1;
        $commentsById->save();
        return redirect('/manage-comment');
    }
    public function deleteComment($id){
        $commentsById = Comment::find($id);
        $commentsById->delete();
        return redirect('/manage-comment');
    }
}
