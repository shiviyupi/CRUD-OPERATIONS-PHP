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
    <h4 class="text-center">CREATE TABLE</h4>
    <div class="container-fluid">
    <form class="form-group" action="action.php" method="POST">
    <div class="row">
    <div class="col-1">
    <label for="#table_name">Table Name</label>
    </div>
    <div class="col-2">
    <input type="text" class="form-inline" id="table_name" name="table_name" placeholder="Enter Table Name Name Here" required>
    </div>
    <div class="col-1">
    <label for="#field1">Field 1</label>
    </div>
    <div class="col-2">
    <input type="text" class="form-inline" id="field1" name="field1" placeholder="Enter First Field Name Here" required>
    </div>
    <div class="col-1">
    <label for="#datatype1">DataType</label>
    </div>
    <div class="col-2">
    <select class="form-inline" name="datatype1" id="datatype1">
    <option value="text">TEXT</option>
    <option value="int">INT</option>
    </select>
    </div>    
    </div>
    <div class="row">
    <div class="col-1">
    <label for="#field2">Field 2</label>
    </div>
    <div class="col-2">
    <input type="text" class="form-inline" id="field2" name="field2" placeholder="Enter Second Field Name Here" required>
    </div>
    <div class="col-1">
    <label for="#datatype2">DataType</label>
    </div>
    <div class="col-2">
    <select class="form-inline" id="datatype2" name="datatype2">
    <option value="text">TEXT</option>
    <option value="int">INT</option>
    </select>
    </div>    
    </div>
    <div class="row">
    <div class="col-4"></div>
    <input class="btn btn-success" type="submit" name="create" value="Create">
    <input class="btn btn-warning" type="reset" name="reset" value="Reset">
    <a class="btn btn-primary" href="edit.php">Update</a>
    <a class="btn btn-danger" href="delete.php">Delete</a>
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