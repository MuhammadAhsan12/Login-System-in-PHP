<?php
    session_start();

    include("./connect/connection.php");
	include("./connect/login.php");
	include("./connect/user.php");

    // print_r($_SESSION);

    if(isset($_SESSION['userid']) && is_numeric($_SESSION['userid'])){
        $id = $_SESSION['userid'];
        $login = new Login();
        $result = $login->check_login($id);

        if($result){
            $user = new User();
            $user_data = $user->get_data($id);
            if(!$user_data){
                header("location: login.php");
			    die;
            }
        }else{
            header("location: login.php");
			die;
        }
    }else{
        header("location: login.php");
		die;
    }
    // print_r($user_data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wellcome</title>
</head>
<body>
    <div style="text-align: center;">
        <h1>wellcome <?php echo $user_data['first_name'] . " " . $user_data['last_name'] ?></h1>
        <h1>User Id : <?php echo $user_data['userid'] ?></h1>
        <h1>gmail : <?php echo $user_data['email'] ?></h1>
        <h1>phone : <?php echo $user_data['phone'] ?></h1>
        <a href="logout.php">
            <button" style="background-color: red; padding: 20px; cursor: pointer" >Logout</button>
        </a>
    </div>
</body>
</html>