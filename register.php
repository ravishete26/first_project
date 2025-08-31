<?php include "config.php";

if($_SERVER['REQUEST_METHOD']=="POST"){
  $name  = $_POST['name'];
  $email = $_POST['email'];
  $pass  = password_hash($_POST['password'], PASSWORD_DEFAULT);

  $sql = "INSERT INTO users(name,email,password,role) VALUES('$name','$email','$pass','admin')";
  if($conn->query($sql)){
    echo "Admin created. <a href='login.php'>Login</a>";
  } else {
    echo "Error: ".$conn->error;
  }
}
?>
<form method="post">
  <h2>Create Admin</h2>
  <input type="text" name="name" placeholder="Name" required><br>
  <input type="email" name="email" placeholder="Email" required><br>
  <input type="password" name="password" placeholder="Password" required><br>
  <button type="submit">Register</button>
</form>
