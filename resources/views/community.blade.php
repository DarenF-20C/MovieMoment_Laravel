@extends('layout')
<title>M&M | Movie Community</title>
@section('content')
@push('css')
   <!-- for FB share specification -->
   <meta property="og:title" content="My Post">
   <meta property="og:image" content="https://cdn.pixabay.com/photo/2016/05/05/02/37/sunset-1373171__480.jpg">
   <meta name="csrf-token" content="{{ csrf_token() }}" />
   <link rel="stylesheet" href="{{asset('css/inputPost.css')}}"> <!-- Post Now hold by inputPost.css -->
   <link rel="stylesheet" href="{{asset('css/post.css')}}">      <!-- POST hold by post.css -->
   <!-- Font Awesome -->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
   <!-- Google Fonts -->
   <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
   <!-- MDB -->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.css" rel="stylesheet"/>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.js" integrity="sha512-JLkwaZ4wv4rmL3O3OoWF1ODQonz8mJgOwA3MxH6nLZTNgHbelnzk1xnsY74Ri+WWW1ZNaqHfg0KBQyMmi5vtbg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endpush
<body onload="pointInfo();">
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
         <!-- right bottom help -->
         <div id="help">
            <div class="popup">
               <h3>Earning Points?</h3>
               <p>Points can be used to <a href="{{url('showRewards')}}"><strong>redeem rewards</strong></a> in our website.</p>
               <p>You can earn 10 points on each:</p>
               <ul>
                  <li>Post your content</li>
                  <li>Like a post</li>
                  <li>Comment a post</li>
                  <li>Share on other social media</li>
               </ul>
               <p>Daily limit: 15 times (150 points)</p>
            </div>
            <button class="helpbtn"> ? </button>
         </div>
         

<!---------------------------------------------------------- Input post ---------------------------------------------------------->
         @foreach($user as $user)
         <div class="profile-content pt-5" id="sec-2">
         <input type="hidden" id="userLimit" value="{{$user->dailyLimit}}">
         <input type="hidden" id="limitNotify" value="1">
         <input type="hidden" id="userPoints" value="{{$user->points}}">
            <!-- begin tab-content -->
            <div class="tab-content p-0">
               <!-- begin #profile-post tab -->
               <div class="tab-pane fade active show" id="profile-post">
                  <!-- begin timeline -->
                  <ul class="timeline" id="post-data1">
                     <input type="hidden" id="loaderExist" value="1">
                     <li id="post-data">
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
                                          <form role="form" action="{{route('addPost')}}" method="POST" enctype="multipart/form-data" id="inputPostform">
                                             @CSRF
                                             <textarea rows="3" class="form-control" placeholder="What's on your mind?" name="ctDetail" id="ctDetail" maxlength="5000" required></textarea>
                                             <div class="row">
                                                <div class="col-sm-10" id="upload-icon">
                                                   <label for="image" data-mdb-toggle="tooltip" title="upload an image">
                                                      <a class="btn btn-sm btn-default ivm-show" style='border:1px solid #02eb0d'>
                                                         <i class="fas fa-image" style='color:#02eb0d'></i>
                                                         <input type="file" id="image" style="display: none" name="image" accept="image/*" multiple="" data-original-title="upload photos" onchange="showPreview(event);">
                                                      </a>
                                                   </label>
                                                      
                                                   <label for="video" data-mdb-toggle="tooltip" title="upload a video">
                                                      <a class="btn btn-sm btn-default ivm-show" style='border:1px solid #02eb0d'>
                                                         <i class="fas fa-video" style='color:#02eb0d'></i>
                                                         <input type="file" id="video" style="display: none" name="video" accept="video/*" multiple="" data-original-title="upload videos" onchange="showPreviewVideo(event);">
                                                      </a>
                                                   </label>
                                                </div>
                                                <div class="col-sm-10 col-md-10 upload-image" id="display-image" style="display:none">
                                                   <img id="previewImage" src="" alt="" />
                                                </div>
                                                <div class="col-sm-10 col-md-10 upload-image" id="display-video" style="display:none">
                                                   <video width="320" height="240" controls>Your browser does not support the video tag.</video>
                                                </div>
                                                <div class="col-md-2 col-sm-2 text-right">
                                                      <button type="button" class="btn btn-primary btn-color" style='color:#2d353c;' id="postbtn" data-id="{{$user->id}}">Post</button>
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
                     @include('data')

