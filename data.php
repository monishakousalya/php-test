<?php  include 'connect.php';


$sql = "SELECT * FROM details";
$result = $conn->query($sql);
if(mysqli_num_rows($result) > 0){
	echo "<h1>DETAILS IN  DATABASE</h2>";
	echo "<table>";
	echo "<tr>";
	echo "<th>NAME</th>";
	echo "<th>PHONE</th>";
	echo "<th>EMAIL</th>";
	echo "</tr>";

//sif ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo "<tr>";
		echo "<td>";
		echo $row["name"];
		
		echo "<td>";
		echo $row["phone"];
		
		echo "<td>";
		echo $row["email"];
		echo "</td>";
        
    }echo"</table>";
}


$sql = "SELECT * FROM details WHERE name = 'julie'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	echo "<h1>SPECIFIC DATA IN  DATABASE</h2>";
	echo "<table>";
	echo "<tr>";
	echo "<th>NAME</th>";
	echo "<th>PHONE</th>";
	echo "<th>EMAIL</th>";
	echo "</tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo "<tr>";
		echo "<td>";
		echo $row["name"];
		
		echo "<td>";
		echo $row["phone"];
		
		echo "<td>";
		echo $row["email"];
		echo "</td>";
	}echo "</table>";
}
   
$conn->close();
?>