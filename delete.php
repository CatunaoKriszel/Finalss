<?php 

include "config.php";

if (isset($_GET['id'])) {
    $user_id = $_GET['id'];

    // SQL query to delete the book record
    $sql = "DELETE FROM `books` WHERE `id`='$user_id'";
    $result = $conn->query($sql);

    if ($result === TRUE) {
        echo "Record deleted successfully!.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    header("Location: view.php?message=Record Deleted Successfully");
exit();

}

?>
	
