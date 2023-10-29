<?php

    $fruits = ['apple', 'orange', 'pear'];

    // Get length
    // echo count($fruits);

    // Search array
    // var_dump(in_array('apple', $fruits));

    // Add to array
    // $fruits[] = 'grape';

    // array_push($fruits, 'blueberry', 'strawberry');
    // array_unshift($fruits, 'mango');
    // array_pop($fruits);
    // array_shift($fruits);
    // unset($fruits[2]);

    // // Split into 2 chunks

    // $chuncked_array = array_chunk($fruits, 2);

    // print_r($fruits);
    // echo "<br>";

    // print_r($chuncked_array);



    // // Concatination arrays 
    // $arr1 = [1,2,3,4];
    // $arr2 = [5,6,7,8];

    // $arr3 = array_merge($arr1,$arr2);
    // $arr4 = [...$arr1, ...$arr2];

    // print_r($arr4);

    // // combine 

    $a = ['green', 'red', 'yellow'];
    $b = ['avocado', 'apple', 'banana'];
    $c = array_combine($a, $b);

    // print_r($c);

    // print_r(array_keys($c));

    $flipped = array_flip($c);


    // print_r($flipped);


    $numbers = range(1,10);

    // print_r($numbers);

    $newNumbers = array_map(function($number){
        return "Number ${number}";
    }, $numbers);

    // print_r($newNumbers);

    $lessThanTen = array_filter($numbers, function($number) {
        return $number < 10;
    });

    // print_r($lessThanTen);

    $sum = array_reduce($numbers, function($carry, $num){
        return $carry + $num;
    });


    // print_r($sum);


