<?php

class VikingModel {

function getAll()
{
  // Instantiate curl
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, 'http://api.themoviedb.org/3/tv/44217?api_key=89b34dde0c37056bd3e132c5339bea0f');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($curl);
    curl_close($curl);

  // Json decode
    $result = json_decode($result);
$resultat = array(
    "name" => "$result->name",
    "popularity" => "$result->popularity",
    "overview" => "$result->overview",
    "genres0" =>$result->genres[0]->name,
    "genres1" =>$result->genres[1]->name,
    "origin_country0" =>$result->origin_country[0],
    "origin_country1" =>$result->origin_country[1],
    "number_of_seasons" =>$result->number_of_seasons,
    "episode_run_time" =>$result->episode_run_time[0],
      "vote_average" =>$result->vote_average

//    "country" =>"$result->origin_country[0]",

);

return $resultat;
  }

  function getTrailer()
  {
    // Instantiate curl
      $curl = curl_init();
      curl_setopt($curl, CURLOPT_URL, 'http://api.themoviedb.org/3/tv/44217/videos?api_key=89b34dde0c37056bd3e132c5339bea0f');
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
      $trailerId = curl_exec($curl);
      curl_close($curl);

    // Json decode
      $trailerId = json_decode($trailerId);
  $trailerId = array(
      "trailerId" => $trailerId->results[1]->key
    );
    return $trailerId;
  }


  function getCasting()
  {
    // Instantiate curl
      $curl = curl_init();
      curl_setopt($curl, CURLOPT_URL, 'http://api.themoviedb.org/3/tv/44217/season/1/credits?api_key=89b34dde0c37056bd3e132c5339bea0f');
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
      $casting = curl_exec($curl);
      curl_close($curl);

    // Json decode
      $casting = json_decode($casting);

  $casting = array(

      "character1" => $casting->cast[0]->character,
      "name1"=> $casting->cast[0]->name,
      "profile_path1"=> $casting->cast[0]->profile_path,
      "character2" => $casting->cast[1]->character,
      "name2"=> $casting->cast[1]->name,
      "profile_path2"=> $casting->cast[1]->profile_path,
      "character3" => $casting->cast[2]->character,
      "name3"=> $casting->cast[2]->name,
      "profile_path3"=> $casting->cast[2]->profile_path,
      "character4" => $casting->cast[3]->character,
      "name4"=> $casting->cast[3]->name,
      "profile_path4"=> $casting->cast[3]->profile_path,
      "character5" => $casting->cast[4]->character,
      "name5"=> $casting->cast[4]->name,
      "profile_path5"=> $casting->cast[4]->profile_path,
      "character6" => $casting->cast[5]->character,
      "name6"=> $casting->cast[5]->name,
      "profile_path6"=> $casting->cast[5]->profile_path,
      "character7" => $casting->cast[6]->character,
      "name7"=> $casting->cast[6]->name,
      "profile_path7"=> $casting->cast[6]->profile_path,

    );
    return $casting;
  }

  function getSaison1Information()
  {
    // Instantiate curl
      $curl = curl_init();
      curl_setopt($curl, CURLOPT_URL, 'http://api.themoviedb.org/3/tv/44217/season/1?api_key=89b34dde0c37056bd3e132c5339bea0f');
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
      $s01 = curl_exec($curl);
      curl_close($curl);

    // Json decode
      $s01 = json_decode($s01);
  $s01 = array(
      "nameEp1" => $s01->episodes[0]->name,
      "overviewEp1" => $s01->episodes[0]->overview,
      "pathEp1" => $s01->episodes[0]->still_path,
      "voteEp1" => $s01->episodes[0]->vote_average,

      "nameEp2" => $s01->episodes[1]->name,
      "overviewEp2" => $s01->episodes[1]->overview,
      "pathEp2" => $s01->episodes[1]->still_path,
      "voteEp2" => $s01->episodes[1]->vote_average,

      "nameEp3" => $s01->episodes[2]->name,
      "overviewEp3" => $s01->episodes[2]->overview,
      "pathEp3" => $s01->episodes[2]->still_path,
      "voteEp3" => $s01->episodes[2]->vote_average,

      "nameEp4" => $s01->episodes[3]->name,
      "overviewEp4" => $s01->episodes[3]->overview,
      "pathEp4" => $s01->episodes[3]->still_path,
      "voteEp4" => $s01->episodes[3]->vote_average,

      "nameEp5" => $s01->episodes[4]->name,
      "overviewEp5" => $s01->episodes[4]->overview,
      "pathEp5" => $s01->episodes[4]->still_path,
      "voteEp5" => $s01->episodes[4]->vote_average,

      "nameEp6" => $s01->episodes[5]->name,
      "overviewEp6" => $s01->episodes[5]->overview,
      "pathEp6" => $s01->episodes[5]->still_path,
      "voteEp6" => $s01->episodes[5]->vote_average,

      "nameEp7" => $s01->episodes[6]->name,
      "overviewEp7" => $s01->episodes[6]->overview,
      "pathEp7" => $s01->episodes[6]->still_path,
      "voteEp7" => $s01->episodes[6]->vote_average,

      "nameEp8" => $s01->episodes[7]->name,
      "overviewEp8" => $s01->episodes[7]->overview,
      "pathEp8" => $s01->episodes[7]->still_path,
      "voteEp8" => $s01->episodes[7]->vote_average,

      "nameEp9" => $s01->episodes[8]->name,
      "overviewEp9" => $s01->episodes[8]->overview,
      "pathEp9" => $s01->episodes[8]->still_path,
      "voteEp9" => $s01->episodes[8]->vote_average,
    );
    return $s01;
  }
  function getSaison2Information()
  {
    // Instantiate curl
      $curl = curl_init();
      curl_setopt($curl, CURLOPT_URL, 'http://api.themoviedb.org/3/tv/44217/season/2?api_key=89b34dde0c37056bd3e132c5339bea0f');
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
      $s02 = curl_exec($curl);
      curl_close($curl);

    // Json decode
      $s02 = json_decode($s02);
  $s02 = array(
      "S2nameEp1" => $s02->episodes[0]->name,
      "S2overviewEp1" => $s02->episodes[0]->overview,
      "S2pathEp1" => $s02->episodes[0]->still_path,
      "S2voteEp1" => $s02->episodes[0]->vote_average,

      "S2nameEp2" => $s02->episodes[1]->name,
      "S2overviewEp2" => $s02->episodes[1]->overview,
      "S2pathEp2" => $s02->episodes[1]->still_path,
      "S2voteEp2" => $s02->episodes[1]->vote_average,

      "S2nameEp3" => $s02->episodes[2]->name,
      "S2overviewEp3" => $s02->episodes[2]->overview,
      "S2pathEp3" => $s02->episodes[2]->still_path,
      "S2voteEp3" => $s02->episodes[2]->vote_average,

      "S2nameEp4" => $s02->episodes[3]->name,
      "S2overviewEp4" => $s02->episodes[3]->overview,
      "S2pathEp4" => $s02->episodes[3]->still_path,
      "S2voteEp4" => $s02->episodes[3]->vote_average,

      "S2nameEp5" => $s02->episodes[4]->name,
      "S2overviewEp5" => $s02->episodes[4]->overview,
      "S2pathEp5" => $s02->episodes[4]->still_path,
      "S2voteEp5" => $s02->episodes[4]->vote_average,

      "S2nameEp6" => $s02->episodes[5]->name,
      "S2overviewEp6" => $s02->episodes[5]->overview,
      "S2pathEp6" => $s02->episodes[5]->still_path,
      "S2voteEp6" => $s02->episodes[5]->vote_average,

      "S2nameEp7" => $s02->episodes[6]->name,
      "S2overviewEp7" => $s02->episodes[6]->overview,
      "S2pathEp7" => $s02->episodes[6]->still_path,
      "S2voteEp7" => $s02->episodes[6]->vote_average,

      "S2nameEp8" => $s02->episodes[7]->name,
      "S2overviewEp8" => $s02->episodes[7]->overview,
      "S2pathEp8" => $s02->episodes[7]->still_path,
      "S2voteEp8" => $s02->episodes[7]->vote_average,

      "S2nameEp9" => $s02->episodes[8]->name,
      "S2overviewEp9" => $s02->episodes[8]->overview,
      "S2pathEp9" => $s02->episodes[8]->still_path,
      "S2voteEp9" => $s02->episodes[8]->vote_average,

      "S2nameEp10" => $s02->episodes[9]->name,
      "S2overviewEp10" => $s02->episodes[9]->overview,
      "S2pathEp10" => $s02->episodes[9]->still_path,
      "S2voteEp10" => $s02->episodes[9]->vote_average,
    );
    return $s02;
  }
  function getSaison3Information()
  {
    // Instantiate curl
      $curl = curl_init();
      curl_setopt($curl, CURLOPT_URL, 'http://api.themoviedb.org/3/tv/44217/season/3?api_key=89b34dde0c37056bd3e132c5339bea0f');
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
      $s03 = curl_exec($curl);
      curl_close($curl);

    // Json decode
      $s03 = json_decode($s03);
  $s03 = array(
      "S3nameEp1" => $s03->episodes[0]->name,
      "S3overviewEp1" => $s03->episodes[0]->overview,
      "S3pathEp1" => $s03->episodes[0]->still_path,
      "S3voteEp1" => $s03->episodes[0]->vote_average,

      "S3nameEp2" => $s03->episodes[1]->name,
      "S3overviewEp2" => $s03->episodes[1]->overview,
      "S3pathEp2" => $s03->episodes[1]->still_path,
      "S3voteEp2" => $s03->episodes[1]->vote_average,

      "S3nameEp3" => $s03->episodes[2]->name,
      "S3overviewEp3" => $s03->episodes[2]->overview,
      "S3pathEp3" => $s03->episodes[2]->still_path,
      "S3voteEp3" => $s03->episodes[2]->vote_average,

      "S3nameEp4" => $s03->episodes[3]->name,
      "S3overviewEp4" => $s03->episodes[3]->overview,
      "S3pathEp4" => $s03->episodes[3]->still_path,
      "S3voteEp4" => $s03->episodes[3]->vote_average,

      "S3nameEp5" => $s03->episodes[4]->name,
      "S3overviewEp5" => $s03->episodes[4]->overview,
      "S3pathEp5" => $s03->episodes[4]->still_path,
      "S3voteEp5" => $s03->episodes[4]->vote_average,

      "S3nameEp6" => $s03->episodes[5]->name,
      "S3overviewEp6" => $s03->episodes[5]->overview,
      "S3pathEp6" => $s03->episodes[5]->still_path,
      "S3voteEp6" => $s03->episodes[5]->vote_average,

      "S3nameEp7" => $s03->episodes[6]->name,
      "S3overviewEp7" => $s03->episodes[6]->overview,
      "S3pathEp7" => $s03->episodes[6]->still_path,
      "S3voteEp7" => $s03->episodes[6]->vote_average,

      "S3nameEp8" => $s03->episodes[7]->name,
      "S3overviewEp8" => $s03->episodes[7]->overview,
      "S3pathEp8" => $s03->episodes[7]->still_path,
      "S3voteEp8" => $s03->episodes[7]->vote_average,

      "S3nameEp9" => $s03->episodes[8]->name,
      "S3overviewEp9" => $s03->episodes[8]->overview,
      "S3pathEp9" => $s03->episodes[8]->still_path,
      "S3voteEp9" => $s03->episodes[8]->vote_average,

      "S3nameEp10" => $s03->episodes[9]->name,
      "S3overviewEp10" => $s03->episodes[9]->overview,
      "S3pathEp10" => $s03->episodes[9]->still_path,
      "S3voteEp10" => $s03->episodes[9]->vote_average,
    );
    return $s03;
  }

  function getSaison4Information()
  {
    // Instantiate curl
      $curl = curl_init();
      curl_setopt($curl, CURLOPT_URL, 'http://api.themoviedb.org/3/tv/44217/season/4?api_key=89b34dde0c37056bd3e132c5339bea0f');
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
      $s04 = curl_exec($curl);
      curl_close($curl);

    // Json decode
      $s04 = json_decode($s04);
  $s04 = array(
    "S4nameEp1" => $s04->episodes[0]->name,
    "S4overviewEp1" => $s04->episodes[0]->overview,
    "S4pathEp1" => $s04->episodes[0]->still_path,
    "S4voteEp1" => $s04->episodes[0]->vote_average,

    "S4nameEp2" => $s04->episodes[1]->name,
    "S4overviewEp2" => $s04->episodes[1]->overview,
    "S4pathEp2" => $s04->episodes[1]->still_path,
    "S4voteEp2" => $s04->episodes[1]->vote_average,

    "S4nameEp3" => $s04->episodes[2]->name,
    "S4overviewEp3" => $s04->episodes[2]->overview,
    "S4pathEp3" => $s04->episodes[2]->still_path,
    "S4voteEp3" => $s04->episodes[2]->vote_average,

    "S4nameEp4" => $s04->episodes[3]->name,
    "S4overviewEp4" => $s04->episodes[3]->overview,
    "S4pathEp4" => $s04->episodes[3]->still_path,
    "S4voteEp4" => $s04->episodes[3]->vote_average,

    "S4nameEp5" => $s04->episodes[4]->name,
    "S4overviewEp5" => $s04->episodes[4]->overview,
    "S4pathEp5" => $s04->episodes[4]->still_path,
    "S4voteEp5" => $s04->episodes[4]->vote_average,

    "S4nameEp6" => $s04->episodes[5]->name,
    "S4overviewEp6" => $s04->episodes[5]->overview,
    "S4pathEp6" => $s04->episodes[5]->still_path,
    "S4voteEp6" => $s04->episodes[5]->vote_average,

    "S4nameEp7" => $s04->episodes[6]->name,
    "S4overviewEp7" => $s04->episodes[6]->overview,
    "S4pathEp7" => $s04->episodes[6]->still_path,
    "S4voteEp7" => $s04->episodes[6]->vote_average,

    "S4nameEp8" => $s04->episodes[7]->name,
    "S4overviewEp8" => $s04->episodes[7]->overview,
    "S4pathEp8" => $s04->episodes[7]->still_path,
    "S4voteEp8" => $s04->episodes[7]->vote_average,

    "S4nameEp9" => $s04->episodes[8]->name,
    "S4overviewEp9" => $s04->episodes[8]->overview,
    "S4pathEp9" => $s04->episodes[8]->still_path,
    "S4voteEp9" => $s04->episodes[8]->vote_average,

    "S4nameEp10" => $s04->episodes[9]->name,
    "S4overviewEp10" => $s04->episodes[9]->overview,
    "S4pathEp10" => $s04->episodes[9]->still_path,
    "S4voteEp10" => $s04->episodes[9]->vote_average,
    );
    return $s04;
  }


}
