@extends('layout')
@section('content')
@push('css')
    <link rel="stylesheet" href="{{asset('css/inputPost.css')}}"> <!-- Post Now hold by inputPost.css -->
    <link rel="stylesheet" href="{{asset('css/post.css')}}">      <!-- POST hold by post.css -->
@endpush
<!-- <script>
   //havent done
   function compareDateTime(){
         var id = document.getElementById("postID").value;
         var dateid = "date" + $id;
         var date = document.getElementById("dateid").value;  
         var dateNow = new Date();
         var diff = dateNow.getTime() - $date;
         var days = diff / (1000 * 3600 * 24);
         const dateClass = "date" + $id;
         if(days >= 3){
            document.getElementById(dateClass).textContent="yesterday";
         }
      }
</script> -->

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
                           <span class="time">08:00</span>
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
                              <div class="col-md-2 rounded-image">
                                 <input type="hidden" name="userId" id="userId" value="{{$user->id}}">
                                 <img class="userAvatar" src="{{ asset('images/user/'.$user->userAvatar) }}" alt="userAvatar">
                              </div>
                              <!-- Post Input Area -->
                              <div class="col-md-10">
                                 <section class="panel  timeline-post-to">
                                    <div class="panel-body">
                                          <form role="form" action="{{route('addPost')}}" method="POST" enctype="multipart/form-data">
                                             @CSRF
                                             <textarea rows="3" class="form-control" placeholder="What's on your mind?" name="ctDetail" id="ctDetail"></textarea>
                                             <!--  -->
                                             <div class="row">
                                                <div class="col-sm-10">
                                                      <a class="btn btn-sm btn-default ivm-show">
                                                         <label for="image">
                                                            <i class="fas fa-image"></i>
                                                            <input type="file" id="image" style="display: none" name="image" accept="image/*" multiple="" data-original-title="upload photos">
                                                         </label>
                                                      </a>
                                                      <a class="btn btn-sm btn-default ivm-show">
                                                         <label for="video">
                                                         <i class="fas fa-video"></i>
                                                            <input type="file" id="video" style="display: none" name="video" accept="video/*" multiple="" data-original-title="upload videos">
                                                         </label>
                                                      </a>
                                                      <a class="btn btn-sm btn-default ivm-show">
                                                         <label for="audio">
                                                         <i class="fas fa-music"></i>
                                                            <input type="file" id="audio" style="display: none" name="audio" accept="audio/mpeg,audio/ogg,audio/wav" multiple="" data-original-title="upload audios">
                                                         </label>
                                                      </a>
                                                      <div id="display-image" style="display:none"></div>
                                                </div>
                                                <div class="col-sm-2 text-right">
                                                      <button type="submit" class="btn btn-primary">Post</button>
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
                           <input type="hidden" id="postID" value="{{$post->id}}">
                           <span class="date" id="date{{$post->id}}">{{ \Carbon\Carbon::parse($post->ctDate)->format('d/m/y') }}</span>
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
                              <span class="username"><a href="javascript:;">{{$post->F_Name}}&nbsp;{{$post->L_Name}} </a> <small></small></span>
                              <span class="pull-right text-muted">18k Views</span>
                           </div>
                           <div class="timeline-content">
                              <p>
                                 {{$post->ctDetail}}
                              </p>
                              <!-- ----------------------------------------IMAGE------------------------------------------------- -->
                              <img class="postImage" src="{{ asset('images/post/image/'.$post->ctImage) }}" alt="">
                              <!-- ----------------------------------------VIDEO------------------------------------------------- -->
                              @if($post->ctVideo!=NULL)
                              <div class="iframe">
                                 <iframe id="iF{{$post->id}}" class="responsive-iframe" src="{{ asset('images/post/video/'.$post->ctVideo) }}" title="video" frameborder="0"  allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" width="600" height="400" allowfullscreen></iframe>
                              </div>
                              @endif
                              <!-- ----------------------------------------AUDIO------------------------------------------------- -->
                              <div class="audio">
                                 <audio controls>
                                    <source src="{{ asset('images/post/audio/'.$post->ctAudio) }}" type="audio/mpeg">
                                    <source src="{{ asset('images/post/audio/'.$post->ctAudio) }}" type="audio/ogg">
                                    <source src="{{ asset('images/post/audio/'.$post->ctAudio) }}" type="audio/wav">
                                 </audio>
                              </div>
                           </div>
                           <div class="timeline-likes">
                              <div class="stats-right">
                                 <span class="stats-text">259 Shares</span>
                                 <span class="stats-text">21 Comments</span>
                              </div>
                              <div class="stats">
                                 <span class="fa-stack fa-fw stats-icon">
                                 <i class="fa fa-circle fa-stack-2x text-danger"></i>
                                 <i class="fa fa-heart fa-stack-1x fa-inverse t-plus-1"></i>
                                 </span>
                                 <span class="fa-stack fa-fw stats-icon">
                                 <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                 <i class="fa fa-thumbs-up fa-stack-1x fa-inverse"></i>
                                 </span>
                                 <span class="stats-total">{{$post->ctLike}}</span>
                              </div>
                           </div>
                           <div class="timeline-footer">
                              <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-thumbs-up fa-fw fa-lg m-r-3"></i> Like</a>
                              <a href="javascript:commentBox({{$post->id}});" class="m-r-15 text-inverse-lighter"><i class="fa fa-comments fa-fw fa-lg m-r-3"></i> Comment</a> 
                              <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-share fa-fw fa-lg m-r-3"></i> Share</a>
                           </div>
                           <div class="timeline-comment-box" id="comment{{$post->id}}" style="display: none;">
                              <div class="user"><img src="images/user/ghost.jpg"></div>
                              <div class="input">
                                 <form action="">
                                    <div class="input-group">
                                       <input type="text" class="form-control rounded-corner" placeholder="Write a comment...">
                                       <span class="input-group-btn p-l-10">
                                       <button class="btn btn-primary f-s-12 rounded-corner" type="button">Comment</button>
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
                        <div class="timeline-body">
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

   <script>
      // show comment bar
      function commentBox($id){
         const targetDiv = document.getElementById("comment"+$id);
         if (targetDiv.style.display !== "none") {
         targetDiv.style.display = "none";
         } else {
         targetDiv.style.display = "block";
         }
      }
      
      function checkVid(){
         $('#iframe').css('display', 'none');
      }
      // image upload
      /*
      const image_input = document.querySelector("#image-input");
      const targetDiv2 = document.getElementByClassName("ivm-show");
      
      image_input.addEventListener("change", function() {
      const reader = new FileReader();
      reader.addEventListener("load", () => {
         const uploaded_image = reader.result;
         document.querySelector("#display-image").style.backgroundImage = `url(${uploaded_image})`;
         document.querySelector("#display-image").style.display = "none";
         document.querySelector("ivm-show").style.display = "block";
      });
         reader.readAsDataURL(this.files[0]);
      });
      */
      





   </script>


</body>

@endsection