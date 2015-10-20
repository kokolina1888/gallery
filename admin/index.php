<?php include_once ("adminincludes/admin_header.php"); ?>
 <?php if(!$session->is_signed_in()) {redirect("login.php");} ?>

<div id="wrapper">

    <!-- Navigation -->
    <?php include_once ("adminincludes/admin_top_nav.php"); ?>

    <?php include_once ("adminincludes/admin_sidebar_nav.php"); ?>

    <div id="page-wrapper">

    <?php include('adminincludes/admin_content.php'); ?>

        <?php include_once ("adminincludes/admin_footer.php"); ?>