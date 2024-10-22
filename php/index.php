<?php

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: ../welcome.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: ../welcome.php");
	} else {
		echo "<script>alert('Email Atau Password anda Salah.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <link rel="stylesheet" type="text/css" href="../css/style-login.css">
    <title>MENTAL HEALTHNESS</title>
</head>
<body>
    <img src="../img/logo.png" class="image" />
    
    <div class="container">
      <div class="forms">
        <div class="form login">
          <h1></h1>
          <?php if( isset($error) ) :?>
      <p style="color: red; font-style: italic;">username/password salah</p>
      <?php endif; ?>
          <span class="title"><img src="../img/profil.svg" class="img" /></span>
          <form action="" method="POST">
            <div class="input-txt">
              <input name="username" type="text" placeholder="USERNAME" required />
              <i class="uil uil-user"></i>
            </div>
            <div class="input-txt">
              <input name="password" type="password" placeholder="PASSWORD" required />
              <i class="uil uil-lock"></i>
            </div>
            <a href="#">forgot password?</a>
            <div class="input-btn">
              <a href="register.php">Sign Up</a>
              <input type="submit" value="Login" name="submit" />
            </div>
          </form>
        </div>
      </div>
    </div>
</body>
</html>