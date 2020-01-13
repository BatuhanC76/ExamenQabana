<html>
<body>
<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "test";

$con = mysqli_connect("localhost", "root", "") or die("Cannot connect to server");
$pdo = new PDO(
    'mysql:host=localhost;dbname=test',
    'root',
    ''); 


    $link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] 
                === 'on' ? "https" : "http") . "://" . 
          $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']; 
// Display the complete URL 
echo $link; 


$query= "SELECT * FROM track";
$result= mysqli_query($query);
$num= mysqli_num_rows($result);
mysqli_close($con);


?>
<table border="1" cellspacing="2" cellpadding="2">
<tr>
<th><font face="Arial, Helvetica, sans-serif">id</font></th>
<th><font face="Arial, Helvetica, sans-serif">time</font></th>
<th><font face="Arial, Helvetica, sans-serif">http referer</font></th>
<th><font face="Arial, Helvetica, sans-serif">user agent</font></th>
<th><font face="Arial, Helvetica, sans-serif">ip address</font></th>
<th><font face="Arial, Helvetica, sans-serif">ip value</font></th>
<th><font face="Arial, Helvetica, sans-serif">domain</font></th>
<th><font face="Arial, Helvetica, sans-serif">tracking_page_name</font></th>
<th><font face="Arial, Helvetica, sans-serif">Host_name</font></th>
</tr>

<?php
$i=0;
while ($i < $num) {

$f1=mysqli_result($result,$i,"id");
$f2=mysqli_result($result,$i,"tm");
$f3=mysqli_result($result,$i,"ref");
$f4=mysqli_result($result,$i,"agent");
$f5=mysqli_result($result,$i,"ip");
$f6=mysqli_result($result,$i,"ip_value");
$f7=mysqli_result($result,$i,"domain");
$f8=mysqli_result($result,$i,"tracking_page_name");
$f9=mysqli_result($result,$i,"host_name");
?>


<tr>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f1; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f2; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f3; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f4; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f5; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f6; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f7; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f8; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f9; ?></font></td>
</tr>

<?php
$i++;
}
?>
</body>
</html>