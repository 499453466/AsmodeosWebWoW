<?php
	function getServerName(){
		$sql = "select name from realmlist where id=1";
		$result = mysqli_query($GLOBALS["authDB"], $sql);
		if(mysqli_num_rows($result) > 0)
			return mysqli_fetch_assoc($result)['name'];
		return false;
	}
	function getRealmlist(){
		$sql = "select address from realmlist where id=1";
		$result = mysqli_query($GLOBALS["authDB"], $sql);
		if(mysqli_num_rows($result) > 0)
			return mysqli_fetch_assoc($result)['address'];
		return false;
	}
	function getOnlinePlayersCount(){
		$sql = "select count(guid) from characters where online=1";
		$result = mysqli_query($GLOBALS["charDB"], $sql);
		if(mysqli_num_rows($result) > 0)
			return mysqli_fetch_assoc($result)['count(guid)'];
		return false;
	}
	function getOnlinePlayersData(){
		$data = '';
		$sql = "select name,race,class,level from characters where online=1";
		$result = mysqli_query($GLOBALS["charDB"], $sql);
		if(mysqli_num_rows($result) == 0)
			return false;
		while($row = mysqli_fetch_assoc($result))
			$data .= $row['name'] . ',' . $row['race'] . ',' . $row['class'] . ',' . $row['level'] . '</br>';
		return $data;
	}
	function getNews(){
		$sql = "select news from data where id=1";
		$result = mysqli_query($GLOBALS["launcherDB"], $sql);
		if(mysqli_num_rows($result) > 0)
			return mysqli_fetch_assoc($result)['news'];
		return false;
	}
	function getNewsLink(){
		$sql = "select news_link from data where id=1";
		$result = mysqli_query($GLOBALS["launcherDB"], $sql);
		if(mysqli_num_rows($result) > 0)
			return mysqli_fetch_assoc($result)['news_link'];
		return false;
	}
	function getChangelog(){
		$sql = "select changelog from data where id=1";
		$result = mysqli_query($GLOBALS["launcherDB"], $sql);
		if(mysqli_num_rows($result) > 0)
			return mysqli_fetch_assoc($result)['changelog'];
		return false;
	}
	function getChangelogLink(){
		$sql = "select changelog_link from data where id=1";
		$result = mysqli_query($GLOBALS["launcherDB"], $sql);
		if(mysqli_num_rows($result) > 0)
			return mysqli_fetch_assoc($result)['changelog_link'];
		return false;
	}
	function getRegisterLink(){
		$sql = "select register from settings";
		$result = mysqli_query($GLOBALS["launcherDB"], $sql);
		if(mysqli_num_rows($result) > 0)
			return mysqli_fetch_assoc($result)['register'];
		return false;
	}
	function getAccountLink(){
		$sql = "select account from settings";
		$result = mysqli_query($GLOBALS["launcherDB"], $sql);
		if(mysqli_num_rows($result) > 0)
			return mysqli_fetch_assoc($result)['account'];
		return false;
	}
	function getForumLink(){
		$sql = "select forum from settings";
		$result = mysqli_query($GLOBALS["launcherDB"], $sql);
		if(mysqli_num_rows($result) > 0)
			return mysqli_fetch_assoc($result)['forum'];
		return false;
	}
	function getPatchVersion($id){
		$sql = "select patch_version_$id from settings";
		$result = mysqli_query($GLOBALS["launcherDB"], $sql);
		if(mysqli_num_rows($result) > 0)
			return mysqli_fetch_assoc($result)["patch_version_$id"];
		return false;
	}
	function getPatchLink($id){
		$sql = "select patch_link_$id from settings";
		$result = mysqli_query($GLOBALS["launcherDB"], $sql);
		if(mysqli_num_rows($result) > 0)
			return mysqli_fetch_assoc($result)["patch_link_$id"];
		return false;
	}
	function getPatchName($id){
		$sql = "select patch_name_$id from settings";
		$result = mysqli_query($GLOBALS["launcherDB"], $sql);
		if(mysqli_num_rows($result) > 0)
			return mysqli_fetch_assoc($result)["patch_name_$id"];
		return false;
	}
	function checkRootAccount($user,$password,$auth,$characters){
		$t_charDB = mysqli_connect('localhost',"$user","$password","$characters");
		$t_authDB = mysqli_connect('localhost',"$user","$password","$auth");

		if(mysqli_connect_errno()){
			return false;
		}
		mysqli_close($t_authDB);
		mysqli_close($t_charDB);
		return true;
	}
	function installationSuccessful($user,$pass,$sql){
		$t_launcherDB = mysqli_connect('localhost',$user,$pass);
		if (mysqli_multi_query($t_launcherDB, "$sql")){
			mysqli_close($t_launcherDB);
			return true;
		}
		mysqli_close($t_launcherDB);
		return false;//mysqli_error($t_launcherDB);
	}
	function registerManagerAccount($user,$password){
		$sql = "insert into security (`user`,`password`) values('$user','$password');";
		$result = mysqli_query($GLOBALS["launcherDB"], $sql);
		if(mysqli_error($GLOBALS["launcherDB"]));
			return false;
		return true;
	}
	function isLoggedIn(){
		return true;
	}
	function updateNewsAndChangelog($news, $nlink,$chlog,$chloglink){
		$sql = "delete from data; replace into data values(1,'$news','$nlink','$chlog','$chloglink');";
		mysqli_multi_query($GLOBALS["launcherDB"], $sql);
	}
	function updateLinks($register, $forum, $account){
		$sql = "update settings set register='$register', forum='$forum', account='$account';";
		mysqli_multi_query($GLOBALS["launcherDB"], $sql);
	}
	function updatePatches($name,$link,$update){
		$sql = "";
		for ($i=0; $i < 5; $i++) { 
			$j=$i+1;
			$sql .= "update settings set patch_name_$j='$name[$i]', patch_link_$j='$link[$i]'";
			if($update[$i]) $sql .= ", patch_version_$j = patch_version_$j + 1";
			$sql .= "; ";
		}
		mysqli_multi_query($GLOBALS["launcherDB"], $sql);
	}
	function checkAccount($user,$pass){
		$sql = "select password from security where user='$user'";
		$result = mysqli_query($GLOBALS["launcherDB"], $sql);
		return mysqli_fetch_assoc($result)['password'] == $pass;
	}
	
?>