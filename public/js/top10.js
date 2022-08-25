//API Key (fff27caf16baadb8c1e7426e855cff9d)
const API_KEY = 'api_key=1cf50e6248dc270629e802686245c2c8';
//Base URL for TMDb
const BASE_URL = 'https://api.themoviedb.org/3';
//API URL
const API_URL = BASE_URL + '/discover/movie?sort_by=popularity.desc&'+API_KEY;
//Image from TMDB API
const IMG_URL = 'https://image.tmdb.org/t/p/w500';

const genres = [
  {
    "id": 28,
    "name": "Action"
  },
  {
    "id": 12,
    "name": "Adventure"
  },
  {
    "id": 16,
    "name": "Animation"
  },
  {
    "id": 35,
    "name": "Comedy"
  },
  {
    "id": 80,
    "name": "Crime"
  },
  {
    "id": 99,
    "name": "Documentary"
  },
  {
    "id": 18,
    "name": "Drama"
  },
  {
    "id": 10751,
    "name": "Family"
  },
  {
    "id": 14,
    "name": "Fantasy"
  },
  {
    "id": 36,
    "name": "History"
  },
  {
    "id": 27,
    "name": "Horror"
  },
  {
    "id": 10402,
    "name": "Music"
  },
  {
    "id": 9648,
    "name": "Mystery"
  },
  {
    "id": 10749,
    "name": "Romance"
  },
  {
    "id": 878,
    "name": "Science Fiction"
  },
  {
    "id": 10770,
    "name": "TV Movie"
  },
  {
    "id": 53,
    "name": "Thriller"
  },
  {
    "id": 10752,
    "name": "War"
  },
  {
    "id": 37,
    "name": "Western"
  }
]

const main = document.getElementById('main');
const form =  document.getElementById('form');
const search = document.getElementById('search');
const tagsEl = document.getElementById('tags');

const prev = document.getElementById('prev')
const next = document.getElementById('next')
const current = document.getElementById('current')

//https://api.themoviedb.org/3/trending/movie/week?api_key=fff27caf16baadb8c1e7426e855cff9d
// https://api.themoviedb.org/3/trending/movie/week?api_key=1cf50e6248dc270629e802686245c2c8&sort=vote_average
getTop10Movies("https://api.themoviedb.org/3/trending/movie/week?api_key=1cf50e6248dc270629e802686245c2c8&sort=vote_average")
  /* Open when someone clicks on the span element */
