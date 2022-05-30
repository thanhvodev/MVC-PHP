<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "GYMNASIUM";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
// if ($conn->connect_error) {
//       die("Connection failed: " . $conn->connect_error);
//     }
    
$target = $_POST['data'];

$sql = "SELECT DISTINCT NAME, TYPE FROM PRODUCT WHERE NAME LIKE '%$target%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  echo '<tbody style="width: 100%;">';
  while($row = $result->fetch_assoc()) {
    //   echo "NAME: " . $row["NAME"]. " - TYPE: " . $row["TYPE"]. " - IMAGE: " . $row["IMAGE"] . "<br>";
    echo '<tr style="width: 100%;">';
    // echo '<td><img src="' . $row["IMAGE"] . '" alt="" width="100" height="100"></td>';
    echo '<td style="width: 100%; text-align: left; padding: 15px;">' . $row['NAME'] . '</td>';
    echo '</tr>';
  }
  echo '</tbody';
} else {
  echo "<h5 style='padding: 15px;'>0 results</h5>";
}




$conn->close();



?>