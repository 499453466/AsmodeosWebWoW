<?php 
	include 'script/init.php';

  // Checks if user and password exist
	if(isset($_GET['user']) && isset($_GET['password'])){
		$user = $_GET['user'];
		$pass = $_GET['password'];

    // Checks if user and password are safe for sql execution
		if(!(IsSafeForQuery($user) && IsSafeForQuery($pass)))
			header("Location: complete.php?error=unsafe");

    // Checks if the query has been executed with errors
		if(!registerManagerAccount($user,$pass))
			header("Location: complete.php?error=sql");

    // Rewrite '.htaccess' file. 127.0.0.1/launcher/ now redirects to manage.php
		$myfile = fopen(".htaccess", "w");
		fwrite($myfile, 'DirectoryIndex manage.php');
		fclose($myfile);

    // Set user as logged
    $_SESSION['logged'] = 1;

    // Rename index.php to .old so it won't be usable anymore
    rename("index.php","index.txt");

    // Redirect
		header("Location: manage.php");
	}

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
    <title>DB Registration | Jeaks' Launcher</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="theme.css" rel="stylesheet">
  </head>

  <body>

    <!-- Fixed navbar -->
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Control Panel</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Account Registration</a></li>
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
        <p>This website is a tool for installing and setting up <strike>my</strike> <em>community's</em> launcher. Here you can add news and changelog data, save links to your website and set patches in order to be downloaded. If you notice any bugs don't hesitate to report them, the same thing applies to suggestions.</p>
        <p><em>Jeaks' Launcher</em> is free and will always be for everyone.</p>
      </div>
      <div class="col-sm-12">
      	<center>
	      	<?php 
	      	if(isset($_GET['error'])){
	      		$err = $_GET['error'];
	      		switch ($err) {
	      			case 'sql':
	      				showErrorLabel('Duplicate! Account name is already used.');
	      				break;
	      			case 'unsafe':
	      				showErrorLabel('Unable to proceed. Your account name or password contains disallowed characters.');
	      				break;
	      			default:
	      				// nothing happens
	      				break;
	      		}
	      	}
	      	 ?>
       </center>
      </div>
      <div class="col-sm-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title ">Account Registration</h3>
            </div>
            <div class="panel-body">
              <p>Account Name:</p>
              <input id="user" class="form-control text-center" placeholder="Enter username">

              <p>Password:</p>
              <input id="password" type="password" class="form-control text-center" placeholder="Enter password">
            </div>

        </div>
          <div class="text-center">
            <button id="btn_create_account" type="button" class="btn btn-lg btn-primary col-sm-12">Create Account</button>
          </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://cdn.openwow.com/api/tooltip.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>
