<?php


function inverse($x){
    if(!$x){
        throw new Exception("Division by 0" . "<br>");
    }

    return 1/$x;
}

try{
    echo inverse(5);
    echo "<br>";
    echo inverse(0);
}catch(Exception $e){
    echo $e->getMessage();
}finally{
    echo "first finally";  // it will be excuted whether the exception thrown or not
}
?>

