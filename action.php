
<?php

include './connection.php';

if(isset($_POST['create']))
{
    $table_name = $_POST['table_name'];
    $field1 = $_POST['field1'];
    $datatype1 = $_POST['datatype1'];
    $field2 = $_POST['field2'];
    $datatype2 = $_POST['datatype2'];

    $sql = "CREATE TABLE `".$table_name."` ( `".$field1."` ".$datatype1." NOT NULL , `".$field2."` ".$datatype2." NOT NULL )";
    $execute = mysqli_query($conn, $sql);
    if($execute)
    {
        echo 'Table Created';
    }
    else
    {
        echo 'Table Not Created';
    }
}


if(isset($_POST['delete']))
{
    $table_name = $_POST['table_delete'];    

    $sql = "DROP TABLE `".$table_name."`";
    $execute = mysqli_query($conn, $sql);
    if($execute)
    {
        echo 'Table Deleted';
    }
    else
    {
        echo 'Table Not Deleted';
    }
}


if(isset($_POST['edit']))
{
    $table_name = $_POST['table_name'];    
    $column_name = $_POST['column_name'];

    $sql = "SELECT column_name, data_type FROM information_schema.columns
     WHERE table_name = '".$table_name."' AND column_name = '".$column_name."'";
    $execute = mysqli_query($conn, $sql);
    if($execute)
    {       
        $row=mysqli_fetch_row($execute);
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
    <h4 class="text-center">Edit Column : <?php echo $column_name;?></h4>
    <div class="container">
    <form class="form-group" method="POST">
    <div class="row">
    <div class="col-3">
    <label for="#new_field">New Name</label>
    </div>
    <div class="col-3">
    <input type="text" class="form-inline" id="new_field" name="new_field" value="<?php echo $row[0];?>" placeholder="Enter New Field Name Here" required>
    </div>
    <div class="col-3">
    <label for="#new_datatype"> New DataType</label>
    </div>
    <div class="col-3">
    <select class="form-inline" id="new_datatype" name="new_datatype">
    <option value="text">TEXT</option>
    <option value="int">INT</option>
    </select>
    </div>
    </div>
    <div class="row">
    <div class="col-2"></div>
    <div class="col-4">
    <input type="hidden" value="<?php echo $table_name?>" name="tab_name">
    <input type="hidden" value="<?php echo $column_name?>" name="col_name">
    <input class="btn btn-success" type="submit" name="change" value="Change">
    </div>
    <div class="col-4">
    <input class="btn btn-danger" type="reset" name="reset" value="Reset">
    </div>
    <div class="col-2"></div>
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






<?php

    }
    else
    {
        echo 'Unable To Edit Column';
    }
}





if(isset($_POST['change']))
{
    $tab_name = $_POST['tab_name'];
    $col_name = $_POST['col_name'];
    $new_field = $_POST['new_field'];
    $new_datatype = $_POST['new_datatype'];

    $sql = "ALTER TABLE `".$tab_name."` CHANGE `".$col_name."` `".$new_field."` ".$new_datatype." NOT NULL";
    $execute = mysqli_query($conn, $sql);
    if($execute)
    {
        echo 'Table Altered';
    }
    else
    {
        echo 'Table Not Altered';
    }

    }
?>