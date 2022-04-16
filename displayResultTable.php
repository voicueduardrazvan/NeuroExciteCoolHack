<?php
$connect = mysqli_connect('localhost', 'root', '','db_contact');
if($connect != null){
 echo "connected";
}else {
 echo "failed to connect ";
}
 
$sqlQuery = "SELECT * FROM tbl_utilizatori
WHERE Column7 like $query;";
$qry = $connect->query($sqlQuery);
 
echo "<table><tr><th>ID</th><th>course_id</th><th>sec_id</th><th>semester</th><th>year</th><th>grade</th></tr>";
while($row = $qry->fetch_assoc()){
echo "<tr><td>".$row["ID"]."</td><td>".$row["course_id"].$row["sec_id"]."</td><td>".$row["semester"]."</td><td>".$row["year"]."</td><td>".$row["grade"]."</td><td></tr>";
}
 
echo "</table>";
?>