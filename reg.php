<?php
	@session_start();
	
	include('Connection/cn.php');
	
	if(isset($_POST['login']))
	{
		$name=$_POST['name'];
        $password=$_POST['password'];
        $contact_no=$_POST['contact_no'];

     $ins="insert into `user_reg` (`name`,`password`,`contact_no`) values ('$name','$password','$contact_no')";
      
        $as=mysqli_query($cn,$ins);

        header('location: login.php');

		
	}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Candidate Sign In </title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
   

    <!-- Bootstrap Core Css -->
    <link href="bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="style.css" rel="stylesheet">
</head>

<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);">Registration Form</a>
            <!-- <small>Admin Panel </small> -->
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" method="POST" action="reg.php">
                    <div class="msg"><?php echo @$msg; ?></div>
                    <div class="input-group">
                       
                        <div class="form-line">
                            <input type="text" class="form-control" name="name" placeholder="User Name" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="input-group">
                        
                        <div class="form-line">
                            <input type="text" class="form-control" name="contact_no" placeholder="Contact Number" required>
                        </div>
                    </div>
                    <div class="row">
                         <div class="col-xs-4">
                         </div>
                        <div class="col-xs-4">
                            <input type="submit" class="btn btn-block bg-red waves-effect" value="Submit" name="login">
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