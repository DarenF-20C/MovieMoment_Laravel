@foreach($users as $users)
   @foreach($posts as $post)
      <li >
         <!-- begin timeline-time -->
            <div class="timeline-time">
               <input type="hidden" id="postID" value="{{$post->id}}">
               <span class="date" id="date{{$post->id}}">{{ \Carbon\Carbon::parse($post->ctDate)->format('d F') }}</span>
               <span class="time">{{$post->ctTime}}</span>
            <!-- </a> -->
            </div>
            <!-- end timeline-time -->
            <!-- begin timeline-icon -->
            <div class="timeline-icon">
               <a href="javascript:;">&nbsp;</a>
            </div>
            <!-- end timeline-icon -->
            <!-- begin timeline-body -->

            
            <div class="timeline-body">
               <div class="timeline-header">
                  <span class="userimage"><img src="{{ asset('images/user/'.$post->userAvatar) }}" alt=""></span>
                  <span class="username"><a href="javascript:;">{{$post->name}}</a> <small></small></span>
                  <!-- <span class="pull-right text-muted">18k Views</span> -->
                  @if(Auth::id() == $post->UserID)
                  <div class="dropdown">
                     <!-- EDIT -->
                     <span class="icon-right pen" style='font-size:10px' id="navbarDropdownMenuLink">
                        <a href="javascript:editPost({{$post->id}});" class="btn btn-sm btn-default ivm-show edit" style='padding:5px 13px;' data-mdb-toggle="modal" data-mdb-target="#editModal" data-target-detail="{{$post->ctDetail}}" data-target-pid="{{$post->id}}" data-target-pic="{{ asset('images/post/image/'.$post->ctImage) }}">
                           <i class='fa fa-pen' style='color:whitesmoke;'></i>
                        </a>
                     </span>
                     <!-- DELETE -->
                     <span class="icon-right trash" style='font-size:10px' id="navbarDropdownMenuLink" >
                        <a href="{{route('delPost',['id'=>$post->id])}}" class="btn btn-sm btn-default ivm-show " style='padding:5px 13px;' onclick="return confirm('Are you sure to delete this post?')">
                           <i class='fa fa-trash' style='color:whitesmoke;'></i>
                        </a>
                     </span>
                  </div>
                  @endif
               </div>
               
               <div class="timeline-content">
                  <p class="addReadMore showlesscontent" id="postBody{{$post->id}}"> <!-- class="show-read-more" -->
                     {{$post->ctDetail}}
                  </p>
                  <!-- ----------------------------------------IMAGE------------------------------------------------- -->
                  @if($post->ctImage!=NULL)
                     <img class="postImage zoomable" id="image{{$post->id}}" src="{{ asset('images/post/image/'.$post->ctImage) }}" alt="{{$post->ctImage}}" onclick="showImage({{$post->id}})">
                  @endif
                  <!-- ----------------------------------------VIDEO------------------------------------------------- -->
                  @if($post->ctVideo!=NULL)
                  <div class="iframe">
                     <iframe id="iF{{$post->id}}" class="responsive-iframe" src="{{ asset('images/post/video/'.$post->ctVideo) }}" title="video" frameborder="0"  allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" width="auto" height="auto" sandbox="" allowfullscreen></iframe>
                  </div>
                  @endif
               </div>
               <div class="timeline-likes">
                  <div class="stats-right">
                     <!-- <span class="stats-text">259 Shares</span> -->
                     <!-- <span class="stats-text">0 Comments</span> -->
                  </div>
                  <div class="stats">
                        <span class="fa-stack fa-fw stats-icon">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-thumbs-up fa-stack-1x fa-inverse"></i>
                        </span>
                     <span class="stats-total" id="stats-total-{{$post->id}}">
                     <!-- @if($post->likedUsers->count() !=0)
                        {{$post->likedUsers->count()+ rand(50,99)}}
                     @else
                        {{rand(50,99)}}
                     @endif -->
                     {{$post->likedUsers->count()}}
                     </span>
                  </div>
               </div>
               <div class="timeline-footer">
                  <!-- LIKE FUNCTION -->
                  @guest
                     <a href="#" class="m-r-15 text-inverse-lighter"><i class="fa fa-thumbs-up fa-fw fa-lg m-r-3"></i> Like</a>
                  @else
                  <div class="like">
                     <a href="javascript:;" class="m-r-15 text-inverse-lighter likeButton" id="like-btn{{$post->id}}" data-id="{{$post->id}}" data-token="{{ csrf_token() }}" data-button="like-{{$post->id}}" data-btnword="like-word-{{$post->id}}" data-stats="stats-total-{{$post->id}}">
                        <input type="hidden" id="earned-{{$post->id}}" value="1">
                     <i class="fa fa-thumbs-up fa-fw fa-lg m-r-3" style="color:{{Auth::user()->likedPosts()->where('content_id', $post->id)->count() > 0 ? '#02eb0d' : ''}}" id="like-{{$post->id}}"></i>
                     <h3 style="display: inline-block;font-size:16px;color:{{Auth::user()->likedPosts()->where('content_id', $post->id)->count() > 0 ? '#02eb0d' : ''}}" id="like-word-{{$post->id}}">Like</h3></a>
                     <form action="{{route('post.like',$post->id)}}" method="POST" style="display:none" id="like-form-{{$post->id}}">@csrf</form>
                  </div>
                  @endguest

                  <!-- pop COMMENT FUNCTION -->
                  <a href="javascript:commentBox({{$post->id}});" class="m-r-15 text-inverse-lighter"><i class="fa fa-comments fa-fw fa-lg m-r-3"></i> Comment</a> 
                  <!-- SHARE FUNCTION -->
                  <div class="shareContainer">
                     <div class="emojibar" data-id="{{$post->id}}" data-token="{{ csrf_token() }}">
                        <input type="hidden" id="earned-share-{{$post->id}}" value="1">
                        <a href="https://www.facebook.com/sharer/sharer.php?u=http://127.0.0.1:8000/community" target="_blank"><div class="emoji"><img src="Images/icons/facebook.png" alt=""><p>Facebook</p></div></a>
                        <a href="https://twitter.com/intent/tweet?url=http://127.0.0.1:8000/community" target="_blank"><div class="emoji"><img src="Images/icons/twitter.png" alt=""><p>Twitter</p></div></a>
                        <a href="http://www.linkedin.com/shareArticle?mini=true&url=http://127.0.0.1:8000/community&title=Share+title&summary=There+will+be+a+window+left" target="_blank"><div class="emoji"><img src="Images/icons/linkedin.png" alt=""><p>LinkedIn</p></div></a>
                        <a href="https://wa.me/?text=http://jorenvanhocht.be" target="_blank"><div class="emoji"><img src="Images/icons/whatsapp.png" alt=""><p>WhatsApp</p></div></a>
                     </div>
                     <a class="m-r-15 text-inverse-lighter share"><i class="fa fa-share fa-fw fa-lg m-r-3"></i> Share</a>
                  </div>
               </div>
               <!-- COMMENT SHOW-->
               <div class="timeline-comment-box" id="comment{{$post->id}}" style="display: none;">
                  @foreach($post->comments as $comment)
                  <div class="comment-list">
                     @if($comment->UserID == 1)   
                     <div class="user"><img src="{{ asset('images/user/ghost.jpg') }}"></div>
                     <span class="username">George</span>
                     @elseif($comment->UserID ==2)
                     <div class="user"><img src="{{ asset('images/user/guest1.png') }}"></div>
                     <span class="username">Ved</span>
                     @else
                     <div class="user"><img src="{{ asset('images/user/user.jpg') }}"></div>
                     <span class="username">David Lee</span>
                     @endif
                     <!-- <div class="user"><img src="{{ asset('images/user/'.$comment->UserID) }}"></div>
                     <span class="username">{{$comment->UserID}}</span> -->
                     <div class="input comment-detail">
                        <p>{{$comment->cmDetail}}</p>
                     </div>
                     @if(Auth::id() == $comment->UserID)
                     <div class="dropdown">
                        <!-- DELETE -->
                        <span class="icon-right-comment trash" style='font-size:10px' id="navbarDropdownMenuLink" >
                           <a href="{{route('delComment',['id'=>$comment->id])}}" class="btn btn-sm btn-default ivm-show " style='padding:6px 13px;' onclick="return confirm('Are you sure to delete this comment?')">
                              <i class='fa fa-trash' style='color:whitesmoke;'></i>
                           </a>
                        </span>
                     </div>
                  @endif
                  </div>
                  @endforeach
                  <!-- ADD COMMENT  -->
                  <div class="user"><img src="{{ asset('images/user/'.$users->userAvatar) }}"></div>
                  <div class="input">
                     <form action="{{route('addComment')}}" method="POST" id="comForm" enctype="multipart/form-data">
                        @CSRF
                        <div class="input-group">
                           <input type="hidden" name="userId" id="userId" value="{{$users->id}}">
                           <input type="hidden" name="postId" id="postId" value="{{$post->id}}">
                           <input maxlength="200" type="text" name="comment" id="comment" class="form-control rounded-corner" autocomplete="off" placeholder="Write a comment..." required/>
                           <span class="input-group-btn p-l-10">
                           <button class="btn btn-primary f-s-12 rounded-corner btn-color addcomment" type="submit" data-id="{{$users->id}}">Comment</button>
                           </span>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         <!-- end timeline-body -->
      </li>
   @endforeach
@endforeach