<?php
session_start();
include "db_connection.php";

// Check if the user is not logged in, redirect to login page


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="dstyle.css" />
    <title>Dashboard</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                    class=" "></i>ELDERCARE MANAGEMENT SYSTEM </div>
            <div class="list-group list-group-flush my-3">
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                        class=" "></i>Dashboard</a>
                <a href="Citizen_details.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class=" "></i>Citizen_Details</a>
                <a href="Dependent.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class=" "></i>Dependent_details</a>
                <a href="Caretaker.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class=" "></i>Caretaker_details</a>
                <a href="logout.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

               
            </nav>

            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <p class="fs-5">Total Citizen</p>
                                <?php
                                   $dash_citizen_query = "SELECT * from citizen_details";
                                   $dash_citizen_query_run = mysqli_query($link,$dash_citizen_query);
                                   if($citizen_total = mysqli_num_rows($dash_citizen_query_run))
                                   {
                                     echo '<h4 class="mb-0">'.$citizen_total.'</h4>'; 
                                   }
                                   else
                                   {
                                       echo '<h4 class="mb-0">No data</h4>'; 
                                   }
                                ?>
                                <a href="view.php" class="small-box-footer">More info <i class=""></i></a>
                            </div>
                            <i class=""></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <p class="fs-5">Total Dependents</p>
                                <?php
                                   $dash_dependent_query = "SELECT * from dependent";
                                   $dash_dependent_query_run = mysqli_query($link,$dash_dependent_query);
                                   if($dependent_total = mysqli_num_rows($dash_dependent_query_run))
                                   {
                                     echo '<h4 class="mb-0">'.$dependent_total.'</h4>'; 
                                   }
                                   else
                                   {
                                       echo '<h4 class="mb-0">No data</h4>'; 
                                   }
                                ?>
                                <a href="dview.php" class="small-box-footer">More info <i class=""></i></a>
                            </div>
                            <i
                                class=""></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <p class="fs-5">Total Caretaker</p>
                                <?php
                                   $dash_caretaker_query = "SELECT * from caretaker";
                                   $dash_caretaker_query_run = mysqli_query($link,$dash_caretaker_query);
                                   if($caretaker_total = mysqli_num_rows($dash_caretaker_query_run))
                                   {
                                     echo '<h4 class="mb-0">'.$caretaker_total.'</h4>'; 
                                   }
                                   else
                                   {
                                       echo '<h4 class="mb-0">No data</h4>'; 
                                   }
                                ?>
                                <a href="cview.php" class="small-box-footer">More info <i class=""></i></a>
                            </div>
                            <i class=" "></i>
                        </div>
                    </div>

                    
                            
                        
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
</body>

</html>