<?php
// Create connection
$conn = new mysqli('localhost', 'root', '','db_contact');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT nume FROM tbl_utilizatori";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> nume: ". $row["nume"]. " - nume: ". $row["nume"]. " " . $row["nume"] . "<br>";
		
		
    }
} else {
    echo "0 results";
}

$conn->close();
return "ASD";
?>