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
  echo "Connected successfully";

	$name = $_REQUEST['name'];
	$surname = $_REQUEST['surname'];
	$phone = $_REQUEST['phone'];
	$mail = $_REQUEST['mail'];
  $gender = $_REQUEST['gender'];

$sql = "INSERT INTO lectors VALUES (DEFAULT,'$name' , '$surname' , '$phone' , '$mail' , '$gender')";
if($conn->query($sql) === TRUE) {
	echo "record inserted successfully";
} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
}

//Close connection
mysqli_close($conn);
// header('Location: ' . $_SERVER['HTTP_REFERER']);