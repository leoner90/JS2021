<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "university";
// Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully<br>";

$faculty = $_REQUEST['faculty'];
$sql = "SELECT DISTINCT s.Name  FROM student s INNER JOIN  faculty f 
ON 	s.Id_Faculty = f.Id_Faculty WHERE f.Name like '$faculty'  ";

$result = $conn->query($sql);
if($result !== false && $result->num_rows > 0) {
  while($row = $result->fetch_assoc()){
    echo $row["Name"] ."<br>";
  }
} else {
		echo "0 result";
}

//Close connection
$conn->close();
// header('Location: ' . $_SERVER['HTTP_REFERER']);