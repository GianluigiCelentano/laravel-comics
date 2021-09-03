@extends('base')
<header>
    <div class="container">
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
    </div>
</header>
<body>
    <div class="container">
        <div class="jumbotron"></div>
        <div class="row">
            <div class="col">
                <?php 
                foreach($database as $comic) {
                    // echo $comic["description"] . "<br>";
                    echo "<img class=\"comics\" src=\"{$comic["thumb"]}\">";
                    echo $comic["title"];
                    // echo $comic["price"] . "<br>";
                    // echo $comic["series"] . "<br>";
                    // echo $comic["sale_date"] . "<br>";
                foreach($comic["artists"] as $artist) {
                    // echo $artist . " ";
                }
                };
                ?>
            </div>
        </div>
    </div>
</body>