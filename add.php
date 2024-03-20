<?php
    include "db_connection.php";
    if(isset($_POST['submit'])){
        $dependent_id = $_POST['dependent_id'];
        $dependent_name = $_POST['dependent_name'];
        $relationship = $_POST['relationship'];
        $phone_no = $_POST['phone_no'];
        $address = $_POST['address'];
        $citizen_id = $_POST['citizen_id'];

        $q = " INSERT INTO `Dependent`(`dependent_id`, `dependent_name`,`relationship`,`phone_no`,`address`,`citizen_id`) 
        VALUES ( '$dependent_id', '$dependent_name','$relationship','$phone_no','$address','$citizen_id' )";

        $query = mysqli_query($link,$q);
    }
?>
<!DOCTYPE html>
<html>
<head>
 <title>Dependent</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        
        <div class="collapse navbar-collapse" dependent_id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="Dependent.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="add.php"><span style="font-size:larger;">Add New</span></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
 <div class="col-lg-6 m-auto">
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-primary">
 <h1 class="text-white text-center">  Create New Member </h1>
 </div><br>

 <label> Dependent_id : </label>
 <input type="text" name="dependent_id" class="form-control"> <br>

 <label> Dependent_name : </label>
 <input type="text" name="dependent_name" class="form-control"> <br>

 <label> Relationship: </label>
 <input type="text" name="relationship" class="form-control"> <br>

 <label> Phone_no: </label>
 <input type="text" name="phone_no" class="form-control"> <br>

 <label> Address: </label>
 <input type="text" name="address" class="form-control"> <br>

 <label> Citizen_id : </label>
 <input type="text" name="citizen_id" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
 <a class="btn btn-info" type="submit" name="cancel" href="Dependent.php"> Cancel </a><br>

 </div>
 </form>
 </div>
</body>
</html>