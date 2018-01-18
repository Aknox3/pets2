<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once "vendor/autoload.php";

$f3 = Base::instance();

$f3->set('DEBUG', 3);

$f3->route('GET /', function() 
{

    $template = new Template();
    echo $template->render('views/home.html');
});

$f3->route('GET /pets/show/@type', function($f3, $params)
{
    $pictures = [
                    'cat' => 'https://news.nationalgeographic.com/content/dam/news/photos/000/755/75552.ngsversion.1422285553360.adapt.1900.1.jpg',
                    'gazelle' => 'https://www.worldatlas.com/r/w728-h425-c728x425/upload/aa/ec/e9/shutterstock-368215916.jpg'
                ];
    if(!array_key_exists($params['type'], $pictures))
    {
        $f3->error(404);
    }
    else
    {
        $type = $params['type'];
        $f3->set('src', $pictures[$type]);
        $f3->set('alt', $type);
        $template = new Template();
        echo $template->render('views/show_pet.html');
    }
});

$f3->route('GET /pets/order', function()
{
    echo 'Form 1';
    // $template = new Template();
    // echo $template->render('views/form1.html');
});

$f3->route('GET /pets/order2', function()
{
    echo 'Form 2';
    // $template = new Template();
    // echo $template->render('views/form2.html');
});

$f3->route('POST /pets/results', function()
{
    echo 'Results';
    // $template = new Template();
    // echo $template->render('views/results.html');
});

$f3->run();