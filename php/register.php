<?php

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$password1 = md5($_POST['password1']);

	if ($password == $password1) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Data berhasil ditambahkan. Silahkan Login.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['password1'] = "";
			} else {
				echo "<script>alert('Silahkan coba lagi.')</script>";
			}
		} else {
			echo "<script>alert('Email sudah terdaftar.')</script>";
		}

	} else {
		echo "<script>alert('Password tidak sama.')</script>";
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>MENTAL HEALTHNESS</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<link rel="stylesheet" type="text/css" href="../css/style-regis.css" />
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />

</head>
  <body>
    <img src="../img/logo.png" class="images" />
    <img src="../img/medicine.png" class="image" />
    <div class="container">
      <div class="forms">
        <div class="form login">
          <h1></h1>
          <span class="title"><img src="../img/profil.svg" class="img" /></span>
          <form action="" method="POST">
            <div class="input-txt">
              <input name="username" type="text" placeholder="USERNAME" required />
              <i class="uil uil-user"></i>
            </div>
            <div class="input-txt">
              <input name="email" type="email" placeholder="E-MAIL" required />
              <i class="uil uil-envelope"></i>
            </div>
            <div class="input-txt">
              <input name="password" type="password" placeholder="PASSWORD" required />
              <i class="uil uil-lock"></i>
            </div>
            <div class="input-txt">
              <input name="password1" type="password" placeholder="REPEAT PASSWORD" required />
              <i class="uil uil-lock"></i>
            </div>
            <div class="input-btn">
              <input type="submit" value="Sign Up" name="submit"/>
            </div>
          </form>
          <br />
          <p>Already have an account? <a href="index.php">Login here.</a></p>
        </div>
      </div>
    </div>
  </body>
</html>