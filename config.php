<?php
session_start();

$host = "localhost";
$user = "root";
$pass = "";
$db   = "icmr_app2_db";

$conn = new mysqli($host,$user,$pass,$db);
if ($conn->connect_error) die("DB Failed: " . $conn->connect_error);
?>
