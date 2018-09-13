<?php
session_start();

unset($_SESSION['USER'], $_SESSION['uid']);

session_destroy();

header('location:login.html');

?>