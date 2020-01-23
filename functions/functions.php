<?php

// modify the function and print the array information in the UI

function printName(&$names){

    echo "<h3> With for loop </h3>";

    // for loop

    for($i = 0; $i < count($names); $i+=1) {
        $names[$i] = strtolower($names[$i]);
        echo "<p>". $names[$i] ."</p>";
        echo "<hr>";
    }

}


function isPrime($number) {
    if($number < 2) return false;
    for($i = 2; $i < $number; $i++) {
        if( $number % $i == 0 ) {
            return false;
        }
    }
    return true;
}

function primeNumbers ($start, $end) {
    for ($i = $start; $i <= $end; $i++) {
        if (isPrime($i) == true ) {
            echo "<h4> $i is a prime number! </h4>";
        }
    }
}

function fibonacci($number) {
    if ($number == 0 || $number == 1) return $number;
    if ($number == 1) return 1;
    // not 0 and not 1
    return fibonacci($number - 1) + fibonacci($number - 2);
}

?>