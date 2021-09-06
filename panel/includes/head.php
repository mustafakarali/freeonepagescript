<?php require "../config.php"?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>Dashio - Bootstrap Admin Template</title>

    <!-- Favicons -->
    <link href="<?=ADMIN_ASSETS?>img/favicon.png" rel="icon">
    <link href="<?=ADMIN_ASSETS?>img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Bootstrap core CSS -->
    <link href="<?=ADMIN_ASSETS?>lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--external css-->
    <link href="<?=ADMIN_ASSETS?>lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="<?=ADMIN_ASSETS?>css/style.css" rel="stylesheet">
    <link href="<?=ADMIN_ASSETS?>css/style-responsive.css" rel="stylesheet">

</head>

<body>
<section id="container">

    <!--header start-->
    <?php require "topbar.php"?>
    <!--header end-->

    <!-- sidebar start -->
    <?php require "sidebar.php"?>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->