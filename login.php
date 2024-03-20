<?php 
session_start(); 
include "db_connection.php";

if (isset($_POST['username']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$username = validate($_POST['username']);
	$password = validate($_POST['password']);

	if (empty($Admin_name)) {
		header("Location: index.php?error=Admin Name is required");
	    exit();
	}else if(empty($Admin_passwd)){
        header("Location: index.php?error=Password is required");
	    exit();
	}else{
        
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $Admin_name = $_POST['username'];
            $Admin_passwd = $_POST['password'];
        
            $Admin_name = mysqli_real_escape_string($conn, $username);
            $Admin_passwd = mysqli_real_escape_string($conn, $password);
    
            $query = "SELECT * FROM admin WHERE username = '$usersame' AND password = '$password'";
        
            $result = mysqli_query($conn, $query);
        
            if (mysqli_num_rows($result) == 1) {
                header("Location:dashboard.php");
                exit();
            } else {
                header("Location: index.php?error=Incorrect Admin name or password");
		        exit();
            }
        
            mysqli_free_result($result);
        }
        
	}
	
}else{
	header("Location: index.php");
	
	exit();
}
?>