<?php
session_start();


if($_SESSION['email'])
{
	include('Connection/cn.php');
	
	
	
	
	
	
	
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Show Choice : CRM Admin</title>
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
                              Choice Data
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>	
                                        	<th>SrNo.</th>
                                            <th>Name</th>
                                            <th>Student Id</th>
                                            <th>Subject 1</th>
                                            <th>Subject 2</th>
                                            <th>Subject 3</th>
                                            <th>Subject 4</th>
                                           	<th>Subject 5</th>
                                            <th>Subject 6</th>
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<?php
											$i=1;
											
											$s=mysql_query("select * from registration");
											while($row=mysql_fetch_array($s))
											{
												$sid=$row['id'];
												$sub=array();
												
												$q=mysql_query("select s.name as name  from choice c join subject s on s.id=c.subid  where c.sid='$sid' order by c.pos");
												while($row1=mysql_fetch_array($q))
												{
 													array_push($sub,$row1['name']);
												}
												//print_r($sub);
												for($o=0;$o<sizeof($sub);$o++)
												{
													$row['subject'.$o]=$sub[$o];
			
												}
												
										?>	
                                        	<tr>	
                                            	<td><?php echo $i++; ?></td>
                                            	<td><?php echo $row['name']; ?></td>
                                                <td><?php echo $row['email']; ?></td>
                                                <td><?php echo $row['subject0']; ?></td>
                                                <td><?php echo $row['subject1']; ?></td>
                                                <td><?php echo $row['subject2']; ?></td>
                                                <td><?php echo $row['subject3']; ?></td>
                                                <td><?php echo $row['subject4']; ?></td>
                                                <td><?php echo $row['subject5']; ?></td>
                                            </tr>
                                        <?php
											}
											?>
                                    </tbody>
                                   
                                </table>
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