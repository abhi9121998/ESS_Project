<?php 
session_start();  
if(!isset($_SESSION['USER'], $_SESSION['uid'])){
header('location:login_response.php');
}
else {
        $now = time(); //Checking the time now when home page starts.
        if ($now > $_SESSION['expire']){
          header('location:login_response.php');
        } 
        else{
          $_SESSION['expire'] = $now + (1800); 
        }
     }
?>