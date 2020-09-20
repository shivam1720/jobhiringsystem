<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if($_SESSION['email'])
{
	include('../Connection/cn.php');


// Load Composer's autoloader
require '../vendor/autoload.php';
	
	   if(isset($_POST['submit']))
       {
            $whatDo=implode(',',$_POST['whatDo']);
            $exp=$_POST['exp'];


            $count=count($_POST['whatDo']);

            if($count==1)
            {
            //echo "select * from registration where 'languages'='$lang' and `experience`='$exp'"; exit;
            $s=mysqli_query($cn,"SELECT * FROM `registration` where experience='$exp' and whatDo like '%$whatDo%'  ");
             $s1=mysqli_query($cn,"SELECT * FROM `registration` where experience='$exp' and whatDo like '%$whatDo%'  ");

            }
            if($count==2)
            {
               $a1=$_POST['whatDo'][0];
               $a2=$_POST['whatDo'][1];

                $s=mysqli_query($cn,"SELECT * FROM `registration` where experience='$exp' and whatDo like '%$a1%'  or whatDo like '%$a2%' ");
                 $s1=mysqli_query($cn,"SELECT * FROM `registration` where experience='$exp' and whatDo like '%$a1%'  or whatDo like '%$a2%' ");
            }
             if($count==3)
            {
               $a1=$_POST['whatDo'][0];
               $a2=$_POST['whatDo'][1];
               $a3=$_POST['whatDo'][2];
               
                $s=mysqli_query($cn,"SELECT * FROM `registration` where experience='$exp' and whatDo like '%$a1%'  or whatDo like '%$a2%' or whatDo like '%$a3%' ");
                  $s1=mysqli_query($cn,"SELECT * FROM `registration` where experience='$exp' and whatDo like '%$a1%'  or whatDo like '%$a2%' or whatDo like '%$a3%' ");
            }
             if($count==4)
            {
               $a1=$_POST['whatDo'][0];
               $a2=$_POST['whatDo'][1];
               $a3=$_POST['whatDo'][2];
               $a4=$_POST['whatDo'][3];

                $s=mysqli_query($cn,"SELECT * FROM `registration` where experience='$exp' and whatDo like '%$a1%'  or whatDo like '%$a2%' or whatDo like '%$a3%' or whatDo like '%$a4%'");
                $s2=mysqli_query($cn,"SELECT * FROM `registration` where experience='$exp' and whatDo like '%$a1%'  or whatDo like '%$a2%' or whatDo like '%$a3%' or whatDo like '%$a4%'");
            }

              if($count==5)
            {
               $a1=$_POST['whatDo'][0];
               $a2=$_POST['whatDo'][1];
               $a3=$_POST['whatDo'][2];
               $a4=$_POST['whatDo'][3];
               $a5=$_POST['whatDo'][4];
                $s=mysqli_query($cn,"SELECT * FROM `registration` where experience='$exp' and whatDo like '%$a1%'  or whatDo like '%$a2%' or whatDo like '%$a3%' or whatDo like '%$a4%' or whatDo like '%$a5%'");
                $s2=mysqli_query($cn,"SELECT * FROM `registration` where experience='$exp' and whatDo like '%$a1%'  or whatDo like '%$a2%' or whatDo like '%$a3%' or whatDo like '%$a4%' or whatDo like '%$a5%'");
            }

              if($count==6)
            {
               $a1=$_POST['whatDo'][0];
               $a2=$_POST['whatDo'][1];
               $a3=$_POST['whatDo'][2];
               $a4=$_POST['whatDo'][3];
               $a5=$_POST['whatDo'][4];
                $a6=$_POST['whatDo'][5];
                $s=mysqli_query($cn,"SELECT * FROM `registration` where experience='$exp' and whatDo like '%$a1%'  or whatDo like '%$a2%' or whatDo like '%$a3%' or whatDo like '%$a4%' or whatDo like '%$a5%' or whatDo like '%$a6%'");
            }
              if($count==7)
            {
               $a1=$_POST['whatDo'][0];
               $a2=$_POST['whatDo'][1];
               $a3=$_POST['whatDo'][2];
               $a4=$_POST['whatDo'][3];
               $a5=$_POST['whatDo'][4];
                $a6=$_POST['whatDo'][5];
                $a7=$_POST['whatDo'][6];
                $s=mysqli_query($cn,"SELECT * FROM `registration` where experience='$exp' and whatDo like '%$a1%'  or whatDo like '%$a2%' or whatDo like '%$a3%' or whatDo like '%$a4%' or whatDo like '%$a5%' or whatDo like '%$a6%'  whatDo like '%$a7%' ");
            }

             if($count==8)
            {
               $a1=$_POST['whatDo'][0];
               $a2=$_POST['whatDo'][1];
               $a3=$_POST['whatDo'][2];
               $a4=$_POST['whatDo'][3];
               $a5=$_POST['whatDo'][4];
                $a6=$_POST['whatDo'][5];
                $a7=$_POST['whatDo'][6];
                $a8=$_POST['whatDo'][7];
                $s=mysqli_query($cn,"SELECT * FROM `registration` where experience='$exp' and whatDo like '%$a1%'  or whatDo like '%$a2%' or whatDo like '%$a3%' or whatDo like '%$a4%' or whatDo like '%$a5%' or whatDo like '%$a6%' or  whatDo like '%$a7%'  or whatDo like '%$a8%'");
            }

            if($count==9)
            {
               $a1=$_POST['whatDo'][0];
               $a2=$_POST['whatDo'][1];
               $a3=$_POST['whatDo'][2];
               $a4=$_POST['whatDo'][3];
               $a5=$_POST['whatDo'][4];
                $a6=$_POST['whatDo'][5];
                $a7=$_POST['whatDo'][6];
                $a8=$_POST['whatDo'][7];
                 $a9=$_POST['whatDo'][8];
                $s=mysqli_query($cn,"SELECT * FROM `registration` where experience='$exp' and whatDo like '%$a1%'  or whatDo like '%$a2%' or whatDo like '%$a3%' or whatDo like '%$a4%' or whatDo like '%$a5%' or whatDo like '%$a6%' or  whatDo like '%$a7%' or  whatDo like '%$a8%' or or  whatDo like '%$a9%'");
            }

            if($count==10)
            {
               $a1=$_POST['whatDo'][0];
               $a2=$_POST['whatDo'][1];
               $a3=$_POST['whatDo'][2];
               $a4=$_POST['whatDo'][3];
               $a5=$_POST['whatDo'][4];
                $a6=$_POST['whatDo'][5];
                $a7=$_POST['whatDo'][6];
                $a8=$_POST['whatDo'][7];
                 $a9=$_POST['whatDo'][8];
                  $a10=$_POST['whatDo'][9];

                $s=mysqli_query($cn,"SELECT * FROM `registration` where experience='$exp' and whatDo like '%$a1%'  or whatDo like '%$a2%' or whatDo like '%$a3%' or whatDo like '%$a4%' or whatDo like '%$a5%' or whatDo like '%$a6%' or  whatDo like '%$a7%' or  whatDo like '%$a8%' or  whatDo like '%$a9%' or  whatDo like '%$a10%' ");
            }

            if($count==11)
            {
               $a1=$_POST['whatDo'][0];
               $a2=$_POST['whatDo'][1];
               $a3=$_POST['whatDo'][2];
               $a4=$_POST['whatDo'][3];
               $a5=$_POST['whatDo'][4];
                $a6=$_POST['whatDo'][5];
                $a7=$_POST['whatDo'][6];
                $a8=$_POST['whatDo'][7];
                $a9=$_POST['whatDo'][8];
                $a10=$_POST['whatDo'][9];
                $a11=$_POST['whatDo'][10];
                $s=mysqli_query($cn,"SELECT * FROM `registration` where experience='$exp' and whatDo like '%$a1%'  or whatDo like '%$a2%' or whatDo like '%$a3%' or whatDo like '%$a4%' or whatDo like '%$a5%' or whatDo like '%$a6%' or  whatDo like '%$a7%' or  whatDo like '%$a8%' or  whatDo like '%$a9%' or  whatDo like '%$a10%' or  whatDo like '%$a11%' ");
            }

            if($count==12)
            {
               $a1=$_POST['whatDo'][0];
               $a2=$_POST['whatDo'][1];
               $a3=$_POST['whatDo'][2];
               $a4=$_POST['whatDo'][3];
               $a5=$_POST['whatDo'][4];
                $a6=$_POST['whatDo'][5];
                $a7=$_POST['whatDo'][6];
                $a8=$_POST['whatDo'][7];
                $a9=$_POST['whatDo'][8];
                $a10=$_POST['whatDo'][9];
                $a11=$_POST['whatDo'][10];
                $a12=$_POST['whatDo'][12];
                $s=mysqli_query($cn,"SELECT * FROM `registration` where experience='$exp' and whatDo like '%$a1%'  or whatDo like '%$a2%' or whatDo like '%$a3%' or whatDo like '%$a4%' or whatDo like '%$a5%' or whatDo like '%$a6%' or  whatDo like '%$a7%' or  whatDo like '%$a8%' or  whatDo like '%$a9%' or  whatDo like '%$a10%' or  whatDo like '%$a11%' or whatDo like '%$a12%'");
            }

               if($count==13)
            {
               $a1=$_POST['whatDo'][0];
               $a2=$_POST['whatDo'][1];
               $a3=$_POST['whatDo'][2];
               $a4=$_POST['whatDo'][3];
               $a5=$_POST['whatDo'][4];
                $a6=$_POST['whatDo'][5];
                $a7=$_POST['whatDo'][6];
                $a8=$_POST['whatDo'][7];
                $a9=$_POST['whatDo'][8];
                $a10=$_POST['whatDo'][9];
                $a11=$_POST['whatDo'][10];
                $a12=$_POST['whatDo'][12];
                $a13=$_POST['whatDo'][13];

                $s=mysqli_query($cn,"SELECT * FROM `registration` where experience='$exp' and whatDo like '%$a1%'  or whatDo like '%$a2%' or whatDo like '%$a3%' or whatDo like '%$a4%' or whatDo like '%$a5%' or whatDo like '%$a6%' or  whatDo like '%$a7%' or  whatDo like '%$a8%' or  whatDo like '%$a9%' or  whatDo like '%$a10%' or  whatDo like '%$a11%' or whatDo like '%$a12%' or whatDo like '%$a13%'");
            }

                  if($count==14)
            {
               $a1=$_POST['whatDo'][0];
               $a2=$_POST['whatDo'][1];
               $a3=$_POST['whatDo'][2];
               $a4=$_POST['whatDo'][3];
               $a5=$_POST['whatDo'][4];
                $a6=$_POST['whatDo'][5];
                $a7=$_POST['whatDo'][6];
                $a8=$_POST['whatDo'][7];
                $a9=$_POST['whatDo'][8];
                $a10=$_POST['whatDo'][9];
                $a11=$_POST['whatDo'][10];
                $a12=$_POST['whatDo'][12];
                $a13=$_POST['whatDo'][13];
                $a14=$_POST['whatDo'][14];
                $s=mysqli_query($cn,"SELECT * FROM `registration` where experience='$exp' and whatDo like '%$a1%'  or whatDo like '%$a2%' or whatDo like '%$a3%' or whatDo like '%$a4%' or whatDo like '%$a5%' or whatDo like '%$a6%' or  whatDo like '%$a7%' or  whatDo like '%$a8%' or  whatDo like '%$a9%' or  whatDo like '%$a10%' or  whatDo like '%$a11%' or whatDo like '%$a12%' or whatDo like '%$a13%'or whatDo like '%$a14%'");
            }

                   if($count==15)
            {
               $a1=$_POST['whatDo'][0];
               $a2=$_POST['whatDo'][1];
               $a3=$_POST['whatDo'][2];
               $a4=$_POST['whatDo'][3];
               $a5=$_POST['whatDo'][4];
                $a6=$_POST['whatDo'][5];
                $a7=$_POST['whatDo'][6];
                $a8=$_POST['whatDo'][7];
                $a9=$_POST['whatDo'][8];
                $a10=$_POST['whatDo'][9];
                $a11=$_POST['whatDo'][10];
                $a12=$_POST['whatDo'][12];
                $a13=$_POST['whatDo'][13];
                $a14=$_POST['whatDo'][14];
                $a15=$_POST['whatDo'][15];

                $s=mysqli_query($cn,"SELECT * FROM `registration` where experience='$exp' and whatDo like '%$a1%'  or whatDo like '%$a2%' or whatDo like '%$a3%' or whatDo like '%$a4%' or whatDo like '%$a5%' or whatDo like '%$a6%' or  whatDo like '%$a7%' or  whatDo like '%$a8%' or  whatDo like '%$a9%' or  whatDo like '%$a10%' or  whatDo like '%$a11%' or whatDo like '%$a12%' or whatDo like '%$a13  'or whatDo like '%$a14%' or whatDo like '%$a15%'");
            }

       }else{
            $s=mysqli_query($cn,"select * from registration");
            $s1=mysqli_query($cn,"select * from registration");
       }

if(isset($_POST['send']))
{
    $s1a=1;
    while($row=mysqli_fetch_array($s))
    {
        echo $_POST['sendid'.$s1a];

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function


// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'hrdipenconsultant@gmail.com';                     // SMTP username
    $mail->Password   = 'nikki2499';                               // SMTP password
    $mail->SMTPSecure = "tls";         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('hrdipenconsultant@gmail.com', 'HR Manager');
    $mail->addAddress($_POST['sendid'.$s1a]);     // Add a recipient
  

    
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Invitation to Interview';
    $mail->Body    = 'Hi,
    <br>
    <br>
    Thank you for applying to our company.
    <br>
    <br>
    Your application for the required position stood out to us and we would like to invite you for an interview at our office to get to know you a bit better.
    <br>
    <br>
    You will meet with the department manager. The interview will last about 10-15 minutes and you’ll have the chance to discuss the job position and learn more about our company. Also bring ID to pass from the security reason and your resume.
    <br>
    <br>
    Looking forward to hearing from you,
    <br>
    <br>
    All the best!! ';
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

    $s1a++;}
    
    header('location: resume.php');
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
    <div id="wrapper">
        <?php  include('header.php');?>   
           <!-- /. NAV TOP  -->
                <?php include('menu.php');?>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                              Resume Data
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <div class="row">
                                    <form method="post">
                                        <div class="col-md-4">
                                                <label>Languages</label>
                                               <!--  <input type="text" name="lang" class="form-control"> -->
                                                <div id="cid_22" class="form-input-wide">
                        <div class="form-multiple-column" data-columncount="4" data-component="checkbox">
                            <span class="form-checkbox-item">
                            <span class="dragger-item">
                            </span>
                            <input type="checkbox" class="form-checkbox" id="input_22_0" name="whatDo[]" value="Java" />
                            <label id="label_input_22_0" for="input_22_0"> Java </label>
                            </span>
                            <span class="form-checkbox-item">
                            <span class="dragger-item">
                            </span>
                            <input type="checkbox" class="form-checkbox" id="input_22_1" name="whatDo[]" value="Linux" />
                            <label id="label_input_22_1" for="input_22_1"> Linux </label>
                            </span>
                            <span class="form-checkbox-item">
                            <span class="dragger-item">
                            </span>
                            <input type="checkbox" class="form-checkbox" id="input_22_2" name="whatDo[]" value="Android" />
                            <label id="label_input_22_2" for="input_22_2"> Android </label>
                            </span>
                            <span class="form-checkbox-item">
                            <span class="dragger-item">
                            </span>
                            <input type="checkbox" class="form-checkbox" id="input_22_3" name="whatDo[]" value="Microsoft mobile" />
                            <label id="label_input_22_3" for="input_22_3"> Microsoft mobile </label>
                            </span>
                            <span class="form-checkbox-item" style="clear:left">
                            <span class="dragger-item">
                            </span>
                            <input type="checkbox" class="form-checkbox" id="input_22_4" name="whatDo[]" value="HTML" />
                            <label id="label_input_22_4" for="input_22_4"> HTML </label>
                            </span>
                            <!-- <br> -->
                            <span class="form-checkbox-item">
                            <span class="dragger-item">
                            </span>
                            <input type="checkbox" class="form-checkbox" id="input_22_5" name="whatDo[]" value="Windows" />
                            <label id="label_input_22_5" for="input_22_5"> Windows </label>
                            </span>
                            <span class="form-checkbox-item">
                              <span class="dragger-item">
                              </span>
                            <input type="checkbox" class="form-checkbox" id="input_22_6" name="whatDo[]" value="Eclipse" />
                            <label id="label_input_22_6" for="input_22_6"> Eclipse </label>
                            </span>
                            <span class="form-checkbox-item">
                            <span class="dragger-item">
                            </span>
                            <input type="checkbox" class="form-checkbox" id="input_22_7" name="whatDo[]" value="JacaScript" />
                            <label id="label_input_22_7" for="input_22_7"> JavaScript </label>
                            </span>
                            <span class="form-checkbox-item" style="clear:left">
                            <span class="dragger-item">
                            </span>
                            <br>
                            <input type="checkbox" class="form-checkbox" id="input_22_8" name="whatDo[]" value="C" />
                            <label id="label_input_22_8" for="input_22_8"> C </label>
                            </span>
                            <span class="form-checkbox-item">
                            <span class="dragger-item">
                            </span>
                            <input type="checkbox" class="form-checkbox" id="input_22_9" name="whatDo[]" value="Perl" />
                            <label id="label_input_22_9" for="input_22_9"> Perl </label>
                            </span>
                            <span class="form-checkbox-item">
                            <span class="dragger-item">
                            </span>
                            <input type="checkbox" class="form-checkbox" id="input_22_10" name="whatDo[]" value="Ubuntu" />
                            <label id="label_input_22_10" for="input_22_10"> Ubuntu </label>
                            </span>
                            <span class="form-checkbox-item">
                            <span class="dragger-item">
                            </span>
                            <input type="checkbox" class="form-checkbox" id="input_22_11" name="whatDo[]" value="Mac" />
                            <label id="label_input_22_11" for="input_22_11"> Mac </label>
                            </span>
                            <span class="form-checkbox-item" style="clear:left">
                            <span class="dragger-item">
                            </span>
                            <input type="checkbox" class="form-checkbox" id="input_22_12" name="whatDo[]" value="jQuery" />
                            <label id="label_input_22_12" for="input_22_12"> jQuery </label>
                            </span>
                            <span class="form-checkbox-item">
                                <span class="dragger-item">
                                </span>
                            <input type="checkbox" class="form-checkbox" id="input_22_13" name="whatDo[]" value="iOS" />
                            <label id="label_input_22_13" for="input_22_13"> iOS </label>
                            </span>
                            <span class="form-checkbox-item">
                            <span class="dragger-item">
                            </span>
                            <input type="checkbox" class="form-checkbox" id="input_22_14" name="whatDo[]" value="MySql" />
                            <label id="label_input_22_14" for="input_22_14"> MySql </label>
                            </span>
                            <span class="form-checkbox-item">
                            <span class="dragger-item">
                            </span>
                            <input type="checkbox" class="form-checkbox" id="input_22_15" name="whatDo[]" value="Red Hat" />
                            <label id="label_input_22_15" for="input_22_15"> Red Hat </label>
                            </span>
                            <span class="form-checkbox-item" style="clear:left">
                            <span class="dragger-item">
                            </span>
                            <input type="checkbox" class="form-checkbox" id="input_22_16" name="whatDo[]" value="PHP" />
                            <label id="label_input_22_16" for="input_22_16"> PHP </label>
                            </span>

                            <span class="form-checkbox-item">
                            <span class="dragger-item">
                            </span>
                            <input type="checkbox" class="form-checkbox" id="input_22_17" name="whatDo[]" value="Blackberry" />
                            <label id="label_input_22_17" for="input_22_17"> Blackberry </label>
                            </span>
                            <br>
                            <span class="form-checkbox-item">
                            <span class="dragger-item">
                            </span>
                            <input type="checkbox" class="form-checkbox" id="input_22_18" name="whatDo[]" value="Oracle" />
                            <label id="label_input_22_18" for="input_22_18"> Oracle </label>
                            </span>
                            <span class="form-checkbox-item">
                            <span class="dragger-item">
                            </span>
                            <input type="checkbox" class="form-checkbox" id="input_22_19" name="whatDo[]" value="C++" />
                            <label id="label_input_22_19" for="input_22_19"> C++ </label>
                            </span>
                            <span class="form-checkbox-item" style="clear:left">
                            <span class="dragger-item">
                            </span>
                            <input type="checkbox" class="form-checkbox" id="input_22_20" name="whatDo[]" value="SQLite" />
                            <label id="label_input_22_20" for="input_22_20"> SQLite </label>
                            </span>
                            <span class="form-checkbox-item">
                            <span class="dragger-item">
                            </span>
                            <input type="checkbox" class="form-checkbox" id="input_22_21" name="whatDo[]" value="WordPress" />
                            <label id="label_input_22_21" for="input_22_21"> WordPress </label>
                            </span>
                            <span class="form-checkbox-item">
                            <span class="dragger-item">
                            </span>
                            <br>
                            <input type="checkbox" class="form-checkbox" id="input_22_22" name="whatDo[]" value="Ajax" />
                            <label id="label_input_22_22" for="input_22_22"> Ajax </label>
                            </span>
                            <span class="form-checkbox-item">
                            <span class="dragger-item">
                            </span>
                            <input type="checkbox" class="form-checkbox" id="input_22_23" name="whatDo[]" value="Photoshop" />
                            <label id="label_input_22_23" for="input_22_23"> Photoshop </label>
                            </span>
                            
                            <span class="form-checkbox-item" style="clear:left">
                            <span class="dragger-item">
                            </span>
                            <input type="checkbox" class="form-checkbox" id="input_22_24" name="whatDo[]" value="Json" />
                            <label id="label_input_22_24" for="input_22_24"> Json </label>
                            </span>
                            <span class="form-checkbox-item">
                            <span class="dragger-item">
                            </span>
                            <input type="checkbox" class="form-checkbox" id="input_22_25" name="whatDo[]" value="Joomla" />
                            <label id="label_input_22_25" for="input_22_25"> Joomla </label>
                            </span>
                            <span class="form-checkbox-item">
                            <span class="dragger-item">
                            </span>
                            <br>
                            <input type="checkbox" class="form-checkbox" id="input_22_26" name="whatDo[]" value="Css" />
                            <label id="label_input_22_26" for="input_22_26"> Css </label>
                            </span>
                            <span class="form-checkbox-item">
                            <span class="dragger-item">
                            </span>
                            <input type="checkbox" class="form-checkbox" id="input_22_27" name="whatDo[]" value="Dreamweaver" />
                            <label id="label_input_22_27" for="input_22_27"> Dreamweaver </label>
                            </span>
                        </div>
                    </div>
                                        </div>
                                        <div class="col-md-4">
                                                <label>Experience</label>
                                                <select  name="exp" class="form-control">
                                                    <option>Select</option>
                                                    <option value="1">1</option>
                                                     <option value="2">2</option>
                                                      <option value="3">3</option>
                                                       <option value="4">4</option>
                                                        <option value="5">5</option>
                                                </select>
                                        </div>
                                        <div style="color: white;
                                            padding: 15px 50px 5px 50px;
                                            float: right;
                                            font-size: 16px;"> 
                                            <input type="submit" name="submit"  class="btn btn-danger square-btn-adjust">Submit</a> 
                                        </div>
                                </form>
                                </div>

                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                              Resume Data
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">


                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>	
                                        	<th>SrNo.</th>
                                            <th>Name</th>
                                            <th>Date of birth</th>
                                            <th>Email</th>
                                            <th>Languages</th>
                                            <th>Experience</th>
                                            <!-- <th>Personal Sites</th> -->
                                           <th>CV</th>
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php
											$i=1;
											
											while($row=mysqli_fetch_array($s))
											{
										?>	
                                        	<tr>	
                                            	<td><?php echo $i++; ?></td>
                                            	<td><?php echo $row['full_name'].' '.$row['last_name']; ?></td>
                                                <td><?php echo $row['dob']; ?></td>
                                                <td><?php echo $row['email']; ?></td>
                                                <td><?php echo $row['whatDo']; ?></td>
                                                <td><?php echo $row['experience']; ?></td>
                                                <!-- <td><?php echo $row['personalSites']; ?></td> -->
                                                <td><a href="../cv/<?php echo $row['cv']; ?>" target="_blank"><?php echo $row['cv']; ?></a>
                                                    <!-- <img src="../cv/<?php echo $row['cv']; ?>" width="100px" height="100px">   -->
                                                </td>   
                                            </tr>

                                        <?php
											}
											?>

                                    </tbody>
                                   
                                </table>

                                 <form method="post">
                                                <?php
                                                $s=1;
                                                while($row=mysqli_fetch_array($s1))
                                            {
                                                ?>
                                                <input type="hidden" value="<?php  echo $row['email']; ?>"  name="sendid<?php echo $s; ?>">
                                            <?php $s++;  }?>
                                            <input type="submit" name="send" >
                                            </form>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                
                <!-- /. ROW  -->
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
       <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
      
    <script src="assets/js/custom.js"></script>
    
  
</body>
</html>
<?php
}
else
{
		header('login.php');
}
?>