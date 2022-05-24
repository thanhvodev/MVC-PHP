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

$sql = "SELECT DISTINCT NAME, TYPE, IMAGE FROM PRODUCT JOIN PRODUCTIMAGE JOIN PRODUCTCATEGORY ON PRODUCT.ID = PRODUCTIMAGE.ID AND PRODUCT.ID = PRODUCTCATEGORY.ID WHERE NAME LIKE '%$target%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  echo '<tbody style="width=100%;">';
  while($row = $result->fetch_assoc()) {
    //   echo "NAME: " . $row["NAME"]. " - TYPE: " . $row["TYPE"]. " - IMAGE: " . $row["IMAGE"] . "<br>";
    echo '<tr style="margin-top:30px;">';
    echo '<td><img src="' . $row["IMAGE"] . '" alt="" width="100" height="100"></td>';
    echo '<td>' . $row['NAME'] . '</td>';
    echo '</tr>';
  }
  echo '</tbody';
} else {
  echo "0 results";
}




$conn->close();



?>