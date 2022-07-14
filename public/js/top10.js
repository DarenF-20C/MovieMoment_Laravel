//API Key (fff27caf16baadb8c1e7426e855cff9d)
const API_KEY = 'api_key=1cf50e6248dc270629e802686245c2c8';
//Base URL for TMDb
const BASE_URL = 'https://api.themoviedb.org/3';
//API URL
const API_URL = BASE_URL + '/discover/movie?sort_by=popularity.desc&'+API_KEY;
//Image from TMDB API
const IMG_URL = 'https://image.tmdb.org/t/p/w500';

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
        var date = d.getDate();
        var month = d.getMonth() + 1; // Since getMonth() returns month from 0-11 not 1-12
        var year = d.getFullYear();
        //NextWeek
        var nextDate = d.getDate() + 7;
        var month = d.getMonth() + 1;
        var year = d.getFullYear();
        var dateStr = date + "/" + month + "/" + year;
        var nextWeek = nextDate + "/" + month + "/" + year;

        movieEl.innerHTML = `
        <h1 class="Title">Top 10 Movies lists from ${dateStr} to  ${nextWeek} </h1>
        <div class="d-flex justify-content-center">
        <div class="top-1">
        <h1><span class="fa fa-crown fa-lg"></span></h1>
        <div class="movies">
        <img src="${data[0].poster_path? IMG_URL+ data[0].poster_path: "http://via.placeholder.com/1080x1580" }" alt="${data[0].title}" onclick="myFunction()" id="${data[0].id}">
        <div class="movie-info">
        ${data[0].title}
        <span class="${getColor(data[0].vote_average)}">${data[0].vote_average.toFixed(1)}</span>
        </div>
        </div>
        </div> 
        </div>

        
        <div class="d-flex justify-content-center">
        <div class="top-1">
        <h1><span class="fa fa-circle-2">2</span></h1>
        <div class="movies">
        <img class="posters"src="${data[1].poster_path? IMG_URL+ data[1].poster_path: "http://via.placeholder.com/1080x1580" }" alt="${data[1].title}">
        <div class="movie-info">
        ${data[1].title}
        <span class="${getColor(data[1].vote_average)}">${data[1].vote_average.toFixed(1)}</span>
        </div>
        </div>
        </div>
        <div class="top-1">
        <h1><span class="fa fa-circle-3">3</span></h1>
        <div class="movies">
        <img src="${data[2].poster_path? IMG_URL+ data[2].poster_path: "http://via.placeholder.com/1080x1580" }" alt="${data[2].title}">
        <div class="movie-info">
        ${data[2].title}
        <span class="${getColor(data[2].vote_average)}">${data[2].vote_average.toFixed(1)}</span>
        </div>
        </div>
        </div>
        </div>

        <div class="d-flex justify-content-center">
        <div class="top-1">
        <h1><span class="fa fa-circle-2">4</span></h1>
        <div class="movies">
        <img src="${data[3].poster_path? IMG_URL+ data[3].poster_path: "http://via.placeholder.com/1080x1580" }" alt="${data[3].title}">
        <div class="movie-info">
        ${data[3].title}
        <span class="${getColor(data[3].vote_average)}">${data[3].vote_average.toFixed(1)}</span>
        </div>
        </div>
        </div>
        <div class="top-1">
        <h1><span class="fa fa-circle-2">5</span></h1>
        <div class="movies">
        <img src="${data[4].poster_path? IMG_URL+ data[4].poster_path: "http://via.placeholder.com/1080x1580" }" alt="${data[4].title}">
        <div class="movie-info">
        ${data[4].title}
        <span class="${getColor(data[4].vote_average)}">${data[4].vote_average.toFixed(1)}</span>
        </div>
        </div>
        </div>
        <div class="top-1">
        <h1><span class="fa fa-circle-2">6</span></h1>
        <div class="movies">
        <img src="${data[5].poster_path? IMG_URL+ data[5].poster_path: "http://via.placeholder.com/1080x1580" }" alt="${data[5].title}">
        <div class="movie-info">
        ${data[5].title}
        <span class="${getColor(data[5].vote_average)}">${data[5].vote_average.toFixed(1)}</span>
        </div>
        </div>
        </div>
        </div>

        <div class="d-flex justify-content-center">
        <div class="top-1">
        <h1><span class="fa fa-circle-2">7</span></h1>
        <div class="movies">
        <img src="${data[6].poster_path? IMG_URL+ data[6].poster_path: "http://via.placeholder.com/1080x1580" }" alt="${data[6].title}">
        <div class="movie-info">
        ${data[6].title}
        <span class="${getColor(data[6].vote_average)}">${data[6].vote_average.toFixed(1)}</span>
        </div>
        </div>
        </div>
        <div class="top-1">
        <h1><span class="fa fa-circle-2">8</span></h1>
        <div class="movies">
        <img src="${data[7].poster_path? IMG_URL+ data[7].poster_path: "http://via.placeholder.com/1080x1580" }" alt="${data[7].title}">
        <div class="movie-info">
        ${data[7].title}
        <span class="${getColor(data[7].vote_average)}">${data[7].vote_average.toFixed(1)}</span>
        </div>
        </div>
        </div>
        <div class="top-1">
        <h1><span class="fa fa-circle-2">9</span></h1>
        <div class="movies">
        <img src="${data[8].poster_path? IMG_URL+ data[8].poster_path: "http://via.placeholder.com/1080x1580" }" alt="${data[8].title}">
        <div class="movie-info">
        ${data[8].title}
        <span class="${getColor(data[8].vote_average)}">${data[8].vote_average.toFixed(1)}</span>
        </div>
        </div>
        </div>
        <div class="top-1">
        <h1><span class="fa fa-circle-2">10</span></h1>
        <div class="movies">
        <img src="${data[9].poster_path? IMG_URL+ data[9].poster_path: "http://via.placeholder.com/1080x1580" }" alt="${data[9].title}">
        <div class="movie-info">
        ${data[9].title}
        <span class="${getColor(data[9].vote_average)}">${data[9].vote_average.toFixed(1)}</span>
        </div>
        </div>
        </div>
        </div>
        `

        myNav.appendChild(movieEl);

        document.getElementById(data[0].id).addEventListener('click', () => {
          console.log(data[0].id)
          myFunction()
            
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

function myFunction(){
   
}
