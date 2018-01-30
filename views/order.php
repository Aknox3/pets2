<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<check if="{{ @success }}">
    <h2>Thank you for your order of a {{ @type }} </h2>
</check>

<check if="{{ @errors['color'] }}">
    <p>{{ @errors['color'] }} </p>
</check>

<check if="{{ @errors['name'] }}">
    <p>{{ @errors['name'] }} </p>
</check>

<check if="{{ @errors['type'] }}">
    <p>{{ @errors['color'] }} </p>
</check>

<form method="POST" action="#">

    <check if="{{ @errors['name'] }}">
        <p>{{ @errors['name'] }} </p>
    </check>
    <label>Pet Name  <input type="text" name="name" value=""></label><br>
    <check if="{{ @errors['color'] }}">
        <p>{{ @errors['color'] }} </p>
    </check>
    <label>Pet Color <select name="color">
            <repeat group="{{@colors}}" value="{{@colorOption}}">
                <option value="{{@colorOption}}">{{@colorOption}}</option>

            </repeat>
        </select></label><br>

    <check if="{{ @errors['type'] }}">
        <p>{{ @errors['type'] }} </p>
    </check>
    <label>Pet Type  <input type="text" name="type" value="{{@type}}"></label><br>
    <button type="submit" name="submit">Submit</button>
</form>
</body>
</html>