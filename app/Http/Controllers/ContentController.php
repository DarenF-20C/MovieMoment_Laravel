<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use Session;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Content;
use App\Models\Like;
use App\Models\ContentAttachment;
use Share;



class ContentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getPosts(Request $request){
        $user=User::all()->where('id',Auth::id());
        $users=User::all()->where('id',Auth::id());

        $posts=Content::with('comments')
        ->leftjoin('users','contents.UserID','=','users.id')
        ->leftjoin('content_attachments','contents.id','=','content_attachments.ContentID')
        ->select('contents.*','contents.id as pid','users.name','users.userAvatar','content_attachments.*')
        ->orderBy('contents.created_at', 'DESC')
        ->paginate(5);
        
        if($request->ajax()){
            $view=view('data')->with('user',$user)->with('users',$users)->with('posts',$posts)->render();
            return response()->json(['html'=>$view]);
        }

        return view('community')->with('user',$user)->with('users',$users)->with('posts',$posts);
    }

    public function addPost(){
        $r=request(); //receive data from GET / POST method  $_POST['name']
        $date= Carbon::now('GMT+8');
        
        $id=Content::insertGetId([ //pre-define function in DB
            'ctDetail'=>$r->ctDetail,
            'ctDate'=>$date->format('y-m-d'),
            'ctTime'=>$date->format('H:i'),
            'MovieID'=>'001',
            'UserID'=>Auth::id(),
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
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
        }else{
            $post['ctImage']="";
        }

        if($r->file('video')!=''){
            $video=$r->file('video');
            $videoName= date('YmdHi').$video->getClientOriginalName();
            $video->move('images/post/video',$videoName);
            $post['ctVideo']=$videoName;
        }else{
            $post['ctVideo']="";
        }
        $post->save();
        return redirect(route('community')); 
    }

    public function delPost($id){
        $post=Content::where('id',$id)->first();
        $attachment=ContentAttachment::where('ContentID',$id)->first();
        if($attachment!=null){
            $attachment->delete();
        }
        if($post!=null){
            $post->delete();
        }
        return redirect(route('community'));
    }

    public function editPost(){
        $r=request();
        $id = $r->pass_postID;
        $posts=Content::find($id);
        $posts->ctDetail = $r->edit_ctDetail;
        $posts->save();
        
        $attachment = ContentAttachment::where('ContentID',$r->pass_postID)->first();
        // dd($r->file('edit_ctImage'));
        if($r->file('edit_ctImage')!=''){
            $image=$r->file('edit_ctImage');        
            $image->move('images',$image->getClientOriginalName());                   
            $imageName=$image->getClientOriginalName(); 
            $attachment->ctImage=$imageName;
        } 
        $attachment->save();

        return redirect()->route('community');
    }

    public function likePost($postID){
        // check if user already liked
        $user = Auth::user();
        $likePost = $user->likedPosts()
        ->where('content_id',$postID)
        ->count();

        if($likePost==0){
            $user->likedPosts()->attach($postID);
        }else{
            $user->likedPosts()->detach($postID);
        }
        return redirect()->back();
    }
    
}

