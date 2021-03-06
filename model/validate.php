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
    echo $string . strlen($string);
    if (strlen($string)>0 && ctype_alpha($string))
    {
        echo "true";
        return true;
    }
    echo "false";
    return false;
}

$errors =array();

if (!validColor($color)) {
    $errors['color'] = "Please enter a valid color.";
}

if (!validString($name))
{
    $errors['name'] = "Please enter a valid name.";
}

if (!validString($type))
{
    $errors['type'] = "Please enter a valid type.";
}
print_r($errors);
$success = (sizeof($errors) == 0);