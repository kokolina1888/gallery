<?php require_once('adminincludes/admin_header.php'); ?>
<?php 

$session->logout();
redirect("login.php");
?>