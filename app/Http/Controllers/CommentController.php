<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Session;
use App\Models\Content;
use App\Models\Comment;

class CommentController extends Controller
{
    public function addComment(){
        $r=request();
        
        $id=Comment::create([ //pre-define function in DB
            'cmDetail'=>$r->comment,
            'cmLike'=>'0',
            'content_id'=>$r->postId,
            'UserID'=>$r->userId,
        ]);

        return redirect(route('community')); 
    }

    public function delComment($id){
        $comment=Comment::where('id',$id)->first();
        if($comment!=null){
            $comment->delete();
        }
        return redirect()->back();
    }
    
}
