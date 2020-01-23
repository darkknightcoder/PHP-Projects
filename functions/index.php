<?php

    require_once('functions.php');

    echo "<p> Welcome to my page </p>";

    // greetings for classroom #2
    // imagine these names come from database

    $names = ["Mahyar", "Arshia", "Mahnaz", "Javad"];

    printName($names);


    primeNumbers( 0, 100);

    $fiboArray = [];
    for ($i=0; $i < 10; $i++) {
        $fiboArray[] = fibonacci($i);
    }

    echo "<h3> Fibonacci numbers are : ";

    foreach ($fiboArray as $num){
        echo "$num";
    }

    echo "</h3>" ;



?>