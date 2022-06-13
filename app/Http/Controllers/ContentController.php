<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Session;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Content;
use App\Models\ContentAttachment;


class ContentController extends Controller
{
    public function getPosts(){
        $user=User::all()->where('id','1');

        $posts=DB::table('contents')
        ->leftjoin('users','contents.UserID','=','users.id')
        ->leftjoin('content_attachments','contents.id','=','content_attachments.ContentID')
        ->orderBy('contents.id', 'DESC')
        ->paginate(5);
        


        return view('community')->with('user',$user)->with('posts',$posts);
    }

    public function addPost(){
        $r=request(); //receive data from GET / POST method  $_POST['name']
        $date= Carbon::now('GMT+8');
        
        $id=Content::insertGetId([ //pre-define function in DB
            'ctDetail'=>$r->ctDetail,
            'ctLike'=>'0',
            'ctDate'=>$date->format('y-m-d'),
            'ctTime'=>$date->format('H:i'),
            'MovieID'=>'001',
            'UserID'=>'001'
        ]);

        $lastPost=$id;
        // $addCtAttachment=ContentAttachment::create([
        //     'ContentID'=>$lastPost
        // ]);
        $post=new ContentAttachment();
        $post['ContentID']=$lastPost;

        if($r->file('image')!=''){
            //upload image before add to DB
            $image=$r->file('image');
            $imageName= date('YmdHi').$image->getClientOriginalName();
            $image->move('images/post/image',$imageName);
            $post['ctImage']=$imageName;
        }
        if($r->file('video')!=''){
            $video=$r->file('video');
            $videoName= date('YmdHi').$video->getClientOriginalName();
            $video->move('images/post/video',$videoName);
            $post['ctVideo']=$videoName;
        }
        if($r->file('audio')!=''){
            $audio=$r->file('audio');
            $audioName= date('YmdHi').$audio->getClientOriginalName();
            $audio->move('images/post/audio',$audioName);
            $post['ctAudio']=$audioName;
        }
        $post->save();
        return redirect(route('community').'/#sec-2'); 
    }
}
