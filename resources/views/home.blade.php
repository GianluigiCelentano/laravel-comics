<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('/js/app.js') }}">
    <title>Document</title>
</head>
<header>
    <ul>
        <li>CHARACTERS</li>
        <li>COMICS</li>
        <li>MOVIES</li>
        <li>TV</li>
        <li>GAMES</li>
        <li>COLLECTIBLES</li>
        <li>VIDEOS</li>
        <li>FANS</li>
        <li>NEWS</li>
        <li>SHOP</li>
        <li>SEARCH</li>
    </ul>
</header>
<body>
    <div class="container">
        <div class="jumbotron"></div>
        <?php 
        foreach($database as $comic) {
            echo $comic["title"] . "<br>";
            echo $comic["description"] . "<br>";
            echo "<img src=\"{$comic["thumb"]}\"> <br>";
            echo $comic["price"] . "<br>";
            echo $comic["series"] . "<br>";
            echo $comic["sale_date"] . "<br>";
        foreach($comic["artists"] as $artist) {
            echo $artist . " ";
        }
        echo "<hr>";
        };
        ?>
    </div>
</body>
</html>