//TMDB API
//API Key (fff27caf16baadb8c1e7426e855cff9d)
const API_KEY = 'api_key=1cf50e6248dc270629e802686245c2c8';
//Base URL for TMDb
const BASE_URL = 'https://api.themoviedb.org/3';
//API URL
const API_URL = BASE_URL + '/discover/movie?sort_by=popularity.desc&'+API_KEY;
//Image from TMDB API
const IMG_URL = 'https://image.tmdb.org/t/p/w500';
//Search
const searchURL = BASE_URL + '/search/movie?'+API_KEY;
//TMDb API Genres ID
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

const form =  document.getElementById('form');
const search = document.getElementById('search');
const tagsEl = document.getElementById('tags');

const prev = document.getElementById('prev')
const next = document.getElementById('next')
const current = document.getElementById('current')

var currentPage = 1;
var nextPage = 2;
var prevPage = 3;
var lastUrl = '';
var totalPages = 100;

  var selectedGenre = []
  setGenre();
  function setGenre() {
      tagsEl.innerHTML= '';
      genres.forEach(genre => {
          const t = document.createElement('div');
          t.classList.add('tag');
          t.id=genre.id;
          t.innerText = genre.name;
          t.addEventListener('click', () => {
              if(selectedGenre.length == 0){
                  selectedGenre.push(genre.id);
              }else{
                  if(selectedGenre.includes(genre.id)){
                      selectedGenre.forEach((id, idx) => {
                          if(id == genre.id){
                              selectedGenre.splice(idx, 1);
                          }
                      })
                  }else{
                      selectedGenre.push(genre.id);
                  }
              }
              console.log(selectedGenre)
              getMovies(API_URL + '&with_genres='+encodeURI(selectedGenre.join(',')))
              highlightSelection()
          })
          tagsEl.append(t);
      })
  }
  
  function highlightSelection() {
      const tags = document.querySelectorAll('.tag');
      tags.forEach(tag => {
          tag.classList.remove('highlight')
      })
      clearBtn()
      if(selectedGenre.length !=0){   
          selectedGenre.forEach(id => {
              const hightlightedTag = document.getElementById(id);
              hightlightedTag.classList.add('highlight');
          })
      }
  
  }
  
  function clearBtn(){
      let clearBtn = document.getElementById('clear');
      if(clearBtn){
          clearBtn.classList.add('highlight')
      }else{
  
          let clear = document.createElement('div');
          clear.classList.add('tag','highlight');
          clear.id = 'clear';
          clear.innerText = 'Clear x';
          clear.addEventListener('click', () => {
              selectedGenre = [];
              setGenre();            
              getMovies(API_URL);
          })
          tagsEl.append(clear);
      }
  
  }

getMovies(API_URL);

function getMovies(url) {
    lastUrl = url;
      fetch(url).then(res => res.json()).then(data => {
          console.log(data.results)
          if(data.results.length !== 0){
              showMovies(data.results);
              currentPage = data.page;
              nextPage = currentPage + 1;
              prevPage = currentPage - 1;
              totalPages = data.total_pages;
  
              current.innerText = currentPage;
  
              if(currentPage <= 1){
                prev.classList.add('disabled');
                next.classList.remove('disabled')
              }else if(currentPage>= totalPages){
                prev.classList.remove('disabled');
                next.classList.add('disabled')
              }else{
                prev.classList.remove('disabled');
                next.classList.remove('disabled')
              }
  
              tagsEl.scrollIntoView({behavior : 'smooth'})
  
          }else{
              main.innerHTML= `<h1 class="no-results">No Results Found</h1>`
          }
         
      })
  
  }

prev.addEventListener('click', () => {
    if(prevPage > 0){
      pageCall(prevPage);
    }
  })
  
  next.addEventListener('click', () => {
    if(nextPage <= totalPages){
      pageCall(nextPage);
    }
  })
  
  function pageCall(page){
    let urlSplit = lastUrl.split('?');
    let queryParams = urlSplit[1].split('&');
    let key = queryParams[queryParams.length -1].split('=');
    if(key[0] != 'page'){
      let url = lastUrl + '&page='+page
      getMovies(url);
    }else{
      key[1] = page.toString();
      let a = key.join('=');
      queryParams[queryParams.length -1] = a;
      let b = queryParams.join('&');
      let url = urlSplit[0] +'?'+ b
      getMovies(url);
    }
  } 

