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
    <h4 class="text-center">UPDATE TABLE</h4>
    <div class="container">
    <form class="form-group" method="POST">
    <div class="row">
    <div class="col-2">
    <label for="#table_view">Select Table</label>
    </div>
    <div class="col-10">
    <select class="form-inline" id="table_view" name="table_view">
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
    <input class="btn btn-primary" type="submit" name="select" value="Select">
    </div>
    <div class="col-4"></div>
    </div>
    </form>
    </div>

<?php

if(isset($_POST['select']))
{
  $table_name = $_POST['table_view'];
  $sql = "SELECT column_name, data_type FROM information_schema.columns WHERE table_name = '".$table_name."'";
  $execute = mysqli_query($conn,$sql);
  $i = 0;
  if($execute)
  {   

?>
<h3 class="text-center">Selected Table is : <?php echo $table_name; ?></h3>
<table class="table table-hover text-center">
  <thead>
    <tr>
      <th scope="col">Column Number</th>
      <th scope="col">Column Name</th>
      <th scope="col">DataType</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
  while($r=mysqli_fetch_row($execute))
  { 
    $i = $i + 1;
  ?>
    <tr>
      <th scope="row"><?php echo $i;?></th>
      <td><?php echo $r[0];?></td>
      <td><?php echo $r[1];?></td>
      <td>
      <form action="action.php" method="POST">
      <input type="hidden" value="<?php echo $table_name?>" name="table_name">
      <input type="hidden" value="<?php echo $r[0]?>" name="column_name">
      <input class="btn btn-danger" type="submit" name="edit" value="Edit">
      </form>
      </td>
    </tr>  
    <?php
  }
    ?>  
  </tbody>
</table>


<?php

  }
  else
  {
    echo 'Unable to select your table';
  }
}

?>    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>