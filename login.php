<?php include "config.php";
$error="";
if($_SERVER['REQUEST_METHOD']=="POST"){
  $email=$_POST['email'];
  $pass =$_POST['password'];
  $res=$conn->query("SELECT * FROM users WHERE email='$email' LIMIT 1");
  $user=$res->fetch_assoc();
  if($user && password_verify($pass,$user['password'])){
    $_SESSION['user']=$user;
    header("Location: index.php"); exit;
  } else { $error="Invalid credentials"; }
}
?>
<form method="post">
  <h2>Login</h2>
  <div style="color:red;"><?=$error?></div>
  <input type="email" name="email" placeholder="Email" required><br>
  <input type="password" name="password" placeholder="Password" required><br>
  <button type="submit">Login</button>
</form>
