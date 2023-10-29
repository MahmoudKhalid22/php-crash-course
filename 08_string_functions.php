<?php

    $string = 'Hello, World!';

    // Get str length
    echo strlen($string) . '<br>';

    // find the position of the first occurrence of a substring in a string
    echo strpos($string, 'e') . '<br>';
    // find the position of the last occurrence of a substring in a string
    echo strrpos($string, 'l') . '<br>';


    // Reverse a string
    echo strrev($string) . '<br>';


    //  Convert all chars to lowercase

    echo strtolower($string) . '<br>';

    // Convert to uppercase

    echo strtoupper($string) . '<br>';
    //  uppercase the first char of each word

    echo ucwords($string) . '<br>';

    // string replace

    echo str_replace('World', 'Everyone', $string) . '<br>';

    // Return portion of a string specified by the offset and length

    echo substr($string, 0, 5) . '<br>';
    echo substr($string,5) . '<br>';
    

    // Starts with
    if(str_starts_with($string, 'Hello')){
        echo 'Yes' . '<br>';
    }



    // Ends with
    if (str_ends_with($string, 'ld!')){
        echo "YES" . '<br>';
    }



    $string2 = '<script>alert(1)</script>';

    echo htmlspecialchars($string2) . '<br>';


    printf("%s","my name is mahmoud") . '<br>';