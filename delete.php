<?php
    include "db_connection.php";
    if (isset($_GET['citizen_id'])) {
        // Prepare and execute SQL statement to delete record
        $sql = "DELETE FROM citizen_details WHERE citizen_id = ? ";
        $stmt = $link->prepare($sql);
        $stmt->bind_param("i", $citizen_id);
        $citizen_id = $_GET['citizen_id']; // Assuming 'id' is passed as a parameter in the URL
        $stmt->execute();
    
        if ($stmt->affected_rows > 0) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $link->error;
        }
    
        $stmt->close();
    } else {
        echo "No ID specified";
    }
    
    $link->close();
    ?>
    