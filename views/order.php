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
<form method="POST" action="#">

    <label>Pet Name  <input type="text" name="name" value=""></label><br>
    <label>Pet Color <select name="color">
            <repeat group="{{@colors}}" value="{{@colorOption}}">
                <option value="{{@colorOption}}">{{@colorOption}}</option>

            </repeat>
        </select></label><br>

    <label>Pet Type  <input type="text" name="type" value=""></label><br>
    <button type="submit" name="submit">Submit</button>
</form>
</body>
</html>