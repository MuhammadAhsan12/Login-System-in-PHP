<?php

include("./connect/connection.php");
include("./connect/signup.php");


$first_name = "";
$last_name = "";
$email = "";
$phone = "";
$password = "";
$password2 = "";



?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
	<title>Signup Page</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="./css/signup.css?v=<?php echo time(); ?>">
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Sign Up</h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>				
				<?php
				if($_SERVER['REQUEST_METHOD'] == 'POST'){

					$signup = new Signup();
					$result = $signup->evaluate($_POST);
				
					if($result != ""){
						echo "<div style='color:red; text-align:center; font-size:15px;'>";
						// echo "the following error occured: <br><br>";
						echo $result;
						echo "</div>";
					}else{
						header("location: login.php");
						die;
					}
					$first_name = $_POST['first_name'];
					$last_name = $_POST['last_name'];
					$email = $_POST['email'];
					$phone = $_POST['phone'];
				}
				?>
			</div>
			<div class="card-body">
                <form method="post" action="">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input value="<?php echo $first_name ?>" name="first_name" type="text" class="form-control" placeholder="firstname">
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input value="<?php echo $last_name; ?>" name="last_name" type="text" class="form-control" placeholder="lastname">
					</div>

                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-envelope"></i></span>
						</div>
                        <input value="<?php echo $email ?>" name="email" type="email" class="form-control" placeholder="Email Address">
					</div>

                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-phone-square"></i></span>
						</div>
                        <input value="<?php echo $phone ?>" name="phone" type="tel" class="form-control" placeholder="Phone Number">
					</div>
                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input name="password" type="password" class="form-control" placeholder="password">
					</div>
                    
                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input name="password2" type="password" class="form-control" placeholder="retype password">
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div>
					<div class="form-group">
						<input type="submit" value="signup" class="btn float-right login_btn">
					</div>
				</form>
			</div>

			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					already have an account?<a href="./login.php">log in</a>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>