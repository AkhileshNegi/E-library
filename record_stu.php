<?php 

$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("library",$con);

$sql="CREATE TABLE record_stu (id VARCHAR(50),book1 VARCHAR(50),book2 VARCHAR(50),book3 VARCHAR(50),book4 VARCHAR(50))";

if(mysql_query($sql,$con))
{

echo "table created"; 

}
else
{

	echo"error";
}


?>