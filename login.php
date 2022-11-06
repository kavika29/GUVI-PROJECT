<?php

$host="localhost";
$user="root";
$password="";
$db="sample";

mysql_connect($host,$user,$password);
mysql_select_db($db);

if(isset(['username'])){

$username=$_POST['username'];
$password=$_POST['password'];

$sql="select * from login where user="".$username."'AND password='".$password."'
limit l";

$result=mysql_query($sql);

if(mysql_num_rows($result)==1)
{
echo"you have successfully logged in ";
exit();
}
else
 {
echo"you have entered incorret possword";
 }
}



?>