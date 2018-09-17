<?php session_start();
if(!isset($_SESSION['USER'], $_SESSION['uid'])){
header('location:login.html');
}
else {
         $now = time(); //Checking the time now when home page starts.
        if ($now > $_SESSION['expire']){
           header('location:logout.php');
        }
        else{
          $_SESSION['expire'] = $now + (1800); 
        }
     }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="abhishek" content="">
    <link rel="icon" href="image/logo.jpg">

    <title>Leave Management</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="style/dashboard.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/plugins/dataTables/dataTables.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/plugins/dataTables/dataTables.responsive.css">
    <link rel="stylesheet" type="text/css" href="css/plugins/dataTables/dataTables.tableTools.min.css">
    <link rel="stylesheet" type="text/css" href="css/plugins/dataTables/jquery.dataTables.yadcf.css">

     <script src="js/ie-emulation-modes-warning.js"></script>
     <script src="js/jquery-2.1.1.js"></script>

    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" language="javascript" src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script type="text/javascript" language="javascript" src="js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script type="text/javascript" language="javascript" src="js/plugins/dataTables/dataTables.responsive.js"></script>
    <script type="text/javascript" language="javascript" src="js/plugins/dataTables/dataTables.tableTools.min.js"></script>
    <script type="text/javascript" language="javascript" src="js/plugins/dataTables/jquery.dataTables.yadcf.js"></script>

  <style type="text/css">
   button{ border-radius: 5px;
    background-color: white;
    color:#676a6c;
}
  button:hover{
  background-color:silver;
  }
  h2{
    font-weight: bold;
  }
  </style>
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">FNI Data Visualization System</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="company_setup.php">Company Setup</a></li>
            <li><a href="HRIS.php">HRIS</a></li>
            <li><a href="attendence.php">Attendence</a></li>
            <li><a href="payroll.php">Payroll</a></li>
            <li><a href="income_tax.php">Income Tax</a></li>
            <li><a href="tools.php">Tools</a></li>
            <li><a target="_blank" style="color:red" href="help.php">User Instruction Guide</a></li>
           <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
          </ul>

        <!--  <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form> -->
         
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="nav-header">
            </li>
            <li><a href="index.php">Dashboard</a></li>
            <li class="active"><a href="persons.php">Leave Policy</a></li>
            <li><a href="organizations.php">Leave Summary</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h2 class="page-header">Leave Management</h2>
        </div>
      </div>
    </div>
  </body>
</html>
