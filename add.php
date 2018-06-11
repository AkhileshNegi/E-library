<?php
$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("library",$con);
$sql="SELECT * FROM record_stu WHERE ID='CSE13'";
$query=mysql_query($sql,$con);
$row=mysql_fetch_array($query);
echo $row['book1'];


?>