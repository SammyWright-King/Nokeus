<?php

if(ISSET($_POST['login'])){
	
	include '../core.php';
	$username= htmlentities($_POST['username']);
	$password = htmlentities($_POST['password']);
	$login_query = mysql_query("SELECT * FROM agent WHERE agent_username='$username' AND password='$password'");
	
	$login_query_count = mysql_num_rows($login_query);
	
		if ($login_query_count>0){		
			$get_agent_id = mysql_fetch_array($login_query);
			$agent_id = $get_agent_id[0];
			setcookie("agent", $agent_id, time() + 315360000, '/');
			echo 'S';
			exit;
		} else  {
			
			$check_contact = mysql_query("SELECT * FROM agent WHERE agent_username='$username'");
			$check_contact_count = mysql_num_rows($check_contact);
	
			if($check_contact_count>0){
				echo 'P';
				exit;
			} else {
				echo 'U';
				exit;
				}
		}
}

?>
