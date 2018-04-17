<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>Game Shopping</title>


    <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet" type="text/css">

    <script src="<?php echo base_url('assets/js/bootstrap.js'); ?>" type="application/javascript"></script>

    <link href='https://fonts.googleapis.com/css?family=Gugi' rel='stylesheet'>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js" type="application/javascript"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" type="application/javascript"></script>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css">
    <!-- Bootstrap core CSS -->
    <?php echo link_tag('assets/css/custom.css'); ?>

    <!-- Custom styles for this template -->

</head>

<body>

<form action="<?php base_url(); ?>users/login" method="post">
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">

            <div class="navbar-header">
                <a class="navbar-brand" href="<?php echo base_url(); ?>">  <span class="ico glyphicon glyphicon-flash"></span> GAME-SHOP</a>
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only"> Toggle Navigation </span>
                    <span class="icon-bar">  </span>
                    <span class="icon-bar">  </span>
                    <span class="icon-bar">  </span>
                </button>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav" >
                    <li class=" active">
                        <a class="nav-link " href="<?php echo base_url(); ?>">Home </a>
                    </li>
                    <?php if(!$this->session->userdata('logged_in')) : ?>
                        <li class="">
                            <a class="nav-link" href="<?php echo base_url(); ?>users/register">Create An Account</a>
                        </li>
                    <?php endif ; ?>
                    <li class="">
                        <a class="nav-link" href="<?php echo base_url(); ?>cart">Cart</a>
                    </li>

                </ul>
                <?php if(!$this->session->userdata('logged_in')) : ?>
                    <ul class="nav navbar-nav navbar-right" >

                        <li class=" ">
                            <input name="username" type="text"  class="form-control" placeholder="UserName" required>
                        </li>
                        <li class="">
                            <input name="password" type="text"  class="form-control" placeholder="Password" required>
                        </li>
                        <li class="">
                            <input type="submit" name="login" class="btn btn-primary" value="Login">
                        </li>

                    </ul>
                <?php else : ?>
                    <ul class="nav navbar-nav navbar-right" >

                        <li class=" ">
                            <h4 class="user-name"><?php echo  $this->session->userdata('username');  ?> </h4>
                        </li>

                        <li class="">

                            <a  href="<?php echo base_url();?>users/logout" class="btn btn-primary logout">logout</a>

                        </li>
                    </ul>
                <?php endif ; ?>

            </div>
        </div>
    </nav>
</form>
<div role="main" class="container-fluid">
    <div class="row">

        <div class="col-md-3">
            <?php $this->load->view('layouts/includes/sidebar.php'); ?>
        </div>
        <div class="col-md-9">