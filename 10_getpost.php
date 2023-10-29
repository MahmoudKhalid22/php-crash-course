<?php


if(isset($_POST['submit'])){
echo $_POST["name"];
echo $_POST["age"];
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
    <a href=<?php echo $_SERVER['PHP_SELF'];   ?>?name="ali"&age="30">click</a>


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