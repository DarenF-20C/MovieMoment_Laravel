@extends('layout')
@section('content')
@push('css')
   <!-- for FB share specification -->
   <meta property="og:title" content="My Post">
   <meta property="og:image" content="https://cdn.pixabay.com/photo/2016/05/05/02/37/sunset-1373171__480.jpg">
   <link rel="stylesheet" href="{{asset('css/inputPost.css')}}"> <!-- Post Now hold by inputPost.css -->
   <link rel="stylesheet" href="{{asset('css/post.css')}}">      <!-- POST hold by post.css -->
   <!-- Font Awesome -->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
   <!-- Google Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
   <!-- MDB -->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.css" rel="stylesheet"/>
@endpush
<body>
         <!-- Mask -->
         <div id="intro" class="view">
            <div class="mask" id="overlay"> <!--rgba black strong to have a strong contrast-->
               <div class="container-fluid d-flex align-items-center  justify-content-center h-100">
                  <div class="row d-flex justify-content-center text-center">
                     <div class="col-md-10">
                        <!-- heading -->
                        <h2 class="display-4 font-weight-bold white-text">Sharing</h2>

                        <!-- divider -->
                        <hr class="hr-light"> <!--horizontal line-->

                        <!-- Description -->
                        <h4 class="white-text my-4">"The miracle is this: The more we share the more we have."</h4>
                           <p class="white-text empha font-weight-bold">— Leonard Nimoy<p>
                        <!-- <button type="button" class="btn btn-outline-white no-outline">Scroll Down! <i class="far fa-hand-point-down"></i></button> -->
                        <div class="scroll-btn" id="sec-1">
                           <a class="scroll-down" href="#sec-2"></a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Mask -->

      

<!---------------------------------------------------------- Input post ---------------------------------------------------------->
         @foreach($user as $user)
         <div class="profile-content pt-5" id="sec-2">
            <!-- begin tab-content -->
            <div class="tab-content p-0">
               <!-- begin #profile-post tab -->
               <div class="tab-pane fade active show" id="profile-post">
                  <!-- begin timeline -->
                  <ul class="timeline">
                     <li><!-- POST NOW -->
                        <!-- begin timeline-time -->
                        <div class="timeline-time">
                           <span class="date">now</span>
                           <span class="time">{{ \Carbon\Carbon::now()->addHours(8)->format('H:i') }}</span>
                        </div>
                        <!-- end timeline-time -->
                        <!-- begin timeline-icon -->
                        <div class="timeline-icon">
                           <a href="javascript:;">&nbsp;</a>
                        </div>
                        <!-- end timeline-icon -->
                        <!-- begin timeline-body -->
                        
                        <div class="timeline-body">
                           <div class="row input-post">
                              <!-- Avatar Image -->
                              <div class="col-md-2 col-sm-3 rounded-image">
                                 <input type="hidden" name="userId" id="userId" value="{{$user->id}}">
                                 <img class="userAvatar" src="{{ asset('images/user/'.$user->userAvatar) }}" alt="userAvatar">
                              </div>
                              <!-- Post Input Area -->
                              <div class="col-md-10 col-sm-9">
                                 <section class="panel  timeline-post-to">
                                    <div class="panel-body">
                                          <form role="form" action="{{route('addPost')}}" method="POST" enctype="multipart/form-data">
                                             @CSRF
                                             <textarea rows="3" class="form-control" placeholder="What's on your mind?" name="ctDetail" id="ctDetail"></textarea>
                                             <!--  -->
                                             <div class="row">
                                                <div class="col-sm-10" id="upload-icon">
                                                      <a class="btn btn-sm btn-default ivm-show" style='border:1px solid #02eb0d'>
                                                         <label for="image">
                                                            <i class="fas fa-image" style='color:#02eb0d'></i>
                                                            <input type="file" id="image" style="display: none" name="image" accept="image/*" multiple="" data-original-title="upload photos" onchange="showPreview(event);">
                                                         </label>
                                                      </a>
                                                      <a class="btn btn-sm btn-default ivm-show" style='border:1px solid #02eb0d'>
                                                         <label for="video">
                                                         <i class="fas fa-video" style='color:#02eb0d'></i>
                                                            <input type="file" id="video" style="display: none" name="video" accept="video/*" multiple="" data-original-title="upload videos">
                                                         </label>
                                                      </a>
                                                </div>
                                                <div class="col-sm-10 upload-image" id="display-image" style="display:none">
                                                   <img id="previewImage" src="" alt="" />
                                                </div>
                                                <div class="col-md-1 col-sm-2 text-right">
                                                      <button type="submit" class="btn btn-primary btn-color" style='color:#2d353c;'>Post</button>
                                                </div>
                                             </div>
                                          </form>
                                    </div>
                                 </section>
                              </div>
                           </div>
                        </div>
                        <!-- end timeline-body -->
                     </li>
                     @endforeach

