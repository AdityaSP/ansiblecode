<?php
 $conn = mysqli_connect("db","demodb","demo","demo");
 if (!$conn) {
	die("Connection failed");
 }
 echo "Connected Successfully";
 $res = mysqli_query($conn, "select * from t1");
 while ($row = mysqli_fetch_assoc($res)){
	echo "<h1> " . $row["name"] . "</h1>";
 }
 echo "Pitching in from " . gethostname();

?>