<!------------------------------------------------------------ POST loading ------------------------------------------------------------>
                     <li id="ajaxloader"><!-- POST loading -->
                        <!-- begin timeline-icon -->
                        <div class="timeline-icon ajax-loader" style="display:;">
                           <a href="javascript:;">&nbsp;</a>
                        </div>
                        <!-- end timeline-icon -->
                        <!-- begin timeline-body -->
                        <div class="timeline-body ajax-loader ajax-load" style="color:whitesmoke;display:;" >
                           <img src="{{asset('images/loader.gif')}}" height="40px" alt="loader" style="float:left;margin-top:-10px;margin-right:5px;"> <span id="loader-text">Loading...</span>
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

<!-- MDB -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.js" integrity="sha512-JLkwaZ4wv4rmL3O3OoWF1ODQonz8mJgOwA3MxH6nLZTNgHbelnzk1xnsY74Ri+WWW1ZNaqHfg0KBQyMmi5vtbg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
   </script>

<!-- Image zoom -->
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

<!-- read more / read less -->
<script src="https://code.jquery.com/jquery-1.12.4.js"></script> 
<script>
   function AddReadMore() {
      //This limit you can set after how much characters you want to show Read More.
      var carLmt = 200;
      // Text to show when text is collapsed
      var readMoreTxt = " ... Read More";
      // Text to show when text is expanded
      var readLessTxt = " Read Less";


      //Traverse all selectors with this class and manupulate HTML part to show Read More
      $(".addReadMore").each(function() {
         if ($(this).find(".firstSec").length)
               return;

         var allstr = $(this).text();
         if (allstr.length > carLmt) {
               var firstSet = allstr.substring(0, carLmt);
               var secdHalf = allstr.substring(carLmt, allstr.length);
               var strtoadd = firstSet + "<span class='SecSec'>" + secdHalf + "</span><span class='readMore'  title='Click to Show More'>" + readMoreTxt + "</span><span class='readLess' title='Click to Show Less'>" + readLessTxt + "</span>";
               $(this).html(strtoadd);
         }

      });
      //Read More and Read Less Click Event binding
      
   }
   $("body").on("click", ".readMore,.readLess", function() {
         $(this).closest(".addReadMore").toggleClass("showlesscontent showmorecontent");
      });
   $(function() {
      //Calling function after Page Load
      AddReadMore();
   });
</script>

<!-- Preview Image -->
<script>
   function showPreview(event){
   if(event.target.files.length > 0){
      var src = URL.createObjectURL(event.target.files[0]);
      var previewImage = document.getElementById("previewImage");
      var displayImage = document.getElementById("display-image");
      var icon = document.getElementById("upload-icon");
      previewImage.src = src;
      displayImage.style.display = "block";
   }
   }
</script>

<!-- Preview Video -->
<script>
   document.getElementById("video")
   .onchange = function(event) {
      var displayVideo = document.getElementById("display-video");
      displayVideo.style.display = "block";
      let file = event.target.files[0];
      let blobURL = URL.createObjectURL(file);
      document.querySelector("video").src = blobURL;
   }
</script>

