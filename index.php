<?php
$host = "localhost";
$user = "bts";
$pass = "bts";
$db = "btslamp";
 
try {
$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
echo "Connected to Mysql";
} catch(PDOException $e) {
echo "Connection failed: " . $e->getMessage();
}
?>

