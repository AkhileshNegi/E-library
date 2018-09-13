<?php

$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("library",$con);
$sql= "INSERT INTO staff (name,ID,password) VALUES ('Akki','CSE03','Akki120220')";
$query= mysql_query($sql,$con);


?>