<!-- FOR EDIT POST -->
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
   // pass from span to input tag 
   $(function() {
      $('#submitEdit').click(function() {
         $('#edit_ctDetail').val($('#pass_ctDetail').text());
         const editDetail = document.getElementById('edit_ctDetail');
         let badwords = /fuck you|f u c k y o u|f u c k|fuck|sex|ahole|anus|ash0le|ash0les|asholes|ass|Ass Monkey|Assface|assh0le|assh0lez|asshole|assholes|assholz|asswipe|azzhole|bassterds|bastard|bastards|bastardz|basterds|basterdz|Biatch|bitch|bitches|Blow Job|boffing|butthole|buttwipe|c0ck|c0cks|c0k|Carpet Muncher|cawk|cawks|Clit|cnts|cntz|cock|cockhead|cock-head|cocks|CockSucker|cock-sucker|crap|cum|cunt|cunts|cuntz|dick|dild0|dild0s|dildo|dildos|dilld0|dilld0s|dominatricks|dominatrics|dominatrix|dyke|enema|f u c k|f u c k e r|fag|fag1t|faget|fagg1t|faggit|faggot|fagit|fags|fagz|faig|faigs|fart|flipping the bird|fuck|fucker|fuckin|fucking|fucks|Fudge Packer|fuk|Fukah|Fuken|fuker|Fukin|Fukk|Fukkah|Fukken|Fukker|Fukkin|g00k|gay|gayboy|gaygirl|gays|gayz|God-damned|h00r|h0ar|h0re|hells|hoar|hoor|hoore|jackoff|jap|japs|jerk-off|jisim|jiss|jizm|jizz|knob|knobs|knobz|kunt|kunts|kuntz|Lesbian|Lezzian|Lipshits|Lipshitz|masochist|masokist|massterbait|masstrbait|masstrbate|masterbaiter|masterbate|masterbates|Motha Fucker|Motha Fuker|Motha Fukkah|Motha Fukker|Mother Fucker|Mother Fukah|Mother Fuker|Mother Fukkah|Mother Fukker|mother-fucker|Mutha Fucker|Mutha Fukah|Mutha Fuker|Mutha Fukkah|Mutha Fukker|n1gr|nastt|nigger|nigur|niiger|niigr|orafis|orgasim|orgasm|orgasum|oriface|orifice|orifiss|packi|packie|packy|paki|pakie|paky|pecker|peeenus|peeenusss|peenus|peinus|pen1s|penas|penis|penis-breath|penus|penuus|Phuc|Phuck|Phuk|Phuker|Phukker|polac|polack|polak|Poonani|pr1c|pr1ck|pr1k|pusse|pussee|pussy|puuke|puuker|queer|queers|queerz|qweers|qweerz|qweir|recktum|rectum|retard|sadist|scank|schlong|screwing|semen|sex|sexy|Sh!t|sh1t|sh1ter|sh1ts|sh1tter|sh1tz|shit|shits|shitter|Shitty|Shity|shitz|Shyt|Shyte|Shytty|Shyty|skanck|skank|skankee|skankey|skanks|Skanky|slut|sluts|Slutty|slutz|son-of-a-bitch|tit|turd|va1jina|vag1na|vagiina|vagina|vaj1na|vajina|vullva|vulva|w0p|wh00r|wh0re|whore|xrated|xxx|b!+ch|bitch|blowjob|clit|arschloch|fuck|shit|ass|asshole|b!tch|b17ch|b1tch|bastard|bi+ch|boiolas|buceta|c0ck|cawk|chink|cipa|clits|cock|cum|cunt|dildo|dirsa|ejakulate|fatass|fcuk|fuk|fux0r|hoer|hore|jism|kawk|l3itch|l3i+ch|lesbian|masturbate|masterbat|masterbat3|motherfucker|mofo|nazi|nigga|nigger|nutsack|phuck|pimpis|pusse|pussy|scrotum|sh!t|shemale|shi+|sh!+|slut|smut|teets|tits|boobs|b00bs|teez|testical|testicle|titt|w00se|jackoff|wank|whoar|whore|damn|dyke|fuck|shit|amcik|andskota|arse|assrammer|ayir|bi7ch|bitch|bollock|breasts|butt-pirate|cabron|cazzo|chraa|chuj|Cock|cunt|d4mn|daygo|dego|dick|dike|dupa|dziwka|ejackulate|Ekrem|Ekto|enculer|faen|fag|fanculo|fanny|feces|feg|Felcher|ficken|fitt|Flikker|foreskin|Fotze|fuk|futkretzn|gay|gook|guiena|h0r|h4x0r|hell|helvete|hoer|honkey|Huevon|hui|injun|jizz|kanker|kike|klootzak|kraut|knulle|kuk|kuksuger|Kurac|kurwa|kusi|kyrpa|lesbo|mamhoon|masturbat|merd|mibun|monkleigh|mouliewop|muie|mulkku|muschi|nazis|nepesaurio|nigger|orospu|paska|perse|picka|pierdol|pillu|pimmel|piss|pizda|poontsee|poop|porn|p0rn|pr0n|preteen|pula|pule|puta|puto|qahbeh|queef|rautenberg|schaffer|scheiss|schlampe|schmuck|screw|sh!t|sharmuta|sharmute|shipal|shiz|skribz|skurwysyn|sphencter|spic|spierdalaj|splooge|suka|b00b/gi;
         let detailBefore = editDetail.value;
         let detailAfter = detailBefore.replace(badwords,"*****");
         document.getElementById('edit_ctDetail').value = detailAfter;
         if(document.getElementById('edit_ctDetail').value){
            document.getElementById("editform").submit();
         }
      });
   });
