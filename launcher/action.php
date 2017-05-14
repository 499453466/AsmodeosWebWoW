<?php 
include 'script/init.php';

// Redirect if not logged
if(!isset($_GET) || !isset($_POST) || !isLoggedIn())
	header("Location: manage.php");

switch ($_GET['do']) {
	case 'news':

		// Collecting data from previous form
		$newslink = $_POST['txtNewsLink'] != '' ? $_POST['txtNewsLink'] : '0';
		$changeloglink = $_POST['txtChangelogLink'] != '' ? $_POST['txtChangelogLink'] : '0';
		$news = $GLOBALS["launcherDB"]->real_escape_string($_POST['txtNews']);
		$changelog = $GLOBALS["launcherDB"]->real_escape_string($_POST['txtChangelog']);

		// Updates the selected data
		updateNewsAndChangelog($news,$newslink,$changelog,$changeloglink);
		break;

	case 'links':

		// Collecting data from previous form
		$register = $_POST['txtRegisterLink'] != '' ? $_POST['txtRegisterLink'] : '0';
		$account = $_POST['txtAccountLink'] != '' ? $_POST['txtAccountLink'] : '0';
		$forum = $_POST['txtForumLink'] != '' ? $_POST['txtForumLink'] : '0';

		// Updates the selected data
		updateLinks($register,$forum,$account);
		break;

	case 'patch':

		// Collecting data from previous form
		$patchLink = array();
		$patchName = array();
		$patchNewVersion = array();

		for($i=1;$i<=5;$i++){
			array_push($patchLink, $_POST["txtPatchLink".$i] != '' ? $_POST["txtPatchLink".$i] : '0');
			array_push($patchName, $_POST['txtPatchName'.$i] != '' ? $_POST['txtPatchName'.$i] : '0');
			array_push($patchNewVersion, $_POST['checkNewPatch'.$i] == '1' ? true : false);
		}

		// Updates the selected data
		updatePatches($patchName,$patchLink,$patchNewVersion);
		break;

	case 'login':

		// Collecting data from previous form and checking it
		$user = $GLOBALS["launcherDB"]->real_escape_string(htmlentities($_POST['txtUser']));
		$password = $GLOBALS["launcherDB"]->real_escape_string(htmlentities($_POST['txtPassword']));

		// Verify is account exists
		if(checkAccount($user,$password))
			// Sets user as logged
			$_SESSION['logged'] = 1;
		else {
			session_destroy();
			// Redirect
			header("Location: login.php?error=account");
			die('');
		}

		break;

	case 'logout':
		session_destroy();
		break;
	
	case 'account':
		// Collects data from previous form and checks it
		$user = $GLOBALS["launcherDB"]->real_escape_string(htmlentities($_POST['txtUser']));
		$password = $GLOBALS["launcherDB"]->real_escape_string(htmlentities($_POST['txtPassword']));

		// Registers the new account
		registerManagerAccount($user,$password);

		break;

	default:
		// Redirect if no allowed action
		header("Location: manage.php");
		break;
}
// Redirect if no action
header("Location: manage.php");
 ?>