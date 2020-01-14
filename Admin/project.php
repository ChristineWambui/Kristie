<?php


include('config.php');
include('projectretrieve.php');
session_start();

    if(isset($_SESSION['username']))
      
    {

?>

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Project Manager</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue layout-boxed sidebar-mini sidebar-collapse">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

     <!-- Logo 
    <a href="index2.html" class="logo"> -->
      <!-- mini logo for sidebar mini 50x50 pixels 
      <span class="logo-mini"><b></b></span>-->
      <!-- logo for regular state and mobile devices 
      <span class="logo-lg"><b></b></span>
    </a> -->

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
         

           <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">
             <?php
              foreach($_SESSION as $username){
			    $MyUsername = $username;
			 }
			 
			 $retrieve = "SELECT COUNT(message) FROM message_user WHERE username = '$MyUsername'";
			 $result = mysqli_query($connection,$retrieve);
			 $row = mysqli_fetch_array($result);
			 echo $row[0];
			  
			  ?>
            </span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks Menu -->
           <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the messages -->
                <ul class="menu">
                  <li><!-- start message -->
                  <?php 
				  
			
          function retrievemessage()
          {
            
          
          foreach($_SESSION as $username){
          $MyUsername = $username;};
          global $connection;
          $select="SELECT message FROM message_user WHERE username = '$MyUsername'";
          $selectresult=mysqli_query($connection,$select);
          $result=array();
          if(mysqli_num_rows($selectresult)>0)
          {
            while($row=mysqli_fetch_array($selectresult))
              {
                $result[]=$row;
              }
          return $result;
          }

          }
          
      
      foreach(retrievemessage() as $sms)
        {
          ?>
                    <a href="#">
                      <div class="pull-left">
                        <!-- User Image -->
                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <!-- Message title and timestamp -->
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i><?php echo $sms['message']; ?></small>
                      </h4>
                      <!-- The message -->
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                </ul>
                <!-- /.menu -->
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          <!-- /.messages-menu -->
         
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs"><?php foreach ($_SESSION as $username) {
                echo "$username";
              } ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                 Project Manager
                 
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
                
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
         
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php foreach ($_SESSION as $username) {
                echo "$username";
              } ?></p>
          <!-- Status
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>  -->
        </div>
      </div>

      <!-- search form (Optional)
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>  -->
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <!-- <li class="header">HEADER</li> -->
        <!-- Optionally, you can add icons to the links -->
        <li><a href="projectcleared.php"><i class="fa  fa-check-square"></i> <span>Cleared</span></a></li>

        <li class="active"><a href=""><i class="fa  fa-spinner"></i> <span>Pending</span></a></li>
        
        <li><a href="projectdenied.php"><i class="fa  fa-minus-square"></i> <span>Denied</span></a></li>
		
		<li><a href="#" onclick="window.print();"><i class="glyphicon glyphicon-print"></i> <span>Print</span></a></li>
       <!-- <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Link in level 2</a></li>
            <li><a href="#">Link in level 2</a></li>
          </ul>
        </li> -->
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 style="text-align: center;">
       <b>Pending Clearance</b>
      </h1>
      <h2 style="text-align: center;">Project</h2>
    </section>
    <br>
    <br>

     <!-- table -->
    <div class="box box-info">
            
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
			  <br>
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>Student</th>
                    <th>Student Name </th>
                    <th>Action</th>
                    
                  </tr>
                  </thead>
                  <tbody>
  
                 <tr>
          <?php
		  
			if(retrievependingadmission()>0)
				
			{
                   foreach(retrievependingadmission() as $myAdmissions)
             
             
               {   
              //$admission = $myAdmissions;
              
                 ?>
                    <td><?php echo $myAdmissions['admission']; ?></td>
                    <td><?php echo $myAdmissions['studentname']; ?></td>
          
                 
                    <td><a href="<?php echo $myAdmissions['admission']?>" type="button" class="btn btn-danger" data-toggle="modal" data-target="#Modal<?php echo $myAdmissions['admission'];?>">progress</a></td>
					
            </div>
          </div>
        </div>


				</tr>
				
		    <div id="Modal<?php echo $myAdmissions['admission']?>" class="modal fade" role="dialog">
            <div class="modal-dialog">
          
              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Project Progress</h4>
                </div>
                <div class="modal-body">
              <form action="project.php" method="POST">
            <div class="form-group">
              <label for="fullname">Admission:</label>
              <input type="text" name="admission" value="<?php echo $myAdmissions['admission'];?>" required="" class="form-control" id="email">
            </div>
            <div class="form-group">
              <label for="course">FullName:</label>
              <input type="text" name="fullname" value="<?php echo $myAdmissions['studentname'];?>" required="" class="form-control" id="pwd">
            </div>
            
              <div class="form-group">
              <label for="pwd">Functionality:</label>
              <input type="text"  name="func" required="" class="form-control" id="pwd">
            </div>
            <div class="form-group">
              <label for="password">User Interface:</label>
              <input style="color:black;" name="UI" type="text" name="pwd" required="" class="form-control" id="pwd">

            </div>
			
			<div class="form-group">
              <label for="password">Project Completion:</label>
              <input style="color:black;" type="text" name="completion" required="" class="form-control" id="pwd">

            </div>
			
			<div class="form-group">
              <label for="password">Message:</label>
              <input style="color:black;" type="text" name="message" required="" class="form-control" id="pwd">

            </div>
			<button type="submit" name="clearbutton" class="btn btn-success">clear</button>
           <button type="submit" name="denybutton" class="btn btn-danger">deny</button>
			<a href="#" onclick="window.print();"><i class="glyphicon glyphicon-print"></i>Print</a>
       
          </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
          
            </div>
          </div>
        </div>
           <?php
            
			
    
    //perform deny herer
          if(isset($_POST['denybutton']))
        {
	
	  $admission = $_POST['admission'];
      $fullname = $_POST['fullname'];
      $functionality = $_POST['func'];
      $userinterface = $_POST['UI'];
      $completion = $_POST['completion'];
      $message= $_POST['message'];
      $denyquery="UPDATE clear SET status = 3 WHERE admission = '$admission' AND departmentid = 1";
	  $insertmessage = "INSERT INTO notifications(admission,message,status,date,departmentid)VALUES('$admission','$message',1,NOW(),1)";
	  $insertprogress ="INSERT INTO project_progress(admission,fullname,userinterface,functionality,message)VALUES('$admission','$fullname','$userinterface','$functionality','$message')";
      $insertresults = mysqli_query($connection,$insertmessage);
	  $progressresults = mysqli_query($connection,$insertprogress);
	  $denyresults=mysqli_query($connection,$denyquery);
	  
      if($denyresults)
      {
        echo "<script>
        alert('student denied clearance');
        window.location.href='project.php';
        </script>
        ";
      }
      else{
         echo "<script>
        alert('denial unsuccessful');
      
        </script>
        ";
        }
        }
        
        //perform clear here
          if(isset($_POST['clearbutton']))
        {
      $admission = $_POST['admission'];
      $fullname = $_POST['fullname'];
      $functionality = $_POST['func'];
      $userinterface = $_POST['UI'];
      $completion = $_POST['completion'];
      $message= $_POST['message'];
      $clearquery="UPDATE clear SET status = 1 WHERE admission = $admission AND departmentid = 1";
	  $insertmessage = "INSERT INTO notifications(admission,message,status,date,departmentid)VALUES('$admission','$message',1,NOW(),1)";
	  $insertprogress ="INSERT INTO project_progress(admission,fullname,userinterface,functionality,message)VALUES('$admission','$fullname','$userinterface','$functionality','$message')";
      $clearresults=mysqli_query($connection,$clearquery);
	  $notify = mysqli_query($connection,$insertmessage);
	  $progressresults =mysqli_query($connection,$insertprogress);
      if($progressresults)
      {
        echo "<script>
        alert('student cleared');
        window.location.href='project.php';
        </script>
        ";
      }
      else{
         echo "<script>
        alert('unable to clear');
		window.location,href = 'project.php';
        </script>
        ";
        }
        }
        }
   
			}
				else
				{
					echo "<tr><td>No students to be cleared</td></tr>";
				}
           ?>
           
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
       
            <!-- /.box-footer -->
          </div>
		  
		

    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2019 Zalego Academy.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
 
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>

 

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>
</html>
<?php
}



   else 
   {
 

      echo"<script>
      alert('login first');
      window.location.href='index.html';
      </script>";
  
  
    }
    ?>