<!------------------------------------------------------------ POST ------------------------------------------------------------>
                     @foreach($posts as $post)
                     <li><!-- POST 1 -->
                        <!-- begin timeline-time -->
                        <div class="timeline-time">
                           <input type="hidden" id="postID" value="{{$post->pid}}">
                           <span class="date" id="date{{$post->pid}}">{{ \Carbon\Carbon::parse($post->ctDate)->format('d F') }}</span>
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
                              <span class="pull-right text-muted">18k Views</span>
                              @if(Auth::id() == $post->UserID)
                              <div class="dropdown">
                                 <!-- EDIT -->
                                 <span class="icon-right pen" style='font-size:10px' id="navbarDropdownMenuLink">
                                    <a href="javascript:editPost({{$post->pid}});" class="btn btn-sm btn-default ivm-show edit" style='padding:5px 13px;' data-mdb-toggle="modal" data-mdb-target="#editModal" data-target-detail="{{$post->ctDetail}}" data-target-pid="{{$post->pid}}" data-target-pic="{{ asset('images/post/image/'.$post->ctImage) }}">
                                       <i class='fa fa-pen' style='color:whitesmoke;'></i>
                                    </a>
                                 </span>
                                 <!-- DELETE -->
                                 <span class="icon-right trash" style='font-size:10px' id="navbarDropdownMenuLink" >
                                    <a href="{{route('delPost',['id'=>$post->pid])}}" class="btn btn-sm btn-default ivm-show " style='padding:5px 13px;' onclick="return confirm('Are you sure to delete this post?')">
                                       <i class='fa fa-trash' style='color:whitesmoke;'></i>
                                    </a>
                                 </span>
                              </div>
                              @endif
                           </div>
                           
                           <div class="timeline-content">
                              <p class="show-read-more" id="postBody{{$post->pid}}"> <!-- class="show-read-more" -->
                                 {{$post->ctDetail}}
                              </p>
                              <!-- ----------------------------------------IMAGE------------------------------------------------- -->
                              @if($post->ctImage!=NULL)
                                 <img class="postImage zoomable" id="image{{$post->pid}}" src="{{ asset('images/post/image/'.$post->ctImage) }}" alt="" onclick="showImage({{$post->id}})">
                              @endif
                              <!-- ----------------------------------------VIDEO------------------------------------------------- -->
                              @if($post->ctVideo!=NULL)
                              <div class="iframe">
                                 <iframe id="iF{{$post->pid}}" class="responsive-iframe" src="{{ asset('images/post/video/'.$post->ctVideo) }}" title="video" frameborder="0"  allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" width="auto" height="auto" sandbox="" allowfullscreen></iframe>
                              </div>
                              @endif
                           </div>
                           <div class="timeline-likes">
                              <div class="stats-right">
                                 <!-- <span class="stats-text">259 Shares</span> -->
                                 <span class="stats-text">0 Comments</span>
                              </div>
                              <div class="stats">
                                    <span class="fa-stack fa-fw stats-icon">
                                    <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                    <i class="fa fa-thumbs-up fa-stack-1x fa-inverse"></i>
                                    </span>
                                 <span class="stats-total">
                                 @if($post->likedUsers->count() !=0)
                                    {{$post->likedUsers->count()+ rand(50,99)}}
                                 @else
                                    {{rand(50,99)}}
                                 @endif
                                 </span>
                              </div>
                           </div>
                           <div class="timeline-footer">
                              <!-- LIKE FUNCTION -->
                              @guest
                                 <a href="#" class="m-r-15 text-inverse-lighter"><i class="fa fa-thumbs-up fa-fw fa-lg m-r-3"></i> Like</a>
                              @else
                              <div class="like">
                                 <a href="javascript:likePost({{$post->pid}});" class="m-r-15 text-inverse-lighter" id="like-btn{{$post->pid}}"><i class="fa fa-thumbs-up fa-fw fa-lg m-r-3" style="color:{{Auth::user()->likedPosts()->where('content_id', $post->pid)->count() > 0 ? '#02eb0d' : ''}}"></i><h3 style="display: inline-block;font-size:16px;color:{{Auth::user()->likedPosts()->where('content_id', $post->pid)->count() > 0 ? '#02eb0d' : ''}}">Like</h3></a>
                                 <form action="{{route('post.like',$post->pid)}}" method="POST" style="display:none" id="like-form-{{$post->pid}}">@csrf</form>
                              </div>
                              @endguest

                              <!-- pop COMMENT FUNCTION -->
                              <a href="javascript:commentBox({{$post->pid}});" class="m-r-15 text-inverse-lighter"><i class="fa fa-comments fa-fw fa-lg m-r-3"></i> Comment</a> 
                              <!-- SHARE FUNCTION -->
                              <div class="shareContainer">
                                 <div class="emojibar">
                                    <a href="https://www.facebook.com/sharer/sharer.php?u=http://127.0.0.1:8000/community"><div class="emoji"><img src="Images/icons/facebook.png" alt=""><p>Facebook</p></div></a>
                                    <a href="https://twitter.com/intent/tweet?url=http://127.0.0.1:8000/community"><div class="emoji"><img src="Images/icons/twitter.png" alt=""><p>Twitter</p></div></a>
                                    <a href="http://www.linkedin.com/shareArticle?mini=true&url=http://127.0.0.1:8000/community&title=Share+title&summary=There+will+be+a+window+left"><div class="emoji"><img src="Images/icons/linkedin.png" alt=""><p>LinkedIn</p></div></a>
                                    <a href="https://wa.me/?text=http://jorenvanhocht.be"><div class="emoji"><img src="Images/icons/whatsapp.png" alt=""><p>WhatsApp</p></div></a>
                                 </div>
                                 <a class="m-r-15 text-inverse-lighter share"><i class="fa fa-share fa-fw fa-lg m-r-3"></i> Share</a>
                              </div>
                           </div>
                           <!-- COMMENT SHOW-->
                           <div class="timeline-comment-box" id="comment{{$post->pid}}" style="display: none;">
                              <!-- ADD COMMENT  -->
                              <div class="user"><img src="{{ asset('images/user/'.$user->userAvatar) }}"></div>
                              <div class="input">
                                 <form action="{{route('addComment')}}" method="POST" id="comForm" enctype="multipart/form-data" >
                                    @CSRF
                                    <div class="input-group">
                                       <input type="hidden" name="userId" id="userId" value="{{$user->id}}">
                                       <input type="hidden" name="postId" id="postId" value="{{$post->pid}}">
                                       <input type="text" name="comment" id="comment" class="form-control rounded-corner" autocomplete="off" placeholder="Write a comment..." required/>
                                       <span class="input-group-btn p-l-10">
                                       <button class="btn btn-primary f-s-12 rounded-corner btn-color" type="submit">Comment</button>
                                       </span>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <!-- end timeline-body -->
                     </li>
                     @endforeach


