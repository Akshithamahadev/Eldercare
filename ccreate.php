<?php
    include "db_connection.php";
    if(isset($_POST['submit'])){
        $caretaker_id = $_POST['caretaker_id'];
        $caretaker_name = $_POST['caretaker_name'];
        $gender = $_POST['gender'];
        $phone_no = $_POST['phone_no'];
        $address = $_POST['address'];
        $citizen_id = $_POST['citizen_id'];

        $q = " INSERT INTO `Caretaker`(`caretaker_id`, `caretaker_name`,`gender`,`phone_no`,`address`,`citizen_id`) 
        VALUES ( '$caretaker_id', '$caretaker_name','$gender','$phone_no','$address','$citizen_id' )";

        $query = mysqli_query($link,$q);
    }
?>
<!DOCTYPE html>
<html>
<head>
 <title>Caretaker</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        
        <div class="collapse navbar-collapse" caretaker_id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="Caretaker.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="ccreate.php"><span style="font-size:larger;">Add New</span></a>
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

 <label> Caretaker_id : </label>
 <input type="text" name="caretaker_id" class="form-control"> <br>

 <label> Caretaker_name : </label>
 <input type="text" name="caretaker_name" class="form-control"> <br>

 <label> Gender: </label>
 <input type="text" name="gender" class="form-control"> <br>

 <label> Phone_no: </label>
 <input type="text" name="phone_no" class="form-control"> <br>

 <label> Address: </label>
 <input type="text" name="address" class="form-control"> <br>

 <label> Citizen_id : </label>
 <input type="text" name="citizen_id" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="submit"> Submit </button><br>
 <a class="btn btn-info" type="submit" name="cancel" href="Caretaker.php"> Cancel </a><br>

 </div>
 </form>
 </div>
</body>
</html>