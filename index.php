<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSS -->
	<link rel="stylesheet" href="/assets/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"> 


	<title>LOGIN</title>
  </head>
  <body>

  <?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>


	<!--form area start-->
	<div class="form">
		<!--login form start-->
		<form class="login-form" action="/include/cek_login.php" method="post">
			<h2>Login</h2>
			<input type="text" name="username" value="" placeholder="Username" autofocus required>
			<input type="password" name="password" value="" placeholder="Password" required>
			<button type="submit" name="login" value="LOGIN">Login</button>
		</form>
		<!--login form end-->
	</div>
	<!--form area end-->

		

</body>
</html>
