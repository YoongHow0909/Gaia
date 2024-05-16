<?php
$cart_id = isset($_GET["cart"])?trim($_GET["cart"]):"";
require_once "db_conn.php";
$conn = mysqli_connect($dbhost, $username, $password, $dbname, $dbport);
$sql = "DELETE FROM cart WHERE cart_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param('s', $cart_id);
$stmt->execute();
if($stmt->affected_rows > 0){
    
}else{
    
}
$stmt->close();
$conn->close();