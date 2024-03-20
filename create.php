<?php
    include "db_connection.php";
    if(isset($_POST['submit'])){
        $citizen_id = $_POST['citizen_id'];
        $citizen_name = $_POST['citizen_name'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
        $aadhar_no = $_POST['aadhar_no'];
        $phone_no = $_POST['phone_no'];
        $address = $_POST['address'];

        $q = " INSERT INTO `citizen_details`(`citizen_id`, `citizen_name`, `dob`,`gender`,`aadhar_no`,`phone_no`,`address`) 
        VALUES ( '$citizen_id', '$citizen_name', '$dob','$gender','$aadhar_no','$phone_no','$address' )";

        $query = mysqli_query($link,$q);
    }
?>
<!DOCTYPE html>
<html>
<head>
 <title>CRUD</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        
        <div class="collapse navbar-collapse" citizen_id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="Citizen_details.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="create.php"><span style="font-size:larger;">Add New</span></a>
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

 <label> Citizen_id : </label>
 <input type="text" name="citizen_id" class="form-control"> <br>

 <label> Citizen_name : </label>
 <input type="text" name="citizen_name" class="form-control"> <br>

 <label> Dob: </label>
 <input type="text" name="dob" class="form-control"> <br>

 <label> Gender: </label>
 <input type="text" name="gender" class="form-control"> <br>

 <label> Aadhar_no: </label>
 <input type="text" name="aadhar_no" class="form-control"> <br>

 <label> Phone_no: </label>
 <input type="text" name="phone_no" class="form-control"> <br>

 <label> Address: </label>
 <input type="text" name="address" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
 <a class="btn btn-info" type="submit" name="cancel" href="citizen_details.php"> Cancel </a><br>

 </div>
 </form>
 </div>
</body>
</html>