<?php 

include('core/init.php');

session_start();

// if user is already logged in, redirect to admin portal
if ( isset( $_SESSION['user'] ) ) {
    header("Location: admin/index.php");
} 

$errors = array();
function display_errors($errors) {
    $display = '<ul>';
    foreach($errors as $error){
        $display .= '<li class="text-danger">'.$error.'</li>';
    }
    $display .='</ul>';
    return $display;
}

function login(){
    header('Location: admin/index.php');
}

?>

<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="colorlib">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>King's Bakery | Log-in</title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
	<!-- CSS ============================================= -->
	<link rel="stylesheet" href="css/linearicons.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
</head>

<body style="background-image: url('img/admin-bg.jpg');">
	
<!-- Login Section -->
<section>
	<div class="container">
		<div class="row fullscreen d-flex justify-content-center align-items-center">
            <div>

            <?php
            
            // if user attempts to access admin portal, banner will appear asking to log in
            if(isset($_GET['unauthorized'])){
                echo '<div class="bg-danger"><p class="text-white text-center">You must log in to access that page.</p></div>';
            }

            if($_POST){
                $username = $_POST['username'];
                $password = md5($_POST['password']);

                //form validation
                if(empty($_POST['username']) || empty($_POST['password'])){
                    $errors[] = 'You must provide a username and password.';
                }

                // password is more than 6 characters
                if(strlen($password) < 6){
                    $errors[] = 'Password must be at least 6 characters.';
                }

                // check if email exists in database
                $query = $conn->query("SELECT * FROM users WHERE username = '$username'");
                $user = mysqli_fetch_assoc($query);
                $userCount = mysqli_num_rows($query);
                if($userCount < 1){
                    $errors[] = 'The username provided cannot be found.';
                }

                // check if password exitst with user
                if($password != $user['password']){
                    $errors[] = 'The password does not match our records. Please try again.';
                }

                //check for errors
                if(!empty($errors)){
                    echo display_errors($errors);
                } else{
                    // session start and log user in
                    $_SESSION['user'] = $username;
                    login();
                }
            }

        ?>

                <form action='login.php' method='post'>  
                    <div class="form-group">
                        <label class="text-white" for="username">User Name</label>
                        <input name='username' type="text" class="form-control" id="username" aria-describedby="usernameHelp" placeholder="Enter User Name">
                        <small id="usernameHelp" class="form-text" style="color: #f9f9f9;">We'll keep your information safe.</small>
                    </div>
                    <div class="form-group">
                        <label class="text-white" for="password">Password</label>
                        <input name='password' type="password" class="form-control" id="password" placeholder="Enter Password">
                    </div>
                    <br>
                    <button type="button" onclick="document.location.href='index.php'" class="btn btn-danger float-left">Cancel</button>
                    <button type="submit" class="btn btn-primary float-right">Log In</button>
                </form>
            </div>
		</div>
	</div>
</section>
<!-- End banner Area -->

			<!-- End footer Area -->	
			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
  		
			<script src="js/main.js"></script>	
		</body>
	</html>