<!------------------------------------------------------------ POST loading ------------------------------------------------------------>
                     <li><!-- POST loading -->
                        <!-- begin timeline-icon -->
                        <div class="timeline-icon">
                           <a href="javascript:;">&nbsp;</a>
                        </div>
                        <!-- end timeline-icon -->
                        <!-- begin timeline-body -->
                        <div class="timeline-body" style="color:whitesmoke;">
                           Loading...
                        </div>
                        <!-- begin timeline-body -->
                     </li>
                  </ul>
                  <!-- end timeline -->
               </div>
               <!-- end #profile-post tab -->
            </div>
            <!-- end tab-content -->
         </div>
         <!-- end profile-content -->
         <!-- END POST -->
        </div>

<!-- MDB -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.js"></script>
   <script>
      function editPost($id){
         var postBody = document.getElementById("post"+$id);

         $('#ctDetail').val(postBody);
         console.log('ok!');
      }
      // show comment bar
      function commentBox($id){
         const targetDiv = document.getElementById("comment"+$id);
         if (targetDiv.style.display !== "none") {
            targetDiv.style.display = "none";
         } else {
            targetDiv.style.display = "block";
         }
      }
      
      function addComment () {
         // (A) GET FORM DATA
         var form = document.getElementById("comForm");
         var data = new FormData(form);
         
         // (B) AJAX
         var xhr = new XMLHttpRequest();
         xhr.open("POST", "addComment");
         // What to do when server responds
         xhr.onload = function () { console.log(this.response); };
         xhr.send(data);
         
         // (C) PREVENT HTML FORM SUBMIT
         return false;
      }
      function likePost($id) {

e.preventDefault(); // Prevent Default form Submission
var formId = "like-form-" +$id;
var form = $(document.getElementById(formId));
var actionUrl = form.attr('action');
 

$.ajax({
   type: "POST",
   url: actionUrl,
   data: form.serialize(),
   success:function(store) {
      location.href = store;
   },
   error:function() {
      alert(actionUrl);
   }
});

};
      </script>

