<?php 

$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("library",$con);

$sql="CREATE TABLE staff (name varchar(150),ID varchar(50),password varchar(150))";

if(mysql_query($sql,$con))
{

echo "table created"; 

}
else
{

	echo"error";
}


?>