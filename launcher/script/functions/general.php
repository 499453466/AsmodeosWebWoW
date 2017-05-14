<?php
	function IsSafeForQuery($data){
		$blacklist=",/';\[]()<>\" ";
		for($i=0;$i<strlen($blacklist);$i++)
			for($j=0;$j<strlen($data);$j++)
				if(substr($blacklist,$i,1) == substr($data,$j,1)){
					return false;
				}
		return true;
	}
	function ShowVariables(){
		$a = print_r(var_dump($GLOBALS),1);
        die(htmlspecialchars($a));
	}
	function Write($label,$data){
		echo '<div id="'.$label.'">' . $data . '</div>';
	}

	function showErrorLabel($message){
		echo '<h3><span class="label label-danger">'.$message.'</span></h3>';
	}
?>