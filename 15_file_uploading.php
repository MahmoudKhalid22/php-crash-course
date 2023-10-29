<?php

    if(isset($_POST['submit'])){
        $allowed_ext = ['png', 'jpg', 'jpeg'];

        if(!empty($_FILES['upload']['name'])){
            // $file_uploaded = $_POST['upload'];
            // echo $file_uploaded;
            
            $fileName = $_FILES['upload']['name'];
            $filesize = $_FILES['upload']['size'];
            $file_tmp = $_FILES['upload']['tmp_name'];
            $target_dir = "uploads/${fileName}";
            
        // Get the file extension

            $file_ext = explode(".", $fileName);
            $file_ext = strtolower(end($file_ext));

        

        // Validate the file extension

            if(in_array($file_ext, $allowed_ext)){
                if($filesize < 1000000){
                    $message = '<p style="color: blue;">file uploaded successfully</p>';
                    move_uploaded_file($file_tmp, $target_dir);
                }else{
                    $message = '<p style="color: red;">file is too large </p>';
                }
            }else{
                $message = '<p style="color: red;">Please Choose a right file extension </p>';
            }

        }
        else{
            $message = '<p style="color: red;">Please Choose a file </p>';
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File upload</title>
</head>
<body>
    <?php echo $message ?? null; ?>
  
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
        Select image to upload: 
          
        <input type="file" name="upload"  />
        <input type="submit" value="submit" name="submit" />
</form>
</body>
</html>