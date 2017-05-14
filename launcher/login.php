<?php 
include 'script/init.php';
if(isset($_SESSION['logged']))
  header("Location: manage.php");
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="favicon.ico">
  <title>DB Manager | Jeaks' Launcher</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap-theme.min.css" rel="stylesheet">
  <link href="theme.css" rel="stylesheet">
</head>

<body>

  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="manage.php">Control Panel</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li id="news" class="active"><a href="#">Authentication</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li id="report"><a class="" target="_blank" href="https://bitbucket.org/paulcosma97/jeaks-launcher/issues/new"><font color="#DF0101" size="4">&#9874;</font> Report a Bug </a></li>
        </ul>
        
      </div>
    </div>
  </nav>

<div class="container theme-showcase" role="main">

  <div class="jumbotron">
    <h1>j<font color="lightgrey">eaks'</font>Launcher</h1>
    <p>Please authenticate in order to continue.</p>

  </div> 
    <!-- login -->
<center>
  <?php if (isset($_GET['error']) && $_GET['error']=='account') {
    showErrorLabel("Username or password is invalid!");
  } ?>
</center>
<div id="panel_login" class="col-sm-12">
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title">Authentication</h3>
    </div>
    <div class="panel-body">
      <form action="action.php?do=login" method="post">
        <p>Account Name:</p>
        <input name="txtUser" class="form-control text-center" placeholder="Enter username">

        <p>Password:</p>
        <input id="pass" name="txtPassword" type="password" class="form-control text-center" placeholder="Enter password">

        <br>

        <div class="text-center">
          <button name="btnLogin" type="submit" class="btn btn-lg btn-primary col-sm-12" >Log In</button>
        </div>
      </form>
    </div>

  </div>
</div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://cdn.openwow.com/api/tooltip.js"></script>
  <script src="js/custom.js"></script>
</body>
</html>
