<?php
// print statements for debugging

// (1) echo - Output strings, numbers, html, etc
// echo 123, 'Hello', 10.5

// (2) print - works like echo, but can only take in a single arguments
// print 123


// (3) print_r() - Print single values and arrays
//  print_r([1,2,3]);


// (4) var_dump() - returns more info like data type and length
// var_dump(true)

// (5) var_export() - Similar to var_dump(). Outputs a string representation of a variable

// var_export("Hello")


// usually useful for debugging
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?= 'test' ?></h1>
</body>
</html>