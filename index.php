<?php include "config.php";
if(!isset($_SESSION['user'])){ header("Location: login.php"); exit; }
?>
<h2>Welcome, <?= $_SESSION['user']['name'] ?></h2>
<a href="students/index.php">Manage Students</a> | 
<a href="logout.php">Logout</a>
