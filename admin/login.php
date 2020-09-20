<?php
	@session_start();
	
	include('../Connection/cn.php');
	
	if(isset($_POST['login']))
	{
		$uname=$_POST['uname'];
		$pwd=$_POST['pwd'];
		if($uname=='' || $pwd=='')
		{
			$msg="All Field are Required.";
		}
		else
		{
				$que=mysqli_query($cn,"select *  from admindata where uname='".$uname."' and pwd='".$pwd."'");
				$fet=mysqli_fetch_array($que);
				
				if($fet['uname']==$uname)
				{
					$_SESSION['email']=$uname;

					header('Location: resume.php');
				}
				else
				{
					$msg="Invalid User Name And Password.";
				}
		}
	}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Admin Sign In</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
   

    <!-- Bootstrap Core Css -->
    <link href="../bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../style.css" rel="stylesheet">
</head>

<body class="login-page" style="background-image: url('images/unsplash.jpg');background-repeat: no-repeat;
  background-size: 100% 175%;">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);">Admin Login</a>
            <!-- <small>Admin Panel </small> -->
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" method="POST" action="login.php">
                    <div class="msg"><?php echo @$msg; ?></div>
                    <div class="input-group">
                       
                        <div class="form-line">
                            <input type="text" class="form-control" name="uname" placeholder="Username" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        
                        <div class="form-line">
                            <input type="password" class="form-control" name="pwd" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                         <div class="col-xs-4">
                         </div>
                        <div class="col-xs-4">
                            <input type="submit" class="btn btn-block bg-red waves-effect" value="SIGN IN" name="login">
                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                        <div class="col-xs-6">
                           <!-- <a href="sign-up.html">Register Now!</a>-->
                        </div>
                        <div class="col-xs-6 align-right">
                           <!-- <a href="forgot-password.html">Forgot Password?</a> -->
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/examples/sign-in.js"></script>
</body>

</html>