</script>

<!-- like without reload -->
<script>
   $("body").on("click", ".likeButton", function(){
      var id = $(this).data("id");
      var token = $(this).data("token");
      var earnid = "earned-" + id;
      const earned = document.getElementById(earnid);
      $.ajax({
         url: "/like-post/"+id,
         type: 'POST',
         dataType: 'JSON',
         data: {
            "$PostID": id,
            "_method": 'POST',
            "_token": token,
         },
         success: function(){
            console.log('like recorded');
         } 
      });
      var button = $(this).data("button");
      var buttonword = $(this).data("btnword");
      var stats = $(this).data("stats");
      const btn = document.getElementById(button);
      const btnword = document.getElementById(buttonword);
      var stat = document.getElementById(stats);
      var statsNum = parseInt(document.getElementById(stats).textContent.trim());
      if(btn.style.color == "rgb(2, 235, 13)"){
         btn.style.color = "#fff";
         btnword.style.color = "#fff";
         stat.textContent =statsNum - 1;
      }else{
         btn.style.color = "#02eb0d";
         btnword.style.color = "#02eb0d";
         stat.textContent =statsNum + 1;
         var dailyLimit = parseInt($('#userLimit').val());
         if(dailyLimit < 15){
            // Point increment
            if(document.getElementById(earnid).value == "1"){
               $.ajax({
                  headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
                  url: "/addPoints/"+id,
                  type: 'POST',
                  data: {
                     "id": id,
                  },
                  success: function(){
                     if(document.getElementById(earnid).value == "1"){
                        document.getElementById(earnid).value = "2";
                     }
                  },
                  error: function(data){
                     console.log(data);
                  }
               });
            }
         }
      }   
   });
</script>

<!-- Point increment -->
<script>
   $("body").on("click", ".emojibar", function(){
      var id = $(this).data("id");
      var earnid = "earned-share-" + id;
      const earned = document.getElementById(earnid);
      var dailyLimit = parseInt($('#userLimit').val());
      if(dailyLimit < 15){
         if(document.getElementById(earnid).value == "1"){
            $.ajax({
               headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
               },
               url: "/addPoints/"+id,
               type: 'POST',
               data: {
                  "id": id,
               },
               success: function(){
                  console.log('points add to db!');
                  if(document.getElementById(earnid).value == "1"){
                     document.getElementById(earnid).value = "2";
                  }
               },
               error: function(data){
                  console.log(data);
               }
            });
         }
      }
   });
   // add comment add point
   $("body").on("click", ".addcomment", function(){
      var dailyLimit = parseInt($('#userLimit').val());
      var id = $(this).data("id");
      if(dailyLimit < 15){
         $.ajax({
            headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "/addPoints/"+id,
            type: 'POST',
            data: {
               "id": id,
            },
            success: function(){
               console.log('points add to db!');
            },
            error: function(data){
               console.log(data);
            }
         });
      }
   });
   // add post add point
   $("body").on("click", "#postbtn", function(){
      var dailyLimit = parseInt($('#userLimit').val());
      var id = $(this).data("id");
      if(dailyLimit < 15){
         $.ajax({
            headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "/addPoints/"+id,
            type: 'POST',
            data: {
               "id": id,
            },
            success: function(){
               console.log('points add to db!');
            },
            error: function(data){
               console.log(data);
            }
         });
      }
   });
