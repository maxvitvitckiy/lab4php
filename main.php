<?php

echo '<html>
        <head>
            <title>Main</title>
        </head>';

echo '<h1>ТІ-91 Витвицький М.А.</h1><hr>';

$topics = ["Arrays" => "arrays.php", "Classes" => "classes.php"]; 

    
if(isset($_GET["topic"])) {
    $page = $_GET["topic"];
    require $topics[$page];
    echo "<br><hr><a href='main.php'>Return to the menu</a>";
}

else {
    foreach ($topics as $topic=>$value) {
         echo "<li><a href='?topic=$topic'>", $topic, "</a></li>";
    }
}

echo '<br><hr>';

echo '<form action="index.php">
    <button type="submit">Logout</button>
    </form>';