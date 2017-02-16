<?php

//information about top movies
$details = new view('home/details');

//top actors
$actors = new view('home/actors');

//available rankins
$ranking = new view('home/rankings');

//page
$page_layout = new view('home/page_layout');
$page_layout->details = $details;
$page_layout->actors = $actors;
$page_layout->ranking = $ranking;

//sets the title of the page
presenter::setTitle('Homepage');

//give the layout to the presenter
presenter::present($page_layout);
