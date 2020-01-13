<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "test";

$connId = mysqli_connect($server, $username, $password) or die("Cannot connect to server");
$pdo = new PDO(
    'mysql:host=localhost;dbname=test',
    'root',
    ''); 

$result = "CREATE TABLE track(
`id` int(6) NOT NULL auto_increment,
`tm` varchar(20) NOT NULL default '',
`ref` varchar(250) NOT NULL default '',
`agent` varchar(250) NOT NULL default '',
`ip` varchar(20) NOT NULL default '',
`ip_value` int(11) NOT NULL default '0',
`domain` varchar(20) NOT NULL default '', 
`tracking_page_name` varchar(250) NOT NULL default '',
 UNIQUE KEY `id` (`id`)
 ) ENGINE=MyISAM DEFAULT CHARSET=latin1 "; 

$tracking_page_name=(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . 
$_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']; 
$ref='test';
$agent=$_SERVER['HTTP_USER_AGENT'];
$ip=$_SERVER['REMOTE_ADDR'];
$host_name = gethostbyaddr($_SERVER['REMOTE_ADDR']);  

$strSQL = "INSERT INTO track(tm, ref, agent, ip, tracking_page_name) 
VALUES(curdate(),'$ref','$agent','$ip','$tracking_page_name')";

$data = $pdo->exec($strSQL);
var_dump($data);  var_dump($pdo->errorInfo()); 
exit;
if (mysqli_query($result))
{ 
 print "Success in TABLE creation!......";
}  
else 
{
die('MSSQL error: ' . mssql_get_last_message());
}


?>



