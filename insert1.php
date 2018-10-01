<?php include 'connect.php';



$sql = "INSERT INTO details (name, phone, email)
VALUES ('John', '23456', 'john@example.com');";
$sql .= "INSERT INTO details (name, phone, email)
VALUES ('Mary', '23456', 'mary@example.com');";
$sql .= "INSERT INTO details (name, phone, email)
VALUES ('Julie', '123456', 'julie@example.com');";
$sql .= "INSERT INTO details (name, phone, email)
VALUES ('kousi', '123456', 'julie@example.com');";
$sql .= "INSERT INTO details (name, phone, email)
VALUES ('moni', '123456', 'julie@example.com');";

if (mysqli_multi_query($conn, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>