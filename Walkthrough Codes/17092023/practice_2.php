<?php

    $vv = "Hello World!";
    echo "First:" . strpos($vv, "Wo") . "\n";
    echo "Second: " . strpos($vv, "He") . "\n";
    echo "Third: " . strpos($vv, "zz") . "\n";
    if (strpos($vv, "He") == FALSE ) echo "Wrong A\n";
    if (strpos($vv, "ZZ") == FALSE ) echo "Wrong B\n";
    if (strpos($vv, "He") == FALSE ) echo "Wrong C\n";
    if (strpos($vv, "ZZ") == FALSE ) echo "Wrong D\n";
    print_r(FALSE); print FALSE;
    echo "Where were they?\n";

?>