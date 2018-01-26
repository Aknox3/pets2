<?php
/**
 * Created by PhpStorm.
 * User: Ashton Knox
 * Date: 1/26/2018
 * Time: 2:17 PM
 */

/*
 * @param String color
 * @return boolean
 */
function validColor($color)
{
    global $f3;
    return in_array($color, $f3->get('colors'));
}

function validString($string)
{
    return (sizeof($string)>0 && ctype_alpha($string));
}

$errors =array();

if (!validColor($color)) {
    $errors['color'] = "Please enter a valid color.";
}