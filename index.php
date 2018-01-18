<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);

    require_once "vendor/autoload.php";

    $f3 = Base::instance();

$f3->route('GET /', function() {
    //echo '<h1>This is the Toe Rings page</h1>';
    $template = new Template();
    echo $template->render('views/home.html');
});

    $f3->run();
?>