function getTop10Movies() {
  fetch("https://api.themoviedb.org/3/trending/movie/week?api_key=1cf50e6248dc270629e802686245c2c8&sort=vote_average")
  .then(response => response.json())
  .then(data => {
    data.results.sort((a,b) => (a.vote_average > b.vote_average)? -1 : 1 )
    console.log(data.results.slice(0,10))
    showTop10Movies(data.results.slice(0,10))
  })
  }
  //https://api.themoviedb.org/3/trending/movie/week?&api_key=fff27caf16baadb8c1e7426e855cff9d&page=1&sort_by=vote_average.asc

  function showTop10Movies(data) {
        const {title, poster_path, vote_average, overview} = data;
        const movieEl = document.createElement('div');
        movieEl.classList.add('movie');
        const d = new Date();
        var date = d.getDate() || 7 ; 
        var month = d.getMonth() + 1; // Since getMonth() returns month from 0-11 not 1-12
        var year = d.getFullYear();
        var dateStr = date + "/" + month + "/" + year;
        // var today = new Date();
        // var day = today.getDay() || 7; // Get current day number, converting Sun. to 7
        // if( day !== 1 )                // Only manipulate the date if it isn't Mon.
        // today.setHours(-24 * (day - 1));   // Set the hours to day number minus 1
        movieEl.innerHTML = `
        <div class="abc">
        <h1 class="Top10">Top 10 Movies</h1> <h2 class="update">Last Update: ${dateStr}</h2>
        <div class="d-flex justify-content-center">
        <div class="top-1 first">
        <br>
        <h1><span class="fa fa-crown fa-lg"></span></h> 
        <div class="movies">
        <img src="${data[0].poster_path? IMG_URL+ data[0].poster_path: "http://via.placeholder.com/1080x1580" }" alt="${data[0].title}" id="${data[0].id}">
        <div class="movie-info">
        ${data[0].title}
        <span class="${getColor(data[0].vote_average)}">${data[0].vote_average.toFixed(1)}</span>
        </div>
        </div>
        </div> 
        </div>

        
        <div class="d-flex justify-content-center">
        <div class="top-1">
        <h1><span class="bi bi-circle-2">2</span> 
        <div class="movies">
        <img src="${data[1].poster_path? IMG_URL+ data[1].poster_path: "http://via.placeholder.com/1080x1580" }"  alt="${data[1].title}" id="${data[1].id}">
        <div class="movie-info">
        ${data[1].title}
        <span class="${getColor(data[1].vote_average)}">${data[1].vote_average.toFixed(1)}</span>
        </div>
        </div>
        </div>
        <div class="top-1 third">
        <h1><span class="bi bi-circle-3">3</span></h1>
        <div class="movies">
        <img src="${data[2].poster_path? IMG_URL+ data[2].poster_path: "http://via.placeholder.com/1080x1580" }" alt="${data[2].title}" id="${data[2].id}">
        <div class="movie-info">
        ${data[2].title}
        <span class="${getColor(data[2].vote_average)}">${data[2].vote_average.toFixed(1)}</span>
        </div>
        </div>
        </div>
        </div>

        <div class="d-flex justify-content-center">
        <div class="top-1">
        <h1><span class="bi bi-circle-4">4</span></h1>
        <div class="movies">
        <img src="${data[3].poster_path? IMG_URL+ data[3].poster_path: "http://via.placeholder.com/1080x1580" }" alt="${data[3].title}" id="${data[3].id}">
        <div class="movie-info">
        ${data[3].title}
        <span class="${getColor(data[3].vote_average)}">${data[3].vote_average.toFixed(1)}</span>
        </div>
        </div>
        </div>
        <div class="top-1">
        <h1><span class="bi bi-circle-5">5</span></h1>
        <div class="movies">
        <img src="${data[4].poster_path? IMG_URL+ data[4].poster_path: "http://via.placeholder.com/1080x1580" }" alt="${data[4].title}" id="${data[4].id}">
        <div class="movie-info">
        ${data[4].title}
        <span class="${getColor(data[4].vote_average)}">${data[4].vote_average.toFixed(1)}</span>
        </div>
        </div>
        </div>
        <div class="top-1">
        <h1><span class="bi bi-circle-6">6</span></h1>
        <div class="movies">
        <img src="${data[5].poster_path? IMG_URL+ data[5].poster_path: "http://via.placeholder.com/1080x1580" }" alt="${data[5].title}" id="${data[5].id}">
        <div class="movie-info">
        ${data[5].title}
        <span class="${getColor(data[5].vote_average)}">${data[5].vote_average.toFixed(1)}</span>
        </div>
        </div>
        </div>
        </div>

        <div class="d-flex justify-content-center">
        <div class="top-1">
        <h1><span class="bi bi-circle-7">7</span></h1>
        <div class="movies">
        <img src="${data[6].poster_path? IMG_URL+ data[6].poster_path: "http://via.placeholder.com/1080x1580" }" alt="${data[6].title}" id="${data[6].id}">
        <div class="movie-info">
        ${data[6].title}
        <span class="${getColor(data[6].vote_average)}">${data[6].vote_average.toFixed(1)}</span>
        </div>
        </div>
        </div>
        <div class="top-1">
        <h1><span class="bi bi-circle-8">8</span></h1>
        <div class="movies">
        <img src="${data[7].poster_path? IMG_URL+ data[7].poster_path: "http://via.placeholder.com/1080x1580" }" alt="${data[7].title}" id="${data[7].id}">
        <div class="movie-info">
        ${data[7].title}
        <span class="${getColor(data[7].vote_average)}">${data[7].vote_average.toFixed(1)}</span>
        </div>
        </div>
        </div>
        <div class="top-1">
        <h1><span class=bi bi-circle-9">9</span></h1>
        <div class="movies">
        <img src="${data[8].poster_path? IMG_URL+ data[8].poster_path: "http://via.placeholder.com/1080x1580" }" alt="${data[8].title}" id="${data[8].id}">
        <div class="movie-info">
        ${data[8].title}
        <span class="${getColor(data[8].vote_average)}">${data[8].vote_average.toFixed(1)}</span>
        </div>
        </div>
        </div>
        <div class="top-1">
        <h1><span class="bi bi-circle-10">10</span></h1>
        <div class="movies">
        <img src="${data[9].poster_path? IMG_URL+ data[9].poster_path: "http://via.placeholder.com/1080x1580" }" alt="${data[9].title}" id="${data[9].id}">
        <div class="movie-info">
        ${data[9].title}
        <span class="${getColor(data[9].vote_average)}">${data[9].vote_average.toFixed(1)}</span>
        </div>
        </div>
        <br>
        </div>
        </div>
        </div>
        </div>
        `

        top10.appendChild(movieEl);

        document.getElementById(data[0].id).addEventListener('click', () => {
          let id = data[0].id
          console.log(id)
          getMovieDetails(id)
        })
        document.getElementById(data[1].id).addEventListener('click', () => {
          let id = data[1].id
          console.log(id)
          getMovieDetails(id)
        })
        document.getElementById(data[2].id).addEventListener('click', () => {
          let id = data[2].id
          console.log(id) 
          getMovieDetails(id)
        })
        document.getElementById(data[3].id).addEventListener('click', () => {
          let id = data[3].id
          console.log(id)
          getMovieDetails(id)
        })
        document.getElementById(data[4].id).addEventListener('click', () => {
          let id = data[4].id
          console.log(id)
          getMovieDetails(id)
        })
        document.getElementById(data[5].id).addEventListener('click', () => {
          let id = data[5].id
          console.log(id)
          getMovieDetails(id)
        })
        document.getElementById(data[6].id).addEventListener('click', () => {
          let id = data[6].id
          console.log(id)
          getMovieDetails(id)
        })
        document.getElementById(data[7].id).addEventListener('click', () => {
          let id = data[7].id
          console.log(id)
          getMovieDetails(id)
        })
        document.getElementById(data[8].id).addEventListener('click', () => {
          let id = data[8].id
          console.log(id)
          getMovieDetails(id)
        })
        document.getElementById(data[9].id).addEventListener('click', () => {
          let id = data[9].id
          console.log(id)
          getMovieDetails(id)
        })
}




