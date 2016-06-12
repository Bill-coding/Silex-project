<?php

require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/../models/viking_model.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints;
$app = new Silex\Application();
 
// Services
  // Twig
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views',
));
  // Url Generator
$app->register(new Silex\Provider\UrlGeneratorServiceProvider());
  // Cache
  $app->register(new Silex\Provider\HttpCacheServiceProvider(), array(
'http_cache.cache_dir' => __DIR__.'/cache/',
));






//models to generate principals functions
$vikingModel = new VikingModel;


// Routes
  //Home
$app->get('/',function() use ($app, $vikingModel) {

    $resultat = $vikingModel->getAll();
    $trailerId = $vikingModel->getTrailer();

    $data = array(
        'name' => $resultat['name'],
        'overview' => $resultat['overview'],
        'popularity' => $resultat['popularity'],
        'genres0' => $resultat['genres0'],
        'genres1' => $resultat['genres1'],
        'origin_country0' => $resultat['origin_country0'],
        'origin_country1' => $resultat['origin_country1'],
        'number_of_seasons' => $resultat['number_of_seasons'],
        'episode_run_time' => $resultat['episode_run_time'],
        'vote_average' => $resultat['vote_average'],
        "trailerId" =>$trailerId['trailerId']

        );
    return $body = $app['twig']->render('pages/home.twig', $data);

    return new Response($body, 200, array('Cache-Control' => 's-maxage=3600, public'));
})
->bind('home');

    // Route Casting
    $app->get('/casting',function() use ($app, $vikingModel) {

        $casting = $vikingModel->getCasting();

        $data = array(
            'character1'=>$casting['character1'],
            'name1'=>$casting['name1'],
            'profile_path1'=>$casting['profile_path1'],
            'character2'=>$casting['character2'],
            'name2'=>$casting['name2'],
            'profile_path2'=>$casting['profile_path2'],
            'character3'=>$casting['character3'],
            'name3'=>$casting['name3'],
            'profile_path3'=>$casting['profile_path3'],
            'character4'=>$casting['character4'],
            'name4'=>$casting['name4'],
            'profile_path4'=>$casting['profile_path4'],
            'character5'=>$casting['character5'],
            'name5'=>$casting['name5'],
            'profile_path5'=>$casting['profile_path5'],
            'character6'=>$casting['character6'],
            'name6'=>$casting['name6'],
            'profile_path6'=>$casting['profile_path6'],
            'character7'=>$casting['character7'],
            'name7'=>$casting['name7'],
            'profile_path7'=>$casting['profile_path7'],


            );

  return $body = $app['twig']->render('pages/casting.twig', $data);
  return new Response($body, 200, array('Cache-Control' => 's-maxage=3600, public'));
    })
    ->bind('casting');
    // Route for Seasons

