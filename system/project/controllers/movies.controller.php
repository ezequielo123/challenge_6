<?php
$movie_id = request::get('imdb_id');
//information about movie
$movie_list = new view('movies/details');
$movie_list->movies = Movies_Model::getMovies();

//movie actors
$actors = new view('movies/actors');

//page
$page_layout = new view('movies/page_layout');
$page_layout->movie_list = $movie_list;
$page_layout->actors = $actors;

//sets the title of the page
presenter::setTitle('Movies');

//give the layout to the presenter
presenter::present($page_layout);
