<?php

    /*
        Sessions are a way to store information (in variables) to be used across multiple pages.
        Unlike cookies. sessions are stored in the server
    */
    session_start();

    if(isset($_POST['submit'])){
        
        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
        
        // $age = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);

        $password = $_POST['password'];

        echo $username;
        echo "<br>";
        echo $password;
        

        if($username == 'Mahmoud' && $password == 'password'){
            $_SESSION['username'] = $username;

            header("Location: /php-crash/extra/dashboard.php");
        }else{
            echo "Incorrect credentials";
        }
        
        
        
        }

        


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
            <label>UserName:</label>
            <input type="text" name="username" />
        </div>
        <div>
            <label>Password:</label>
            <input type="password" name="password" />
        </div>
        <input type="submit" name="submit" />
    </form>
</body>
</html>