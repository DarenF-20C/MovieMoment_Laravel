@extends('layout')
@section('content')
<body>
<div class="ranking">
         <div class="row title">
            <div class="col d-flex justify-content-center page-title" style="clear: both">
               <h3><strong>Top 10 Movie </strong> (19/12/2021 - 25/12/2021)</h3>
            </div>
         </div>
         <!-- first row -->
         <div class="row"> <!--ITEM 1-->
            <div class="col d-flex justify-content-center movie-item">
               <div class="card card-wrapper" style="width: 18rem;">
                  <a href="movieDetail.html">
                     <div class="image-wrapper">
                        <img src="https://terrigen-cdn-dev.marvel.com/content/prod/1x/spider-mannowayhome_lob_crd_03.jpg" alt="top1" class="img-fluid">
                     </div>
                     <div class="movie-item-content">
                     <div class="movie-item-title">Spider-man: No way home</div>
                        <div class="movie-infos">
                           <div class="movie-info">
                              <i class="bx bxs-star"></i>
                              <span>9.9</span>
                           </div>
                           <div class="movie-info">
                              <i class="bx bxs-time"></i>
                              <span>148 mins</span>
                           </div>
                           <div class="movie-info">
                              <span>4K</span>
                           </div>
                           <div class="movie-info">
                              <span>16+</span>
                           </div>
                        </div>
                     </div>
                  </a>
               </div>
            </div>
         </div>

         <!-- 2nd row -->
         <div class="row">
            <div class="col-md-6"><!-- ITEM 2 -->
               <div class="col d-flex justify-content-r movie-item">
                  <div class="card card-wrapper" style="width: 18rem;">
                     <a href="movieDetail.html">
                        <div class="image-wrapper">
                           <img src="https://sportshub.cbsistatic.com/i/2021/11/22/436a6a83-bebe-4f8a-9310-4d5466b39862/the-matrix-resurrections-character-poster-keanu-reeves-neo.jpg?auto=webp&width=2764&height=4096&crop=0.675:1,smart" alt="top2" class="img-fluid">
                        </div>
                        <div class="movie-item-content">
                           <div class="movie-item-title">The Matrix Resurrections</div>
                           <div class="movie-infos">
                              <div class="movie-info">
                                 <i class="bx bxs-star"></i>
                                 <span>9.8</span>
                              </div>
                              <div class="movie-info">
                                 <i class="bx bxs-time"></i>
                                 <span>148 mins</span>
                              </div>
                              <div class="movie-info">
                                 <span>4K</span>
                              </div>
                              <div class="movie-info">
                                 <span>16+</span>
                              </div>
                           </div>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
            
            <div class="col-md-6"><!-- ITEM 3 -->
               <div class="col d-flex justify-content-l movie-item">
                  <div class="card card-wrapper" style="width: 18rem;">
                     <a href="movieDetail.html">
                        <div class="image-wrapper">
                           <img src="https://dingyue.ws.126.net/2021/1208/ebe9f8d3j00r3sd0w005tc000fa00r5g.jpg" alt="top3" class="img-fluid">
                        </div>
                        <div class="movie-item-content">
                           <div class="movie-item-title">Don't look up</div>
                              <div class="movie-infos">
                                 <div class="movie-info">
                                    <i class="bx bxs-star"></i>
                                    <span>9.7</span>
                                 </div>
                                 <div class="movie-info">
                                    <i class="bx bxs-time"></i>
                                    <span>145 mins</span>
                                 </div>
                                 <div class="movie-info">
                                    <span>HD</span>
                                 </div>
                                 <div class="movie-info">
                                    <span>16+</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
         </div>

         <!-- 3rd row -->
         <div class="row">
            <div class="col-md-4"><!-- ITEM 4 -->
               <div class="col d-flex justify-content-r movie-item">
                  <div class="card card-wrapper" style="width: 18rem;">
                     <a href="movieDetail.html">
                        <div class="image-wrapper">
                           <img src="https://pbs.twimg.com/media/FHDjRfEUUAIbuGs?format=jpg&name=large" alt="top4">
                        </div>
                        <div class="movie-item-content">
                           <div class="movie-item-title">The Northman</div>
                              <div class="movie-infos">
                                 <div class="movie-info">
                                    <i class="bx bxs-star"></i>
                                    <span>9.6</span>
                                 </div>
                                 <div class="movie-info">
                                    <i class="bx bxs-time"></i>
                                    <span>140 mins</span>
                                 </div>
                                 <div class="movie-info">
                                    <span>HD</span>
                                 </div>
                                 <div class="movie-info">
                                    <span>16+</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </a>
                  </div>
               </div>
            <div class="col-md-4"><!-- ITEM 5 -->
               <div class="col d-flex justify-content-center m-t-20 movie-item">
                  <div class="card card-wrapper" style="width: 18rem;">
                     <a href="movieDetail.html">
                        <div class="image-wrapper">
                           <img src="https://popcornusa.s3.amazonaws.com/movies/650/14454-27675-Encanto.jpg" alt="top5">
                        </div>
                        <div class="movie-item-content">
                           <div class="movie-item-title">Encanto</div>
                              <div class="movie-infos">
                                 <div class="movie-info">
                                    <i class="bx bxs-star"></i>
                                    <span>9.5</span>
                                 </div>
                                 <div class="movie-info">
                                    <i class="bx bxs-time"></i>
                                    <span>99 mins</span>
                                 </div>
                                 <div class="movie-info">
                                    <span>HD</span>
                                 </div>
                                 <div class="movie-info">
                                    <span>16+</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </a>
                  </div>
               </div>
            <div class="col-md-4"><!-- ITEM 6 -->
               <div class="col d-flex justify-content-l movie-item">
                  <div class="card card-wrapper" style="width: 18rem;">
                     <a href="movieDetail.html">
                        <div class="image-wrapper">
                           <img src="https://m.media-amazon.com/images/M/MV5BM2M5MTJmOTEtNWU1Yy00NDNmLWI3MjMtNzFkN2FiZjE5Njg3XkEyXkFqcGdeQXVyMTEyMjM2NDc2._V1_.jpg" alt="top6">
                        </div>
                        <div class="movie-item-content">
                           <div class="movie-item-title">The Unforgivable</div>
                              <div class="movie-infos">
                                 <div class="movie-info">
                                    <i class="bx bxs-star"></i>
                                    <span>9.4</span>
                                 </div>
                                 <div class="movie-info">
                                    <i class="bx bxs-time"></i>
                                    <span>112 mins</span>
                                 </div>
                                 <div class="movie-info">
                                    <span>HD</span>
                                 </div>
                                 <div class="movie-info">
                                    <span>16+</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </a>
                  </div>
               </div>

         <!-- 4th row -->
         <div class="row">
            <div class="col-md-3"><!-- ITEM 7 -->
               <div class="col d-flex justify-content-r movie-item">
                  <div class="card card-wrapper" style="width: 18rem;">
                     <a href="movieDetail.html">
                        <div class="image-wrapper">
                           <img src="https://de.web.img3.acsta.net/pictures/21/11/17/17/30/3297966.jpg" alt="top7">
                        </div>
                        <div class="movie-item-content">
                           <div class="movie-item-title">Being the Ricardos</div>
                              <div class="movie-infos">
                                 <div class="movie-info">
                                    <i class="bx bxs-star"></i>
                                    <span>9.3</span>
                                 </div>
                                 <div class="movie-info">
                                    <i class="bx bxs-time"></i>
                                    <span>125 mins</span>
                                 </div>
                                 <div class="movie-info">
                                    <span>HD</span>
                                 </div>
                                 <div class="movie-info">
                                    <span>16+</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </a>
                  </div>
               </div>
            <div class="col-md-3"><!-- ITEM 8 -->
               <div class="col d-flex justify-content-r movie-item">
                  <div class="card card-wrapper" style="width: 18rem;">
                     <a href="movieDetail.html">
                        <div class="image-wrapper">
                           <img src="https://pics.filmaffinity.com/Resident_Evil_Welcome_to_Raccoon_City-196278630-large.jpg" alt="top8">
                        </div>
                        <div class="movie-item-content">
                           <div class="movie-item-title">Resident Evil: Welcome to Raccoon City</div>
                              <div class="movie-infos">
                                 <div class="movie-info">
                                    <i class="bx bxs-star"></i>
                                    <span>9.2</span>
                                 </div>
                                 <div class="movie-info">
                                    <i class="bx bxs-time"></i>
                                    <span>110 mins</span>
                                 </div>
                                 <div class="movie-info">
                                    <span>4K</span>
                                 </div>
                                 <div class="movie-info">
                                    <span>16+</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </a>
                  </div>
               </div>
            <div class="col-md-3"><!-- ITEM 9 -->
               <div class="col d-flex justify-content-r movie-item">
                  <div class="card card-wrapper" style="width: 18rem;">
                     <a href="movieDetail.html">
                        <div class="image-wrapper">
                           <img src="https://preview.redd.it/kvv2z9g55g481.jpg?width=640&crop=smart&auto=webp&s=ccc01e216334146ce0e46d724a3e9e1f012ec165" alt="top9">
                        </div>
                        <div class="movie-item-content">
                           <div class="movie-item-title">Licorice Pizza</div>
                              <div class="movie-infos">
                                 <div class="movie-info">
                                    <i class="bx bxs-star"></i>
                                    <span>9.1</span>
                                 </div>
                                 <div class="movie-info">
                                    <i class="bx bxs-time"></i>
                                    <span>133 mins</span>
                                 </div>
                                 <div class="movie-info">
                                    <span>HD</span>
                                 </div>
                                 <div class="movie-info">
                                    <span>16+</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </a>
                  </div>
               </div>
            <div class="col-md-3"><!-- ITEM 10 -->
               <div class="col d-flex justify-content-r movie-item">
                  <div class="card card-wrapper" style="width: 18rem;">
                     <a href="movieDetail.html">
                        <div class="image-wrapper">
                           <img src="https://es.web.img3.acsta.net/pictures/21/11/15/15/27/0223770.jpg" alt="top10">
                        </div>
                        <div class="movie-item-content">
                           <div class="movie-item-title">The Power of the Dog</div>
                              <div class="movie-infos">
                                 <div class="movie-info">
                                    <i class="bx bxs-star"></i>
                                    <span>9.0</span>
                                 </div>
                                 <div class="movie-info">
                                    <i class="bx bxs-time"></i>
                                    <span>125 mins</span>
                                 </div>
                                 <div class="movie-info">
                                    <span>HD</span>
                                 </div>
                                 <div class="movie-info">
                                    <span>16+</span>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <br><br>
   </body>

@endsection