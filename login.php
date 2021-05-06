<?php
include("database.php");
session_start();

if(isset($_POST['login-submit'])){
    $email = $_POST['email'];
    $pass = $_POST['password'];


	   $conn_e = "SELECT * FROM user WHERE email='".$email."' AND role='admin'";
    $rel_e =$conn->query($conn_e);
	
   $conn_e1 = "SELECT * FROM user WHERE email='".$email."'";
    $rel_e1 =$conn->query($conn_e1);

    if( empty($email) || empty($pass) ){
            header("Location:login.php?error=All Fields Are Empty");
            exit();
        }
    
    
    else if(mysqli_num_rows($rel_e) > 0){
        while ($row = mysqli_fetch_array($rel_e)) {
            $pass1 = password_verify($pass, $row['pass']);
            if($pass1){
                $_SESSION['firstname'] = $row['firstname'];
				$_SESSION['lastname'] = $row['lastname'];
                $_SESSION['email'] = $email;
                header("Location:admin(home).php?login=successfull&email=$email");
            }
		}
	}
    else if(mysqli_num_rows($rel_e1) > 0){
	    while ($row = mysqli_fetch_array($rel_e1)) {
            $pass1 = password_verify($pass, $row['pass']);
                if($pass1){
                    $_SESSION['firstname'] = $row['firstname'];
				    $_SESSION['lastname'] = $row['lastname'];
                    $_SESSION['email'] = $email;
                    header("Location:home.php?login=successfull&email=$email");         
                }    
            }
        }
	else{
         header("Location:login.php?error=Register first");	
	}
}
		
	 

?>
<html>
<head>
	<meta charset="utf-8">
	<title>login system in php</title>
	<link rel="stylesheet" type="text/css" href="css/register.css" />
	
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
	
</head>
<body>
		<div class="container">
			<div class="row">
				
				<div class="col-md-5 offset-md-4">
					
					<form action="login.php" method="POST">
						
							<h1 class="text-center text-info">LOGIN</h1>
							<div class="form-group">
								<p class="text-center text-danger">
									<?php
										if(isset($_GET['error'])){
											echo $_GET['error'];
										}
									?>
								</p>
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" name="email" class="form-control" placeholder="Enter your email" />
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" name="password" class="form-control" placeholder="Enter password" />
							</div>
							<div class="form-group">
								
									<input type="submit" name="login-submit" 
									class="btn btn-block bg-info" value="Login" />
				
							</div>
							<div class="form-group text-center">
								<p>Not a member ?
									<a href="register.php" class="text-center text-info" >Register
									here</a>
								</p>
							</div>					
					</form>
				</div>
			</div>
		</div>	
</body>
</html>