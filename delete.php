<?php include 'connect.php';


// sql to delete a record
$sql = "DELETE FROM details WHERE email = 'mary@example.com'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>