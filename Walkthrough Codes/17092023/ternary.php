<?php

    $www = 123;
    $msg = $www > 100 ? "Large" : "Small" ;
    echo "First: $msg \n";
    $msg = ( $www % 2 == 0) ? "Even" : "Odd";
    echo "Second: $msg \n";
    $msg = ( $www % 2) ? "Odd" : "Even";
    echo "Third: $msg \n";



?>