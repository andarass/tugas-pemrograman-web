<?php

include 'connect.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: signup.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign in and Sign Up</title>
        <!-- font awesome icons -->
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- css stylesheet -->
        <link rel="stylesheet" href="sign_in/signin.css">
    </head>
    <body>

        <div class="container" id="container">
            <div class="form-container sign-up-container">

            </div>
            <div class="form-container sign-in-container">
            <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
			<div class="input-group">
				<input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Register</button>
			</div>
			<p class="login-register-text">Sudah Punya Akun? <a href="index.php">Login Here</a>.</p>
		</form>
            </div>
            <div class="overlay-container" id="overlayCon">
                <div class="overlay">
                    <div class="overlay-panel overlay-right">
                        <h1>Halo, Kawan!</h1>
                        <p>Daftarkan data diri kamu dan mulai journey bersama
                            kami</p>
                    </div>
                </div>
                <button id="overlayBtn"></button>
            </div>
        </div>

        <!-- js code -->
        <!-- <script>
            const container = document.getElementById('container');
            const overlayCon= document.getElementById('overlayCon');
            const overlayBtn = document.getElementById('overlayBtn');

            overlayBtn.addEventListener('click', ()=> {
                container.classList.toggle('right-panel-active');
                
                overlayBtn.classList.remove('btnScaled');
                window.requestAnimationFrame( ()=> {
                    overlayBtn.classList.add('btnScaled');
                })
            });
    </script> -->
    </body>
</html>