<?php

$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("library",$con);
$sql= "INSERT INTO staff (name,ID,password) VALUES ('diksha','CSE14','diksha123')";
$query= mysql_query($sql,$con);


?>