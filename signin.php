<?php

include 'connect.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: signin.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: home.php");
	} else {
		echo "<script>alert('Woops! Email Atau Password anda Salah.')</script>";
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
            <div class="form-container sign-in-container">
            <form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">Tidak Punya Akun? <a href="signup.php">Buat Akun</a>.</p>
		</form>
            </div>
            <div class="overlay-container" id="overlayCon">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Bertemu Lagi!</h1>
                        <p>Lakukan login dengan data dirimu untuk informasi
                            terbaru kami</p>
                        <button>Sign In</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Halo, Kawan!</h1>
                        <p>Daftarkan data diri kamu dan mulai journey bersama
                            kami</p>
                        <button>Sign Up</button>
                    </div>
                </div>
                <button id="overlayBtn"></button>
            </div>
        </div>

        <!-- js code -->
        <script>
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
    </script>
    </body>
</html>