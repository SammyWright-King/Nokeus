<?php

	if(ISSET($_COOKIE['agent']) AND !empty($_COOKIE['agent'])) {
		
		$agent_id = $_COOKIE['agent'];
		$agent_exists = mysql_num_rows(mysql_query("SELECT * FROM agent WHERE id='$agent_id' "));
		if($agent_exists>0) {
			$agent_fetch = mysql_fetch_array(mysql_query("SELECT * FROM agent WHERE id='$agent_id'"));
			
			$agent_id =  $agent_fetch[0];
			$agent_username = $agent_fetch[1];
			$display_name =  $agent_fetch[2];
			$password = $agent_fetch[3];
			$email = $agent_fetch[4];
			$phone = $agent_fetch[5];
			$accountname = $agent_fetch[6];
			$accountno =  $agent_fetch[7];
			$bankname = $agent_fetch[8];
			$btc_address =  $agent_fetch[9];
			$eth_address = $agent_fetch[10];
			$usdt_address = $agent_fetch[11];
			
		}else {
			header('location:index.php');
		}
		
	} else {
		header('location:index.php');
	}

?>