</script>

<!-- Infinite load-->
<script>
   const ajaxloader = document.getElementById("ajaxloader").innerHTML;
   function loadMoreData(page){
      var ajaxli = document.getElementById("ajaxloader");
      var loaderExist = parseInt($('#loaderExist').val());
      $.ajax({
         url:'?page=' + page,
         type:'GET',
         beforeSend: function(){
            if(loaderExist != 1){
               var li = document.createElement("li");
               li.setAttribute("id","ajaxloader");
               li.innerHTML += ajaxloader;
               $("#post-data1").append(li);
               AddReadMore();
               $("#loaderExist").val("1");
               loaderExist = 1;
            }
         }
      }).done(function(data){
         // console.log(data);
         if(data.html == ''){
            if(loaderExist != 1){
               var li = document.createElement("li");
               li.innerHTML += ajaxloader;
               $("#post-data1").append(li);
               $("#loaderExist").val("1");
               loaderExist = 1;
            }
               $(".ajax-load").html(" No more records. ");
            return;
         }
         $("#ajaxloader").remove();
         $("#loaderExist").val("2");
         $("#post-data1").append(data.html);
      }).fail(function(data){
         alert(data);
         console.log(data);
      });
   }

   var page = 1;
   $(window).scroll(function(){
      if ($(window).scrollTop() >= ($(document).height() - $(window).height() - 2)) {
      page++;
      loadMoreData(page);
      }
   });
</script>


<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.28/sweetalert2.all.min.js" integrity="sha512-nWDPZH/tnW5b1KedLPkb9inxNXadIf4qQDoGTxPJcQNMn4XwPIIlmHSPofT821taBuF1t/uiGSOsRrVccwXS4g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
   $("body").on("click", ".likeButton", function(){
      var id = $(this).data("id");
      var earnid = "earned-" + id;
      var dailyLimit = parseInt($('#userLimit').val());
      var limitNotify = parseInt($('#limitNotify').val());
      if(dailyLimit< 15){
         var button = $(this).data("button");
         const btn = document.getElementById(button);
         if(btn.style.color == "rgb(2, 235, 13)" && document.getElementById(earnid).value =="1"){
            var points = parseInt($('#userPoints').val()) + 10;
            dailyLimit += 1;
            Swal.fire({
               icon: 'success',
               title: 'Points Earned',
               text: 'Points + 10. Current points: '+points+'. Limit: '+dailyLimit+'/15',
               showConfirmButton: false,
               background: '#242a30',
               color: '#fff',
               heightAuto: false,
               // timer: '2000',
               footer: '<a href="{{url('showRewards')}}">Redeem reward?</a>',
            })
            $('#userLimit').val(dailyLimit);
            $('#userPoints').val(points);
         }
      }else if(limitNotify == 1){
         Swal.fire({
            icon:'warning',
            title: 'Limit reached',
            text: 'You have reached the daily limit for earning points. 15/15',
            showConfirmButton: false,
            background: '#242a30',
            color: '#fff',
            heightAuto: false,
         })
         $("#limitNotify").val(limitNotify + 1);
      }
   })
   // share get point notify
   $("body").on("click", ".emojibar", function(){   
      var id = $(this).data("id");
      var earnid = "earned-share-" + id;
      const earned = document.getElementById(earnid);
      var dailyLimit = parseInt($('#userLimit').val());
      var limitNotify = parseInt($('#limitNotify').val());
      if(dailyLimit< 15){
         var points = parseInt($('#userPoints').val()) + 10;
         dailyLimit += 1;
         if(document.getElementById(earnid).value =="1"){
            Swal.fire({
               icon: 'success',
               title: 'Points Earned',
               text: 'Points + 10. Current points: '+points+'. Limit: '+dailyLimit+'/15',
               showConfirmButton: false,
               background: '#242a30',
               color: '#fff',
               heightAuto: false,
               // timer: '2000',
               footer: '<a href="{{url('showRewards')}}">Redeem reward?</a>',
            })
            $('#userLimit').val(dailyLimit);
            $('#userPoints').val(points);
         }
      }else if(limitNotify == 1){
         Swal.fire({
            icon:'warning',
            title: 'Limit reached',
            text: 'You have reached the daily limit for earning points. 15/15',
            showConfirmButton: false,
            background: '#242a30',
            color: '#fff',
            heightAuto: false,
         })
         $("#limitNotify").val(limitNotify + 1);
      }
   })
   //Notify every time load
   function pointInfo() {
      var dailyLimit = parseInt($('#userLimit').val());
      var points = parseInt($('#userPoints').val());
      const Toast = Swal.mixin({
         toast: true,
         position: 'top-end',
         showConfirmButton: false,
         timer: 3000,
         timerProgressBar: true,
         didOpen: (toast) => {
            toast.addEventListener('mouseenter', Swal.stopTimer)
            toast.addEventListener('mouseleave', Swal.resumeTimer)
         }
      })
      Toast.fire({
         icon: 'info',
         title: "Points: "+ points + " \nToday's limit :" + dailyLimit + "/15"
      })
   }

