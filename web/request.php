<?php
// Instantiate curl
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, 'http://api.themoviedb.org/3/tv/44217/season/4?api_key=89b34dde0c37056bd3e132c5339bea0f');
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
  $result = curl_exec($curl);
  curl_close($curl);

// Json decode
  $result = json_decode($result);


    echo '<pre>';
    print_r($result->name);
    echo '</pre>';



/*
path : http://image.tmdb.org/t/p/w185//A30ZqEoDbchvE7mCZcSp6TEwB1Q.jpg
echo "Name serie;
      Saison number;
      Episodes name;
      Reseau sociaux (html)"

Nom de la serie : name
image  :backdrop_path ou poster_path
description : overview
popularité : popularity
pays :  origin_country
genres : genres
nombre de saisons : number of season  OK
*/



  /*
  for($i=0; $i<20; $i++)
  {
    echo '<pre>';
    print_r($result->number_of_seasons);
    echo '</pre>';
  };
*/
