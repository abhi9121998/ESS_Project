<?php 
session_start();  
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
    <meta name="abhishek" content="">
    <link rel="icon" href="image/logo2.jpg">

    <title>Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/monthly.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="style/dashboard.css" rel="stylesheet">
    <link href="css/plugins/datapicker/datepicker3.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/plugins/dataTables/dataTables.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/plugins/dataTables/dataTables.responsive.css">
    <link rel="stylesheet" type="text/css" href="css/plugins/dataTables/dataTables.tableTools.min.css">
    <link rel="stylesheet" type="text/css" href="css/plugins/dataTables/jquery.dataTables.yadcf.css">

    <script src="js/ie-emulation-modes-warning.js"></script>
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/monthly.js"></script>

    <script type="text/javascript" language="javascript" src="js/plugins/dataTables/jquery.dataTables.js"></script>
    <script type="text/javascript" language="javascript" src="js/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script type="text/javascript" language="javascript" src="js/plugins/dataTables/dataTables.responsive.js"></script>
    <script type="text/javascript" language="javascript" src="js/plugins/dataTables/dataTables.tableTools.min.js"></script>
    <script type="text/javascript" language="javascript" src="js/plugins/dataTables/jquery.dataTables.yadcf.js"></script>
   <script type = "text/javascript" >
    history.pushState(null, null, 'index.php');
    window.addEventListener('popstate', function(event) {
    history.pushState(null, null, 'index.php');
    });
    </script>

  <style type="text/css">
       button{ border-radius: 5px;
        background-color: white;
        color:#676a6c;
    }
      button:hover{
      background-color:silver;
      }
      h3,h2,h4{
        font-weight: bold;
      }
      div .col-lg-6{
         margin-top: 20px;
         
      }

      .col-sm-6{

        width:45%;
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
            <li class="active"><a href="index.php">Company Setup</a></li>
            <li><a href="persons.php">HRIS</a></li>
            <li><a href="organizations.php">Attendence</a></li>
            <li><a href="locations.php">Payroll</a></li>
            <li><a href="news.php">Income Tax</a></li>
            <li><a href="mypriorities.php">Tools</a></li>
            <li><a target="_blank" style="color:red" href="help.php">User Instruction Guide</a></li>
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
          </ul>
        </div>
      </div>

    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="index.php">Company Setup</a></li>
            <li><a href="persons.php">HRIS</a></li>
            <li><a href="organizations.php">Attendence</a></li>
            <li><a href="locations.php">Leave Management</a></li>
            <li><a href="news.php">Loan Management</a></li>
            <li><a href="delegates.php">Payroll</a></li>
            <li><a href="topics.php">Remibursement</a></li>
            <li><a href="products.php">Asset Management</a></li>
            <li><a href="mypriorities.php">Employee Expenses</a></li>
            <li><a href="help.php">MIS Report</a></li>
            <li><a href="help.php">Provident Fund</a></li>
            <li><a href="help.php">Profession Tax</a></li>
            <li><a href="help.php">ESIC</a></li>
           	<li><a href="help.php">Labour Welfare</a></li>
           	<li><a href="help.php">Income Tax</a></li>
           	<li><a href="help.php">Appraisal</a></li>
           	<li><a href="help.php">Tools</a></li>
          </ul>
        </div>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h2 class="page-header">Dashboard</h2>  
  </body>
</html>
