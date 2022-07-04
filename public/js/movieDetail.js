//TMDB API

//API Key (fff27caf16baadb8c1e7426e855cff9d)
const API_KEY = 'api_key=1cf50e6248dc270629e802686245c2c8';
//Base URL for TMDb
const BASE_URL = 'https://api.themoviedb.org/3';
//API URL
const movieURL = BASE_URL + '/movie/movie?'+API_KEY;
//Image from TMDB API
const IMG_URL = 'https://image.tmdb.org/t/p/w500';

const main = document.getElementById('main');
const form =  document.getElementById('form');
const search = document.getElementById('search');
const tagsEl = document.getElementById('tags');

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

  function showMovies(data) {
    main.innerHTML = '';

    data.forEach(movie => {
        const {title, poster_path, vote_average, overview} = movie;
        const movieEl = document.createElement('div');
        movieEl.classList.add('movie');
        movieEl.innerHTML = `
        <img onClick="showMovieDetails()"src="${poster_path? IMG_URL+poster_path: "http://via.placeholder.com/1080x1580" }" alt="${title}">
            <div class="movie-info">
                <h3>${title}</h3>
                <span class="${getColor(vote_average)}">${vote_average}</span>
            </div>
            <div class="overview">
                <h3>Overview</h3>
                ${overview}
            </div>
        
        `

        main.appendChild(movieEl);
    })
}