</script>

<script>
   $("body").on("click", "#postbtn", function(){
      const textareaDetail = document.getElementById('ctDetail');
      let badwords = /fuck you|f u c k y o u|f u c k|fuck|sex|ahole|anus|ash0le|ash0les|asholes|ass|Ass Monkey|Assface|assh0le|assh0lez|asshole|assholes|assholz|asswipe|azzhole|bassterds|bastard|bastards|bastardz|basterds|basterdz|Biatch|bitch|bitches|Blow Job|boffing|butthole|buttwipe|c0ck|c0cks|c0k|Carpet Muncher|cawk|cawks|Clit|cnts|cntz|cock|cockhead|cock-head|cocks|CockSucker|cock-sucker|crap|cum|cunt|cunts|cuntz|dick|dild0|dild0s|dildo|dildos|dilld0|dilld0s|dominatricks|dominatrics|dominatrix|dyke|enema|f u c k|f u c k e r|fag|fag1t|faget|fagg1t|faggit|faggot|fagit|fags|fagz|faig|faigs|fart|flipping the bird|fuck|fucker|fuckin|fucking|fucks|Fudge Packer|fuk|Fukah|Fuken|fuker|Fukin|Fukk|Fukkah|Fukken|Fukker|Fukkin|g00k|gay|gayboy|gaygirl|gays|gayz|God-damned|h00r|h0ar|h0re|hells|hoar|hoor|hoore|jackoff|jap|japs|jerk-off|jisim|jiss|jizm|jizz|knob|knobs|knobz|kunt|kunts|kuntz|Lesbian|Lezzian|Lipshits|Lipshitz|masochist|masokist|massterbait|masstrbait|masstrbate|masterbaiter|masterbate|masterbates|Motha Fucker|Motha Fuker|Motha Fukkah|Motha Fukker|Mother Fucker|Mother Fukah|Mother Fuker|Mother Fukkah|Mother Fukker|mother-fucker|Mutha Fucker|Mutha Fukah|Mutha Fuker|Mutha Fukkah|Mutha Fukker|n1gr|nastt|nigger|nigur|niiger|niigr|orafis|orgasim|orgasm|orgasum|oriface|orifice|orifiss|packi|packie|packy|paki|pakie|paky|pecker|peeenus|peeenusss|peenus|peinus|pen1s|penas|penis|penis-breath|penus|penuus|Phuc|Phuck|Phuk|Phuker|Phukker|polac|polack|polak|Poonani|pr1c|pr1ck|pr1k|pusse|pussee|pussy|puuke|puuker|queer|queers|queerz|qweers|qweerz|qweir|recktum|rectum|retard|sadist|scank|schlong|screwing|semen|sex|sexy|Sh!t|sh1t|sh1ter|sh1ts|sh1tter|sh1tz|shit|shits|shitter|Shitty|Shity|shitz|Shyt|Shyte|Shytty|Shyty|skanck|skank|skankee|skankey|skanks|Skanky|slut|sluts|Slutty|slutz|son-of-a-bitch|tit|turd|va1jina|vag1na|vagiina|vagina|vaj1na|vajina|vullva|vulva|w0p|wh00r|wh0re|whore|xrated|xxx|b!+ch|bitch|blowjob|clit|arschloch|fuck|shit|ass|asshole|b!tch|b17ch|b1tch|bastard|bi+ch|boiolas|buceta|c0ck|cawk|chink|cipa|clits|cock|cum|cunt|dildo|dirsa|ejakulate|fatass|fcuk|fuk|fux0r|hoer|hore|jism|kawk|l3itch|l3i+ch|lesbian|masturbate|masterbat|masterbat3|motherfucker|mofo|nazi|nigga|nigger|nutsack|phuck|pimpis|pusse|pussy|scrotum|sh!t|shemale|shi+|sh!+|slut|smut|teets|tits|boobs|b00bs|teez|testical|testicle|titt|w00se|jackoff|wank|whoar|whore|damn|dyke|fuck|shit|amcik|andskota|arse|assrammer|ayir|bi7ch|bitch|bollock|breasts|butt-pirate|cabron|cazzo|chraa|chuj|Cock|cunt|d4mn|daygo|dego|dick|dike|dupa|dziwka|ejackulate|Ekrem|Ekto|enculer|faen|fag|fanculo|fanny|feces|feg|Felcher|ficken|fitt|Flikker|foreskin|Fotze|fuk|futkretzn|gay|gook|guiena|h0r|h4x0r|hell|helvete|hoer|honkey|Huevon|hui|injun|jizz|kanker|kike|klootzak|kraut|knulle|kuk|kuksuger|Kurac|kurwa|kusi|kyrpa|lesbo|mamhoon|masturbat|merd|mibun|monkleigh|mouliewop|muie|mulkku|muschi|nazis|nepesaurio|nigger|orospu|paska|perse|picka|pierdol|pillu|pimmel|piss|pizda|poontsee|poop|porn|p0rn|pr0n|preteen|pula|pule|puta|puto|qahbeh|queef|rautenberg|schaffer|scheiss|schlampe|schmuck|screw|sh!t|sharmuta|sharmute|shipal|shiz|skribz|skurwysyn|sphencter|spic|spierdalaj|splooge|suka|b00b/gi;
      let detailBefore = textareaDetail.value;
      let detailAfter = detailBefore.replace(badwords,"*****");
      document.getElementById('ctDetail').value = detailAfter;
      if(document.getElementById('ctDetail').value){
         document.getElementById("inputPostform").submit();
      }
   });
   
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
      <form class="form-horizontal" action="{{route('editPost')}}" method="POST" enctype="multipart/form-data" id="editform">
         @csrf
         <div class="form-group">
            <input type="hidden" name="pass_postID" id="pass_postID" value="">
         </div>
         <div class="form-group">
            <input type="hidden" name="edit_ctDetail" id="edit_ctDetail" value="">
            <span class="textarea" role="textbox" name="pass_ctDetail" id="pass_ctDetail" contenteditable></span>
         </div>
         <!-- <div class="form-group mt-3">
            <img src="" id="pass_ctImage" style="max-width:400px;height:auto; max-height:200px;" style="display: none" onload="this.style.display=''" onerror="this.style.display='none'">
            <input type='file' name='file' id='file' class='form-control' >
         </div> -->
         <!-- Preview-->
         <!-- <div id='preview'></div>
      </div> -->
      <div class="modal-footer">
        <button type="button" class="btn btn-success" id="submitEdit" style="background-color:#02eb0d;color:#575d63;">Save changes</button>
      </div>
    </div>
  </div>
</div>

@endsection
