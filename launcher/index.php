<?php 
  include 'script/functions/server.php';
  include 'script/functions/general.php';

  // Connection check
  if(isset($_GET['user']) && isset($_GET['password']) && isset($_GET['auth']) && isset($_GET['characters'])){
    if(!checkRootAccount($_GET['user'],$_GET['password'],$_GET['auth'],$_GET['characters'])){
      header("Location: http://127.0.0.1/launcher/index.php?error=conn");
    }
    else {
      // Actual installation
      $sql = file_get_contents('install.sql');
      $myfile = fopen("script/database/config.php", "w") or header("Location: http://127.0.0.1/launcher/index.php?error=file");
      $txt = '<?php 
              $user="'.$_GET['user'].'";
              $pass="'.$_GET['password'].'";
              $auth="'.$_GET['auth'].'";
              $chars="'.$_GET['characters'].'";?>';
      fwrite($myfile, $txt);
      fclose($myfile);
      if(installationSuccessful($_GET['user'],$_GET['password'],$sql)){
        // Installation complete
        header("Location: complete.php");
      }
      else
        // SQL installation file not found
        header("Location: http://127.0.0.1/launcher/index.php?error=sql");
    }
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
    <title>DB Install | Jeaks' Launcher</title>
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
            <a class="navbar-brand" href="#">Control Panel</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Installation</a></li>
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
                showErrorLabel('Could not execute `install.sql`!');
                break;
              case 'file':
                showErrorLabel('Could not find or write config.php!');
                break;
              case 'conn':
                showErrorLabel('Could not connect to SQL account!');
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
              <h3 class="panel-title ">Database Installation</h3>
            </div>
            <div class="panel-body">
              <p>DB Root:</p>
              <input id="user" class="form-control text-center" placeholder="Enter root username">

              <p>Password:</p>
              <input id="password" type="password" class="form-control text-center" placeholder="Enter password">

              <p>Auth DB:</p>
              <input id="authDB" class="form-control text-center" placeholder="Enter authDB">

              <p>Characters DB:</p>
              <input id="charactersDB" class="form-control text-center" placeholder="Enter charactersDB">
            </div>

        </div>
          <div class="text-center">
            <button id="btn_install" type="button" class="btn btn-lg btn-primary col-sm-12">Install</button>
          </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="http://cdn.openwow.com/api/tooltip.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>
