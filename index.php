<?php

session_start();

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
$f3->route('GET|POST /new-pet', functions($f3) {

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

$f3->route('GET /pets/order', function($f3)
{
    $template = new Template();
    echo $template->render('views/form1.html');
});

$f3->route('POST /pets/order2', function($f3)
{
    $_SESSION['animal'] = $_POST['animal'];

    print_r($_POST);
    print_r($_SESSION);

    $template = new Template();
    echo $template->render('views/form2.html');
});

$f3->route('GET /pets/results', function($f3)
{
    $_SESSION['color'] = $_POST['color'];

    print_r($_POST);
    print_r($_SESSION);

    $f3->set('animal', $_SESSION['animal']);
    $f3->set('color', $_SESSION['color']);

    $template = new Template();
    echo $template->render('views/results.html');
});

$f3->run();