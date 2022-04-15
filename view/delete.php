<?php

// Create connection
$conn = mysqli_connect('localhost','root', getenv('DATABASEPASSWORD') ?? "", 'Entreconnect');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$id = $_post['id'];
$sql = "delete from product where product_id = '$id'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>