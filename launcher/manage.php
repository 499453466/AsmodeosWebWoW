<?php 
include 'script/init.php';

if(!isset($_SESSION['logged']))
  header("Location: login.php");


/*DB Data*/
$news             = getNews();
$newslink         = getNewsLink() != '0' ? getNewsLink() : '';
$changelog        = getChangelog();
$changeloglink    = getChangelogLink() != '0' ? getChangelogLink() : '';
$forum            = getForumLink() != '0' ? getForumLink() : '';
$account          = getAccountLink() != '0' ? getAccountLink() : '';
$register         = getRegisterLink() != '0' ? getRegisterLink() : '';
$patch_link       = array();
$patch_name       = array();
for($i=1;$i<=5;$i++){
  array_push($patch_name, getPatchName($i) != '0' ? getPatchName($i) : '');
  array_push($patch_link, getPatchLink($i) != '0' ? getPatchLink($i) : '');
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
          <li id="news" class="active"><a href="#"><font color="#3174AE" size="3">&#x0270E;</font> News &amp; Changelog</a></li>
          <li id="patch" class="" ><a href="#"><font color="#3174AE" size="3">&#x02699;</font> Patches</a></li>
          <li id="links" class=""><a href="#"><font color="#3174AE" size="3">&#x027A5;</font> Links</a></li>
          <li id="register" class=""><a href="#"><font color="#5CB85C" size="3">&#10010;</font> New Account</a></li>
          <li id="logout" class=""><a href="action.php?do=logout"><font color="#F0AD4E" size="3">&#10006;</font> Logout</a></li>
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
  <!-- news and changelog update -->
  <div id="panel_news" class="col-sm-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title ">News &amp; Changelog</h3>
        </div>
        <div class="panel-body">
          <form action="action.php?do=news" method="post">
            <p>News Text:</p>
            <div class="form-horizontal">
              <div class="form-group">
                  <div class="col-md-12">
                      <textarea name="txtNews" style="width: 100%" class="form-control" rows="3" placeholder="Enter news text" required><?php echo $news; ?></textarea>
                  </div>
              </div>
            </div>

            <p>News Hyperlink: ( optional )</p>
            <input name="txtNewsLink" class="form-control text-center" placeholder="Enter hyperlink if any" value="<?php echo $newslink; ?>">

            <p>Changelog Text:</p>
            <div class="form-horizontal">
              <div class="form-group">
                  <div class="col-md-12">
                      <textarea name="txtChangelog" style="width: 100%" class="form-control" rows="3" placeholder="Enter changelog text" required><?php echo $changelog ?></textarea>
                  </div>
              </div>
            </div>

            <p>Changelog Hyperlink: ( optional )</p>
            <input name="txtChangelogLink" class="form-control text-center" placeholder="Enter hyperlink if any" value="<?php echo $changeloglink ?>">

            <br>

            <div class="text-center">
              <button name="btnUpdateNews" type="submit" class="btn btn-lg btn-primary col-sm-12" >Update Data</button>
            </div>
          </form>
        </div>

    </div>
      
</div>

    <!-- links update -->
<div id="panel_links" class="col-sm-12">
    <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title ">Menu Redirects ( all optional )</h3>
        </div>
        <div class="panel-body">
          <form action="action.php?do=links" method="post">

            <p>Account Hyperlink:</p>
            <input name="txtAccountLink" class="form-control text-center" placeholder="Enter hyperlink if any" value="<?php echo $account ?>">

            <p>Register Hyperlink:</p>
            <input name="txtRegisterLink" class="form-control text-center" placeholder="Enter hyperlink if any" value="<?php echo $register ?>">

            <p>Forum Hyperlink:</p>
            <input name="txtForumLink" class="form-control text-center" placeholder="Enter hyperlink if any" value="<?php echo $forum ?>">

            <br>

            <div class="text-center">
              <button name="btnUpdateLinks" type="submit" class="btn btn-lg btn-primary col-sm-12" >Update Data</button>
            </div>
          </form>
        </div>

    </div>
      
</div>
    <!-- patch update -->
<div id="panel_patch" class="col-sm-12">
  <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title ">Custom Patches ( all optional )</h3>
      </div>
      <div class="panel-body">
        <form class="form-horizontal" action="action.php?do=patch" method="post">

          <p>1. Patch Name:</p>
          <div class="form-group">
              <div class="col-sm-8">
                  <input name="txtPatchName1" class="form-control text-center" placeholder="Enter name to be saved as. Example: patch-X.mpq" value="<?php echo $patch_name[0] ?>">
              </div>
              <div class="col-sm-4 checkbox">
                    <label><input name="checkNewPatch1" type="checkbox" value="0">Update Client</label>
              </div>
          </div>
          <p>Patch Download Link:</p>
          <input name="txtPatchLink1" class="form-control text-center" placeholder="Enter hyperlink if patch is set. Example: http://example-wow.com/patch.mpq" value="<?php echo $patch_link[0] ?>">

          <p>2. Patch Name:</p>
          <div class="form-group">
              <div class="col-sm-8">
                  <input name="txtPatchName2" class="form-control text-center" placeholder="Enter name to be saved as. Example: patch-X.mpq" value="<?php echo $patch_name[1] ?>">
              </div>
              <div class="col-sm-4 checkbox">
                    <label><input name="checkNewPatch2" type="checkbox" value="0">Update Client</label>
              </div>
          </div>
          <p>Patch Download Link:</p>
          <input name="txtPatchLink2" class="form-control text-center" placeholder="Enter hyperlink if patch is set. Example: http://example-wow.com/patch.mpq" value="<?php echo $patch_link[1] ?>">

          <p>3. Patch Name:</p>
          <div class="form-group">
              <div class="col-sm-8">
                  <input name="txtPatchName3" class="form-control text-center" placeholder="Enter name to be saved as. Example: patch-X.mpq" value="<?php echo $patch_name[2] ?>">
              </div>
              <div class="col-sm-4 checkbox">
                    <label><input name="checkNewPatch3" type="checkbox" value="0">Update Client</label>
              </div>
          </div>
          <p>Patch Download Link:</p>
          <input name="txtPatchLink3" class="form-control text-center" placeholder="Enter hyperlink if patch is set. Example: http://example-wow.com/patch.mpq" value="<?php echo $patch_link[2] ?>">

          <p>4. Patch Name:</p>
          <div class="form-group">
              <div class="col-sm-8">
                  <input name="txtPatchName4" class="form-control text-center" placeholder="Enter name to be saved as. Example: patch-X.mpq" value="<?php echo $patch_name[3] ?>">
              </div>
              <div class="col-sm-4 checkbox">
                    <label><input name="checkNewPatch4" type="checkbox" value="0">Update Client</label>
              </div>
          </div>
          <p>Patch Download Link:</p>
          <input name="txtPatchLink4" class="form-control text-center" placeholder="Enter hyperlink if patch is set. Example: http://example-wow.com/patch.mpq" value="<?php echo $patch_link[3] ?>">

          <p>5. Patch Name:</p>
          <div class="form-group">
              <div class="col-sm-8">
                  <input name="txtPatchName5" class="form-control text-center" placeholder="Enter name to be saved as. Example: patch-X.mpq" value="<?php echo $patch_name[4] ?>">
              </div>
              <div class="col-sm-4 checkbox">
                    <label><input name="checkNewPatch5" type="checkbox" value="0">Update Client</label>
              </div>
          </div>
          <p>Patch Download Link:</p>
          <input name="txtPatchLink5" class="form-control text-center" placeholder="Enter hyperlink if patch is set. Example: http://example-wow.com/patch.mpq" value="<?php echo $patch_link[4] ?>">
          <br>

          <div class="text-center">
            <button name="btnUpdateLinks" type="submit" class="btn btn-lg btn-primary col-sm-12" >Update Data</button>
          </div>
        </form>
      </div>

  </div> 
  
</div>
<div id="panel_report" class="col-sm-12">
    <center><font size="40"><span class="label label-info">Thank you for helping.</span></font></center>
</div>  
    <!-- register account -->
<div id="panel_register" class="col-sm-12">
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title">New Account Creation</h3>
    </div>
    <div class="panel-body">
      <form action="action.php?do=account" method="post">
        <p>Account Name:</p>
        <input name="txtUser" class="form-control text-center" placeholder="Enter username">

        <p>Password:</p>
        <input id="pass" name="txtPassword" type="password" class="form-control text-center" placeholder="Enter password">

        <p>Confirm Password:</p>
        <input id="pass2" name="txtPasswordConfirm" type="password" class="form-control text-center" placeholder="Enter password again">

        <br>

        <div class="text-center">
          <button name="btnCreateAccount" type="submit" class="btn btn-lg btn-primary col-sm-12" >Create Account</button>
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
