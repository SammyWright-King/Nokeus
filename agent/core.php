<?php 
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);
//connect to the database
function mysqlconnect(){
				
	$host = 'localhost';
	$username = 'root';
	$password = 'nicintel';
	$database_name = 'nokuex';
				
		mysql_connect($host, $username, $password);
		mysql_select_db ($database_name);
	
}
	
	mysqlconnect();
	if(ISSET($_COOKIE['agent'])) {
		include 'session.php'; 
	}
	

?>