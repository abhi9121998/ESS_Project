<?php
  require_once 'pdo.php';

 session_start();

 $username=$_POST["username"];

 $password=$_POST["password"];

 $reply=array();

 try{

  $stmt=$DB->prepare('select * from users where username=? AND password=? ');

    $stmt->execute(array($username,$password));

    $result=$stmt->fetch();
    if($result != ""){

    //session_start();

    $_SESSION['expire'] = time() + (18000); 
    $_SESSION['USER']=$username;
    $_SESSION['uid']=$result[0];
    $_SESSION['role']=$result[1];
    $reply["success"]=1;
}
else{

	$reply["success"]=0;
}
}
 catch(PDOException $e){

          $reply["success"]=0;
            }
  echo json_encode($reply);
?>
