<?php


if(isset($_POST['submit'])){
// echo $_POST["name"];

// echo $_POST["age"];

// $name = htmlspecialchars($_POST['name']);

$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);

$age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS);


// $name = filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);


}
// echo $_GET["name"];
// echo $_GET["age"];

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <div>
            <label>Name</label>
            <input type="text" name="name" />
        </div>
        <div>
            <label>age</label>
            <input type="number" name="age" />
        </div>
        <input type="submit" name="submit" />
    </form>
</body>
</html>