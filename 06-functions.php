<?php

    $x = 12;

    function getX(){
        global $x;
        echo $x . '<br>';
    }

    getX();

    // function getSum(){
    //     return 'no parameters';
    // }

    function getSum($n1 =3, $n2=1){
        return $n1 + $n2 . '<br>';
    }

    echo getSum();


    $subtract = function($num1, $num2){
        return ($num1 - $num2);
    };

    echo $subtract(9,3) . '<br>';

    $mul = fn($num1, $num2) => 
         $num1 * $num2 . '<br>';
    

    echo $mul(5,3);