function getColor(vote) {
  if(vote>= 8){
      return 'green'
  }else if(vote >= 5){
      return "orange"
  }else{
      return 'red'
  }
}

const overlayContent = document.getElementById('overlay-content');
/* Open when someone clicks on the span element */
/* Open when someone clicks on the span element */
function getMovieDetails(id) {
  fetch(BASE_URL + '/movie/'+id+'?'+API_KEY + '&append_to_response=videos,credits,similar').then(res => res.json())
  //https://api.themoviedb.org/3/movie/508?api_key=1cf50e6248dc270629e802686245c2c8
  .then(movieData => {
  console.log(movieData);
  showMovieDetails(movieData);
  })
  .catch(error => {
    throw(error);
  })
}


function showMovieDetails(movieData) {
  const {overview, release_date,poster_path,title,original_language,tagline,vote_average,directors,popularity,adult
    ,status, id,genres,name,videos_results,site,videos,credits,vote_count,similar,index} = movieData;
  genres.forEach(genresType);
  document.getElementById("myNav").style.width = "100%";
  const movieE2 = document.createElement('div');
  movieE2.classList.add('movieDetails');
  if (credits.cast.length <= 2){
    console.error("No actor info provided.")
    movieE2.innerHTML=
  `
  <div id="focus">
  <br><br>
  <div class="row">
  <div class="col-6">
  <img class= "img" src ="${poster_path? IMG_URL +poster_path:"http://via.placeholder.com/1080x1580"  }" alt="${title}"> <br>
  </div>
  <div class="col-6">
  <div class="contents">
  <p class="Title">Title:</p><p class="content">${title}</p> 
  <p class="Title">Genre:</p><p class="content">${genres}</</p>
  <p class="Title">Rating / TotalVoteCount :</p><p class="content">${vote_average} /  ${vote_count}</p>
  <p class="Title">Adult :</p><p class="content ${test(adult)}">${response.message}</p> 
  <p class="Title">Language:<p class="content">${original_language}</p>
  <p class="Title">Status: </p> <p class="content">${status} </p>
  <p class="Title">Tagline: </p><p class="content">"${tagline}"</p>
  <p class="Title">Overview: </p><p class="content">${overview} </p>
  <p class="Title">Released Date:  </p><p class="content">${release_date}</p>
  <p class="Title">Actor/Actress:</p><p class="content">No info provided.</p>

  <br>
  <div class="buttons">
  <button class="btn btn-sm" id="${videos}">Play Trailer <br> </button> 
  <button class="btn btn-sm" onClick="closeNav()">Back</button>
  </div>
  </div>
  </div>
  <div class="container">
  <p class="Titles">You may also like... </p>
  <div class="row">
    <div class="col-sm">
    <img class="similarimg" id="${similar.results[0].id}" src="https://image.tmdb.org/t/p/w400/${similar.results[0].backdrop_path}" alt="${similar.results[0].title}">
            <div class="movie-info">
                <h3>${similar.results[0].title}</h3>
                <span class="${getColor(similar.results[0].vote_average)}">${similar.results[0].vote_average.toFixed(1)}</span>
            </div>
    </div>
    <div class="col-sm">
    <img class="similarimg" id="${similar.results[3].id}" src="https://image.tmdb.org/t/p/w400/${similar.results[3].backdrop_path}" alt="${similar.results[3].title}">
            <div class="movie-info">
                <h3>${similar.results[3].title}</h3>
                <span class="${getColor(similar.results[3].vote_average)}">${similar.results[3].vote_average.toFixed(1)}</span>
            </div>
    </div>
    <div class="col-sm">
    <img class="similarimg"  id="${similar.results[5].id}"src="https://image.tmdb.org/t/p/w400/${similar.results[5].backdrop_path}" alt="${similar.results[5].title}">
            <div class="movie-info">
                <h3>${similar.results[5].title}</h3>
                <span class="${getColor(similar.results[5].vote_average)}">${similar.results[5].vote_average.toFixed(1)}</span>
            </div>
    </div>
  </div>
</div>
</div>
  `
  } else
  movieE2.innerHTML=
  `
  <div id="focus">
  <br><br>
  <div class="row">
  <div class="col-6">
  <img class= "img" src ="${poster_path? IMG_URL +poster_path:"http://via.placeholder.com/1080x1580"  }" alt="${title}"> <br>
  </div>
  <div class="col-6">
  <div class="contents">
  <p class="Title">Title:</p><p class="content">${title}</p> 
  <p class="Title">Genre:</p><p class="content">${genres}</</p>
  <p class="Title">Rating / TotalVoteCount :</p><p class="content">${vote_average} /  ${vote_count}</p>
  <p class="Title">Adult :</p><p class="content ${test(adult)}">${response.message}</p> 
  <p class="Title">Language:<p class="content">${original_language}</p>
  <p class="Title">Status: </p> <p class="content">${status} </p>
  <p class="Title">Tagline: </p><p class="content">"${tagline}"</p>
  <p class="Title">Overview: </p><p class="content">${overview} </p>
  <p class="Title">Released Date:  </p><p class="content">${release_date}</p>
  <p class="Title">Actor/Actress:</p>
  <p class="content">1)${credits.cast[0].name} <text id="actas"> act as</text> "${credits.cast[0].character}"
  <p class="content">2)${credits.cast[1].name} <text id="actas"> act as</text> "${credits.cast[1].character}"
  <p class="content">3)${credits.cast[2].name} <text id="actas"> act as</text> "${credits.cast[2].character}" <br>
  <img class="image"src="https://image.tmdb.org/t/p/w200/${credits.cast[0].profile_path}" alt="${credits.cast[0].name}">
  <img class="image"src="https://image.tmdb.org/t/p/w200/${credits.cast[1].profile_path}" alt="${credits.cast[1].name}">
  <img class="image"src="https://image.tmdb.org/t/p/w200/${credits.cast[2].profile_path}" alt="${credits.cast[2].name}">
  </p>
  <br>
  <div class="buttons">
  <button class="btn btn-sm" id="${videos}">Play Trailer <br> </button> 
  <button class="btn btn-sm" onClick="closeNav()">Back</button>
  </div>
  </div>
  </div>
  <div class="container">
  <p class="Titles">You may also like... </p>
  <div class="row">
    <div class="col-sm">
    <img class="similarimg" id="${similar.results[0].id}" src="https://image.tmdb.org/t/p/w400/${similar.results[0].backdrop_path}" alt="${similar.results[0].title}">
            <div class="movie-info">
                <h3>${similar.results[0].title}</h3>
                <span class="${getColor(similar.results[0].vote_average)}">${similar.results[0].vote_average.toFixed(1)}</span>
            </div>
    </div>
    <div class="col-sm">
    <img class="similarimg" id="${similar.results[3].id}" src="https://image.tmdb.org/t/p/w400/${similar.results[3].backdrop_path}" alt="${similar.results[3].title}">
            <div class="movie-info">
                <h3>${similar.results[3].title}</h3>
                <span class="${getColor(similar.results[3].vote_average)}">${similar.results[3].vote_average.toFixed(1)}</span>
            </div>
    </div>
    <div class="col-sm">
    <img class="similarimg"  id="${similar.results[5].id}"src="https://image.tmdb.org/t/p/w400/${similar.results[5].backdrop_path}" alt="${similar.results[5].title}">
            <div class="movie-info">
                <h3>${similar.results[5].title}</h3>
                <span class="${getColor(similar.results[5].vote_average)}">${similar.results[5].vote_average.toFixed(1)}</span>
            </div>
    </div>
  </div>
</div>
</div>
  `
//  <span class="${getColor(data[9].vote_average)}">${data[9].vote_average.toFixed(1)}</span>
  myNav.appendChild(movieE2);
  document.getElementById(videos).addEventListener('click', () => {
    if (videos.results.length == 0 ) {
        console.error('No videos provided.')
        window.alert('Sorry, No trailer videos provided.')
     } else {
    let keys = videos.results[0].key
    console.log(keys)
    playVideo(keys)
      }
    })
  document.getElementById(similar.results[0].id).addEventListener('click', () => {
    let id = similar.results[0].id
    console.log(id)
    getMovieDetailss(id)
    document.getElementById('focus').scrollIntoView();
  })
  document.getElementById(similar.results[3].id).addEventListener('click', () => {
    let id = similar.results[3].id
    console.log(id)
    getMovieDetailss(id)
    document.getElementById('focus').scrollIntoView();
  })
  document.getElementById(similar.results[5].id).addEventListener('click', () => {
    let id = similar.results[5].id
    console.log(id)
    getMovieDetailss(id)
    document.getElementById('focus').scrollIntoView();
  })
}

  /* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
  document.getElementById("myNav").style.width = "0%";
  myNav.innerHTML=`
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <br><br>
  `
}

function genresType( genres, index, arr) {
  arr[index] = genres.name ;
}

function test(adult) {
  if (adult == 'Yes') {
    return { message: '18+'};
  }
  else {
    return {message: 'No'};
  }
}
var response = test();

function playVideo(keys){
  window.open("https://www.youtube.com/embed/"+ keys)
}

function getMovieDetailss(id) {
  fetch(BASE_URL + '/movie/'+id+'?'+API_KEY + '&append_to_response=videos,credits,similar').then(res => res.json())
  //https://api.themoviedb.org/3/movie/508?api_key=1cf50e6248dc270629e802686245c2c8
  .then(movieData => {
  console.log(movieData);
  closeNav();
  showMovieDetails(movieData);
  })
  .catch(error => {
    throw(error);
  })
}