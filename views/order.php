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

<form method="POST" action="#">

    <check if="{{ !@success && @submitted }}">
        <repeat group="{{@errors}}" value="{{@error}}">
            <p>{{ @error }} </p>
        </repeat>
    </check>
    <check if="{{ isset(@errors['color']) }}">
        <p>{{ @errors['color'] }} </p>
    </check>

    <check if="{{ isset(@errors['name']) }}">
        <p>{{ @errors['name'] }} </p>
    </check>

    <check if="{{ isset(@errors['type']) }}">
        <p>{{ @errors['type'] }} </p>
    </check>

    <label>Pet Name  <input type="text" name="name" value="{{ @name }}"></label><br>

    <label>Pet Color <select name="color" value="{{ @color }}">
            <option>--Select--</option>
            <repeat group="{{@colors}}" value="{{@colorOption}}">
                <option value="{{@colorOption}}">{{@colorOption}}</option>

            </repeat>
        </select></label><br>


    <label>Pet Type  <input type="text" name="type" value="{{@type}}"></label><br>
    <button type="submit" name="submit">Submit</button>
</form>
</body>
</html>