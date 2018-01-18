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
                    'cat' => 'http://www.catster.com/wp-content/uploads/2017/08/A-fluffy-cat-looking-funny-surprised-or-concerned.jpg',
                    'gazelle' => 'https://www.worldatlas.com/r/w728-h425-c728x425/upload/aa/ec/e9/shutterstock-368215916.jpg'
                ];
    if(!in_array($params['type'], $pictures))
    {
        $f3->error(404);
    }
    else
    {
        $type = $params['type'];
        $f3->set('type', $pictures[type]);
        $f3->set('alt', $type);
        $template = new Template();
        $template->render('views/show_pet.html');
    }
});

$f3->run();