<script src="http://static.tumblr.com/xz44nnc/o5lkyivqw/jquery-1.3.2.min.js"></script>
      <script>
      // Zoom Image
      $('img.zoomable').css({cursor: 'pointer'}).live('click', function () {
      var img = $(this);
      var bigImg = $('<img />').css({
         'min-width': '45%',
         'min-height':'auto',
         'max-width': '90%',
         'max-height': '90%',
         'margin-top':'7%',
         'display': 'inline',
         'align':'center'
      });
      bigImg.attr({
         src: img.attr('src'),
         alt: img.attr('alt'),
         title: img.attr('title')
      });
      var over = $('<div />').text(' ').css({
         'height': '100%',
         'width': '100%',
         'background': 'rgba(0,0,0,.82)',
         'position': 'fixed',
         'top': 0,
         'left': 0,
         'opacity': 0.0,
         'cursor': 'pointer',
         'z-index': 9999,
         'text-align': 'center'
      }).append(bigImg).bind('click', function () {
         $(this).fadeOut(300, function () {
            $(this).remove();
         });
      }).insertAfter(this).animate({
         'opacity': 1
      }, 300);
      });

   </script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <script>
   $(document).ready(function(){
      var maxLength = 200;
      $(".show-read-more").each(function(){
         var myStr = $(this).text();
         if($.trim(myStr).length > maxLength){
               var newStr = myStr.substring(0, maxLength);
               var removedStr = myStr.substring(maxLength, $.trim(myStr).length);
               $(this).empty().html(newStr);
               $(this).append(' <a href="javascript:void(0);" class="read-more">read more...</a>');
               $(this).append('<span class="more-text">' + removedStr + '</span>');
         }
      });
      $(".read-more").click(function(){
         $(this).siblings(".more-text").contents().unwrap();
         $(this).remove();
      });
   });
   </script>


<script>
   $(document).ready(function () {
         $("#editModal").on("show.bs.modal", function (e) {
            var pid = $(e.relatedTarget).data('target-pid');
            var ctDetail = $(e.relatedTarget).data('target-detail');
            var ctImage = $(e.relatedTarget).data('target-pic');
            $('#pass_postID').val(pid);
            $('#pass_ctDetail').html(ctDetail);
            $('#pass_ctImage').attr('src', ctImage);
         });
      });
</script>


<script>
   function showPreview(event){
   if(event.target.files.length > 0){
      var src = URL.createObjectURL(event.target.files[0]);
      var previewImage = document.getElementById("previewImage");
      var displayImage = document.getElementById("display-image");
      var icon = document.getElementById("upload-icon");
      previewImage.src = src;
      displayImage.style.display = "block";
      icon.style.display="none";
   }
   }
</script>

<script>
   $(function() {
      $('#submitEdit').click(function() {
      $('#edit_ctDetail').val($('#pass_ctDetail').text());
      });
});
</script>

<script>

</script>
</body>

<!-- Modal -->
<div class="modal top fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-mdb-backdrop="static" data-mdb-keyboard="true">
  <div class="modal-dialog   modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Your Post</h5>
        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form class="form-horizontal" action="{{route('editPost')}}" method="POST" enctype="multipart/form-data">
         @csrf
         <div class="form-group">
            <input type="hidden" name="pass_postID" id="pass_postID" value="">
         </div>
         <div class="form-group">
            <input type="hidden" name="edit_ctDetail" id="edit_ctDetail" value="">
            <span class="textarea" role="textbox" name="pass_ctDetail" id="pass_ctDetail" contenteditable></span>
         </div>
         <div class="form-group mt-3">
            <img src="" id="pass_ctImage" style="max-width:400px;height:auto; max-height:200px;" style="display: none" onload="this.style.display=''" onerror="this.style.display='none'">
            <input type='file' name='file' id='file' class='form-control' >
         </div>
         <!-- Preview-->
         <div id='preview'></div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success" id="submitEdit" style="background-color:#02eb0d;color:#575d63;">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endsection
