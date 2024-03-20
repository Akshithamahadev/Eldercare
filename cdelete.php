<?php
    include "db_connection.php";
    if (isset($_GET['caretaker_id'])) {
        // Prepare and execute SQL statement to delete record
        $sql = "DELETE FROM Caretaker WHERE caretaker_id = ? ";
        $stmt = $link->prepare($sql);
        $stmt->bind_param("i", $caretaker_id);
        $caretaker_id = $_GET['caretaker_id']; // Assuming 'id' is passed as a parameter in the URL
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