<!DOCTYPE html>
<html lang="en">
<?php include "./includes/header.php" ?>
<?php
  $sql = 'SELECT * FROM feedback';
  $result = mysqli_query($conn,$sql);
  $feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
   
    <h2>Past Feedback</h2>


    <?php foreach($feedback as $item): ?>
      <div class="card my-3 w-50">
     <div class="card-body text-center">
      <?php echo $item['body'] ?>
      <div class="text-secondary mt-2">
        By <?php echo $item['name'] ?> <br />On
        <?php echo $item['date'] ?>
      </div>
     </div>
   </div>

    <?php endforeach ?>
<!-- 
    <div class="card my-3">
     <div class="card-body">
       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta molestias animi earum eos dolorem repellat a quibusdam, aperiam vero repellendus voluptatibus natus deserunt sed doloribus inventore, totam labore maxime perferendis!
     </div>
   </div>

   <div class="card my-3">
     <div class="card-body">
       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta molestias animi earum eos dolorem repellat a quibusdam, aperiam vero repellendus voluptatibus natus deserunt sed doloribus inventore, totam labore maxime perferendis!
     </div>
   </div>

   <div class="card my-3">
     <div class="card-body">
       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta molestias animi earum eos dolorem repellat a quibusdam, aperiam vero repellendus voluptatibus natus deserunt sed doloribus inventore, totam labore maxime perferendis!
     </div>
   </div> -->
<?php include "./includes/footer.php" ?>
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>