function showMovies(data) {
    main.innerHTML = '';

    data.forEach(movie => {
        const {title, poster_path, vote_average, overview, id} = movie;
        const movieEl = document.createElement('div');
        movieEl.classList.add('movie');
        movieEl.innerHTML = `
        <img src="${poster_path? IMG_URL+poster_path: "http://via.placeholder.com/1080x1580" }" alt="${title}">
            <div class="movie-info">
                <h3>${title}</h3>
                <span class="${getColor(vote_average)}">${vote_average}</span>
            </div>
            <div class="overview">
                <h3>Overview</h3>
                ${overview} <br>
                <button class="know-more" id="${id}"> Know More </button>
            </div>
        
        `

        main.appendChild(movieEl);
      
        document.getElementById(id).addEventListener('click', () => {
        console.log(id)
        getMovieDetails(movie);
          
        })
       
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

form.addEventListener('submit', (e) => {
    e.preventDefault();

    const searchTerm = search.value;

    if(searchTerm) {
        getMovies(searchURL+'&query='+searchTerm)
    }else{
        getMovies(API_URL);
    }

}) 

const overlayContent = document.getElementById('overlay-content');
/* Open when someone clicks on the span element */
function getMovieDetails(movie) {
  let id = movie.id;
  fetch(BASE_URL + '/movie/'+id+'?'+API_KEY + '&append_to_response=videos,credits,similar,release_dates').then(res => res.json())
  //https://api.themoviedb.org/3/movie/508?api_key=1cf50e6248dc270629e802686245c2c8
  ///certification/movie/list
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
  ,status, id,genres,name,videos_results,site,videos,credits,vote_count,similar,index,release_dates} = movieData;
  genres.forEach(genresType);
  document.getElementById("myNav").style.width = "100%";
  const movieE2 = document.createElement('div');
  movieE2.classList.add('movieDetails');
  if (credits.cast.length <= 2 ){
    console.error("No actor info provided.")
    window.alert("Info is not completed.")
}
  movieE2.innerHTML = `
  <div id="focus">
  <br><br>
  <div class="row">
  <div class="col-6">
  <img class= "img" src ="${poster_path? IMG_URL +poster_path:"http://via.placeholder.com/1080x1580"  }" alt="${title}"> <br>
  </div>
  <div class="col-6">
  <div class="contents href="#contents"">
  <p class="Title">Title:</p><p class="content">${title}</p> 
  <p class="Title">Genre:</p><p class="content">${genres}</</p>
  <p class="Title">Rating / TotalVoteCount :</p><p class="content">${vote_average} /  ${vote_count}</p>
  <p class="Title">Adult :</p><p class="content ${test(adult)}">${response}</p>
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
  <button class="btn btn-sm  onClick="rateMovies()"> Rate the movie </button>
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
                <span class="${getColor(vote_average)}">${similar.results[0].vote_average.toFixed(1)}</span>
            </div>
    </div>
    <div class="col-sm">
    <img class="similarimg" id="${similar.results[3].id}" src="https://image.tmdb.org/t/p/w400/${similar.results[3].backdrop_path}" alt="${similar.results[3].title}">
            <div class="movie-info">
                <h3>${similar.results[3].title}</h3>
                <span class="${getColor(vote_average)}">${similar.results[3].vote_average.toFixed(1)}</span>
            </div>
    </div>
    <div class="col-sm">
    <img class="similarimg"  id="${similar.results[5].id}"  src="https://image.tmdb.org/t/p/w400/${similar.results[5].backdrop_path}" alt="${similar.results[5].title}">
            <div class="movie-info">
                <h3>${similar.results[5].title}</h3>
                <span class="${getColor(vote_average)}">${similar.results[5].vote_average.toFixed(1)}</span>
            </div>
    </div>
  </div>
</div>
</div>
   `
  myNav.appendChild(movieE2);
  document.getElementById(videos).addEventListener('click', () => {
  let keys = videos.results[0].key
  console.log(keys)
  playVideo(keys)
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


  function getMovieDetailss(id) {
    fetch(BASE_URL + '/movie/'+id+'?'+API_KEY + '&append_to_response=videos,credits,similar,release_dates').then(res => res.json())
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


function genresType( genres, index, arr) {
  arr[index] = genres.name ;
}

/* Close when someone clicks on the "x" symbol inside the overlay */
function closeNav() {
  document.getElementById("myNav").style.width = "0%";
  myNav.innerHTML=`
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <br><br>
  `
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

