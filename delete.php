<?php

include './connection.php';

$sql = "SHOW TABLES";
$execute = mysqli_query($conn,$sql);

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>CRUD</title>
  </head>
  <body>
  <h1 class="text-center">CRUD OPERATIONS</h1>
    <h4 class="text-center">DELETE TABLE</h4>
    <div class="container">
    <form class="form-group" action="action.php" method="POST">
    <div class="row">
    <div class="col-2">
    <label for="#table_delete">Select Table</label>
    </div>
    <div class="col-10">
    <select class="form-inline" id="table_delete" name="table_delete">
    <?php
      while($r=mysqli_fetch_row($execute))
      {      
    ?>    
    <option value="<?php echo $r[0];?>"><?php echo $r[0];?></option>
    <?php
      }
    ?>    
    </select>
    </div>
    </div>
    <div class="row">
    <div class="col-4"></div>
    <div class="col-4">
    <input class="btn btn-danger" type="submit" name="delete" value="Delete">
    </div>
    <div class="col-4"></div>
    </div>
    </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>