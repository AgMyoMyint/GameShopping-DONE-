<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link class="ico" rel="icon" href="../../../../favicon.ico">
    <link href='https://fonts.googleapis.com/css?family=Gugi' rel='stylesheet'>
    <link rel="icon" href="camp.ico" >
    <title>Talking Camp</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <!-- Bootstrap core CSS -->

    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <!-- Custom styles for this template -->
    <link href="css/custom.css" rel="stylesheet">
</head>

<body>


<nav class="navbar navbar-inverse">
    <div class="container-fluid">

        <div class="navbar-header">
            <a class="navbar-brand" href="index.html">  <span class="ico glyphicon glyphicon-flash"></span> GAME-SHOP</a>
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
                    <a class="nav-link " href="index.html">Home </a>
                </li>
                <li class="">
                    <a class="nav-link" href="register.html">Create An Account</a>
                </li>
                <li class="">
                    <a class="nav-link" href="Cart.html">Cart</a>
                </li>

            </ul>
            <ul class="nav navbar-nav navbar-right" >
                <li class=" ">
                    <input name="username" type="text"  class="form-control" placeholder="Enter UserName">
                </li>
                <li class="">
                    <input name="password" type="text"  class="form-control" placeholder="Enter Password">
                </li>
                <li class="">
                    <input type="submit" name="login" class="btn btn-primary" value="Login">
                </li>

            </ul>

        </div>
    </div>
</nav>

<div role="main" class="container-fluid">
    <div class="row">
        <div class="col-md-4">
         <?php $this->load->view('layouts/includes/sidebar.php'); ?>
        </div>
        <div class="col-md-8">