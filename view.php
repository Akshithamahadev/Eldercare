<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Citizen_details</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
       
            <li class="nav-item">
              <a type="button" class="" href=""> </a>

            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container my-4">
    
    <table class="table">
  <thead>
    <tr>
      <th >Citizen_id</th>
      <th >Citizen_name </th>
      <th >Dob</th>
      <th >Gender</th>
      <th >Aadhar_no</th>
      <th >Phone_no</th>
      <th >Address</th>
      
    </tr>
  </thead>
  <tbody>

  <?php
    include "db_connection.php";
    $sql = "select * from citizen_details";
    $result = $link->query($sql);
    if(!$result){
      die("Invalid query!");
    }
    while ($row = $result->fetch_assoc()){
        echo "
      
        <tr>
        <th>$row[citizen_id]</th>
        <td>$row[citizen_name]</td>
        <td>$row[dob]</td>
        <td>$row[gender]</td>
        <td>$row[aadhar_no]</td>
        <td>$row[phone_no]</td>
        <td>$row[address]</td>
        
      </tr>
      ";
        }
        
    ?>
    
  </tbody>
</table>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>

