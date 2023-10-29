<?php include "./includes/header.php" ?>

<!DOCTYPE html>
<html lang="en">

    <?php
        $name = $email = $body = '';
        $nameErr = $emailErr = $bodyErr = '';

        // Form Validation
        if(isset($_POST['submit'])){
          // validate the name
          if(empty($_POST['name'])){
            $nameErr = 'Name is required';
          }else{
            $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
          }
          // validate the email
          if(empty($_POST['email'])){
            $emailErr = 'email is required';
          }else{
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
          }
          // validate the body
          if(empty($_POST['body'])){
            $bodyErr = 'body is required';
          }else{
            $body = filter_input(INPUT_POST, 'body', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
          }
          if(empty($nameErr) && empty($emailErr) && empty($bodyErr)){
            $sql = "INSERT INTO feedback (name, email, body) VALUES ('$name', '$email', '$body')";

            if(mysqli_query($conn, $sql)){
              // Success
              header('Location: feedback.php');
            }else{
              // Something wrong
              echo 'Error: ' . mysqli_error($conn);
            }
          }
        }
        ?>

    <img src="/php-crash/feedback/img/logo.png" class="w-25 mb-3" alt="">
    <h2>Feedback</h2>
    <p class="lead text-center">Leave feedback for Traversy Media</p>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="mt-4 w-75">
      <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control <?php echo $nameErr ? 'is-invalid' : null ?>" id="name" name="name" placeholder="Enter your name">
        <div class="invalid-feedback">
          <?php echo $nameErr; ?>
        </div>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control <?php echo $emailErr ? 'is-invalid' : null ?>" id="email" name="email" placeholder="Enter your email">
        <div class="invalid-feedback">
          <?php echo $emailErr; ?>
        </div>
      </div>
      <div class="mb-3">
        <label for="body" class="form-label">Feedback</label>
        <textarea class="form-control <?php echo $bodyErr ? 'is-invalid' : null ?>" id="body" name="body" placeholder="Enter your feedback"></textarea>
        <div class="invalid-feedback">
          <?php echo $bodyErr; ?>
        </div>
      </div>
      <div class="mb-3">
        <input type="submit" name="submit" value="Send" class="btn btn-dark w-100">
      </div>
    </form>


    <?php include "./includes/footer.php" ?>

 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