$app->get('/season/1',function() use ($app, $vikingModel) {

    $resultat = $vikingModel->getAll();
    $s01 = $vikingModel->getSaison1Information();

    $data = array(
        'name' => $resultat['name'],
        'nameEp1'=>$s01['nameEp1'],
        'overviewEp1'=>$s01['overviewEp1'],
        'voteEp1'=>$s01['voteEp1'],
        'pathEp1'=>$s01['pathEp1'],

        'nameEp2'=>$s01['nameEp2'],
        'overviewEp2'=>$s01['overviewEp2'],
        'voteEp2'=>$s01['voteEp2'],
        'pathEp2'=>$s01['pathEp2'],

        'nameEp3'=>$s01['nameEp3'],
        'overviewEp3'=>$s01['overviewEp3'],
        'voteEp3'=>$s01['voteEp3'],
        'pathEp3'=>$s01['pathEp3'],

        'nameEp4'=>$s01['nameEp4'],
        'overviewEp4'=>$s01['overviewEp4'],
        'voteEp4'=>$s01['voteEp4'],
        'pathEp4'=>$s01['pathEp4'],

        'nameEp5'=>$s01['nameEp5'],
        'overviewEp5'=>$s01['overviewEp5'],
        'voteEp5'=>$s01['voteEp5'],
        'pathEp5'=>$s01['pathEp5'],

        'nameEp6'=>$s01['nameEp6'],
        'overviewEp6'=>$s01['overviewEp6'],
        'voteEp6'=>$s01['voteEp6'],
        'pathEp6'=>$s01['pathEp6'],

        'nameEp7'=>$s01['nameEp7'],
        'overviewEp7'=>$s01['overviewEp7'],
        'voteEp7'=>$s01['voteEp7'],
        'pathEp7'=>$s01['pathEp7'],

        'nameEp8'=>$s01['nameEp8'],
        'overviewEp8'=>$s01['overviewEp8'],
        'voteEp8'=>$s01['voteEp8'],
        'pathEp8'=>$s01['pathEp8'],

        'nameEp9'=>$s01['nameEp9'],
        'overviewEp9'=>$s01['overviewEp9'],
        'voteEp9'=>$s01['voteEp9'],
        'pathEp9'=>$s01['pathEp9'],

        );
    return $body = $app['twig']->render('pages/season-1.twig', $data);

    return new Response($body, 200, array('Cache-Control' => 's-maxage=3600, public'));
})
->bind('season/1');
$app->get('/season/2',function() use ($app, $vikingModel) {

    $resultat = $vikingModel->getAll();
    $s02 = $vikingModel->getSaison2Information();
    $data = array(
      'name' => $resultat['name'],
      'S2nameEp1'=>$s02['S2nameEp1'],
      'S2overviewEp1'=>$s02['S2overviewEp1'],
      'S2voteEp1'=>$s02['S2voteEp1'],
      'S2pathEp1'=>$s02['S2pathEp1'],

      'S2nameEp2'=>$s02['S2nameEp2'],
      'S2overviewEp2'=>$s02['S2overviewEp2'],
      'S2voteEp2'=>$s02['S2voteEp2'],
      'S2pathEp2'=>$s02['S2pathEp2'],

      'S2nameEp3'=>$s02['S2nameEp3'],
      'S2overviewEp3'=>$s02['S2overviewEp3'],
      'S2voteEp3'=>$s02['S2voteEp3'],
      'S2pathEp3'=>$s02['S2pathEp3'],

      'S2nameEp4'=>$s02['S2nameEp4'],
      'S2overviewEp4'=>$s02['S2overviewEp4'],
      'S2voteEp4'=>$s02['S2voteEp4'],
      'S2pathEp4'=>$s02['S2pathEp4'],

      'S2nameEp5'=>$s02['S2nameEp5'],
      'S2overviewEp5'=>$s02['S2overviewEp5'],
      'S2voteEp5'=>$s02['S2voteEp5'],
      'S2pathEp5'=>$s02['S2pathEp5'],

      'S2nameEp6'=>$s02['S2nameEp6'],
      'S2overviewEp6'=>$s02['S2overviewEp6'],
      'S2voteEp6'=>$s02['S2voteEp6'],
      'S2pathEp6'=>$s02['S2pathEp6'],

      'S2nameEp7'=>$s02['S2nameEp7'],
      'S2overviewEp7'=>$s02['S2overviewEp7'],
      'S2voteEp7'=>$s02['S2voteEp7'],
      'S2pathEp7'=>$s02['S2pathEp7'],

      'S2nameEp8'=>$s02['S2nameEp8'],
      'S2overviewEp8'=>$s02['S2overviewEp8'],
      'S2voteEp8'=>$s02['S2voteEp8'],
      'S2pathEp8'=>$s02['S2pathEp8'],

      'S2nameEp9'=>$s02['S2nameEp9'],
      'S2overviewEp9'=>$s02['S2overviewEp9'],
      'S2voteEp9'=>$s02['S2voteEp9'],
      'S2pathEp9'=>$s02['S2pathEp9'],

      'S2nameEp10'=>$s02['S2nameEp10'],
      'S2overviewEp10'=>$s02['S2overviewEp10'],
      'S2voteEp10'=>$s02['S2voteEp10'],
      'S2pathEp10'=>$s02['S2pathEp10'],

        );
    return $body = $app['twig']->render('pages/season-2.twig', $data);

    return new Response($body, 200, array('Cache-Control' => 's-maxage=3600, public'));
})
->bind('season/2');
$app->get('/season/3',function() use ($app, $vikingModel) {

    $resultat = $vikingModel->getAll();
    $s03 = $vikingModel->getSaison3Information();

    $data = array(
      'name' => $resultat['name'],
      'S3nameEp1'=>$s03['S3nameEp1'],
      'S3overviewEp1'=>$s03['S3overviewEp1'],
      'S3voteEp1'=>$s03['S3voteEp1'],
      'S3pathEp1'=>$s03['S3pathEp1'],

      'S3nameEp2'=>$s03['S3nameEp2'],
      'S3overviewEp2'=>$s03['S3overviewEp2'],
      'S3voteEp2'=>$s03['S3voteEp2'],
      'S3pathEp2'=>$s03['S3pathEp2'],

      'S3nameEp3'=>$s03['S3nameEp3'],
      'S3overviewEp3'=>$s03['S3overviewEp3'],
      'S3voteEp3'=>$s03['S3voteEp3'],
      'S3pathEp3'=>$s03['S3pathEp3'],

      'S3nameEp4'=>$s03['S3nameEp4'],
      'S3overviewEp4'=>$s03['S3overviewEp4'],
      'S3voteEp4'=>$s03['S3voteEp4'],
      'S3pathEp4'=>$s03['S3pathEp4'],

      'S3nameEp5'=>$s03['S3nameEp5'],
      'S3overviewEp5'=>$s03['S3overviewEp5'],
      'S3voteEp5'=>$s03['S3voteEp5'],
      'S3pathEp5'=>$s03['S3pathEp5'],

      'S3nameEp6'=>$s03['S3nameEp6'],
      'S3overviewEp6'=>$s03['S3overviewEp6'],
      'S3voteEp6'=>$s03['S3voteEp6'],
      'S3pathEp6'=>$s03['S3pathEp6'],

      'S3nameEp7'=>$s03['S3nameEp7'],
      'S3overviewEp7'=>$s03['S3overviewEp7'],
      'S3voteEp7'=>$s03['S3voteEp7'],
      'S3pathEp7'=>$s03['S3pathEp7'],

      'S3nameEp8'=>$s03['S3nameEp8'],
      'S3overviewEp8'=>$s03['S3overviewEp8'],
      'S3voteEp8'=>$s03['S3voteEp8'],
      'S3pathEp8'=>$s03['S3pathEp8'],

      'S3nameEp9'=>$s03['S3nameEp9'],
      'S3overviewEp9'=>$s03['S3overviewEp9'],
      'S3voteEp9'=>$s03['S3voteEp9'],
      'S3pathEp9'=>$s03['S3pathEp9'],

      'S3nameEp10'=>$s03['S3nameEp10'],
      'S3overviewEp10'=>$s03['S3overviewEp10'],
      'S3voteEp10'=>$s03['S3voteEp10'],
      'S3pathEp10'=>$s03['S3pathEp10'],

        );
    return $body = $app['twig']->render('pages/season-3.twig', $data);

    return new Response($body, 200, array('Cache-Control' => 's-maxage=3600, public'));
})
->bind('season/3');
$app->get('/season/4',function() use ($app, $vikingModel) {

    $resultat = $vikingModel->getAll();
    $s04 = $vikingModel->getSaison4Information();

    $data = array(
      'name' => $resultat['name'],
      'S4nameEp1'=>$s04['S4nameEp1'],
      'S4overviewEp1'=>$s04['S4overviewEp1'],
      'S4voteEp1'=>$s04['S4voteEp1'],
      'S4pathEp1'=>$s04['S4pathEp1'],

      'S4nameEp2'=>$s04['S4nameEp2'],
      'S4overviewEp2'=>$s04['S4overviewEp2'],
      'S4voteEp2'=>$s04['S4voteEp2'],
      'S4pathEp2'=>$s04['S4pathEp2'],

      'S4nameEp3'=>$s04['S4nameEp3'],
      'S4overviewEp3'=>$s04['S4overviewEp3'],
      'S4voteEp3'=>$s04['S4voteEp3'],
      'S4pathEp3'=>$s04['S4pathEp3'],

      'S4nameEp4'=>$s04['S4nameEp4'],
      'S4overviewEp4'=>$s04['S4overviewEp4'],
      'S4voteEp4'=>$s04['S4voteEp4'],
      'S4pathEp4'=>$s04['S4pathEp4'],

      'S4nameEp5'=>$s04['S4nameEp5'],
      'S4overviewEp5'=>$s04['S4overviewEp5'],
      'S4voteEp5'=>$s04['S4voteEp5'],
      'S4pathEp5'=>$s04['S4pathEp5'],

      'S4nameEp6'=>$s04['S4nameEp6'],
      'S4overviewEp6'=>$s04['S4overviewEp6'],
      'S4voteEp6'=>$s04['S4voteEp6'],
      'S4pathEp6'=>$s04['S4pathEp6'],

      'S4nameEp7'=>$s04['S4nameEp7'],
      'S4overviewEp7'=>$s04['S4overviewEp7'],
      'S4voteEp7'=>$s04['S4voteEp7'],
      'S4pathEp7'=>$s04['S4pathEp7'],

      'S4nameEp8'=>$s04['S4nameEp8'],
      'S4overviewEp8'=>$s04['S4overviewEp8'],
      'S4voteEp8'=>$s04['S4voteEp8'],
      'S4pathEp8'=>$s04['S4pathEp8'],

      'S4nameEp9'=>$s04['S4nameEp9'],
      'S4overviewEp9'=>$s04['S4overviewEp9'],
      'S4voteEp9'=>$s04['S4voteEp9'],
      'S4pathEp9'=>$s04['S4pathEp9'],

      'S4nameEp10'=>$s04['S4nameEp10'],
      'S4overviewEp10'=>$s04['S4overviewEp10'],
      'S4voteEp10'=>$s04['S4voteEp10'],
      'S4pathEp10'=>$s04['S4pathEp10'],

        );
    return $body = $app['twig']->render('pages/season-4.twig', $data);

    return new Response($body, 200, array('Cache-Control' => 's-maxage=3600, public'));
})
->bind('season/4');




// Fun 404 error page

$app->error(function (\Exception $e, $code) use ($app)
{
    $data = array(
        'title' => 'Error'
    );

    return $app['twig']->render('pages/404.twig',$data);
});


// Cache allowing to run conditions
if ($app['debug']) {
$app->run();
}
else{
$app['http_cache']->run();
}
