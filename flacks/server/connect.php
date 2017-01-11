<?
	$host = "localhost";
    $user = "flacks";
    $password = "default";
    $db = "flacks";
    
    session_start();
    
    mysql_connect($host,$user,$pass);
    mysql_select_db($db);
?>