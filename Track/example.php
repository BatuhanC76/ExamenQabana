<html>
<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "test";

$pdo = new PDO(
    'mysql:host='.$server.';dbname='.$database,
    $username,
    ''); 


$tracking_page_name=(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] 
=== 'on' ? "https" : "http") . "://" . 
$_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']; 
$ref='test';
$agent=$_SERVER['HTTP_USER_AGENT'];
$ip=$_SERVER['REMOTE_ADDR']; 
$host_name = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$strSQL = "INSERT INTO track(tm, ref, agent, ip, tracking_page_name)    VALUES(curdate(),'$ref','$agent','$ip','$tracking_page_name')";
$test= $pdo->exec($strSQL);

?>
</html>