<?php

    function myCalculator($num01, $operator, $num02){
        $sum;
        switch ($operator) {
            case "add":
                $sum = $num01 + $num02;
                break;
            case "sub": 
                $sum = $num01 - $num02;
                break;
             case "mult":
                $sum = $num01 * $num02;
                break;
            case "div":
                $sum = $num01/$num02;
                break;
            default:
                $sum = "There was an error !!";
                break;
        }
        return $sum;
    }
    $num01 = $_GET["num01"];
    $operator = $_GET["operator"];
    $num02 = $_GET["num02"];

    echo "Result: " .myCalculator($num01,$operator,$num02);
?>
