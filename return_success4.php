<?php
$stu_id=$_COOKIE["ID"];
$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("library",$con);
$sql1="SELECT * FROM record_stu WHERE id='$stu_id'";
$retval1 = mysql_query( $sql1, $con);
$row1=mysql_fetch_array($retval1);
$change_book = $row1['book4'];
$sql2="SELECT * FROM book_details WHERE book_name='$change_book'";
$retval2 = mysql_query( $sql2, $con);
$row2=mysql_fetch_array($retval2);
$count = $row2['Available'];
$count++;
$sqlbook = "UPDATE book_details
      SET Available='$count'
      WHERE book_name='$change_book'";
$bookrenew = mysql_query( $sqlbook, $con);
$sql = "UPDATE record_stu
      SET book4=''
      WHERE id='$stu_id'";
  $retval = mysql_query( $sql, $con);   
   if(! $retval ) {
      die('Could not update data: ' . mysql_error());
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>E-Library</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<link href="css/main.css" rel="stylesheet">    
<link href="css2/creative.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="home.php">Library</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="home.php">Home</a></li>
      <li><a href="stu_login.html">Student Login</a></li>
      <li class="active" ><a href="admin_login.html">Admin login</a></li> 
      <li><a href="#">Contacts</a></li> 
       <li><a href="#">About us</a></li> 
    </ul>
  </div>
</nav>
<section id="page-breadcrumb">
    <div class="vertical-center sun">
            <div class="row">
                <div class="col-lg-12 text-center bottom-separator">
                    <img src="ico.png" class="img-responsive inline" alt="">
                </div>
            <div class="row">
                <div class="col-lg-12"><hr>
                    <h1 class="intro-text text-center"> 
                        <strong>B</strong>ook returned
                    </h1><hr>
                </div>
            </div>
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <a  href="db_stu1.php" button type="button" class="btn btn-info"><h1 class="text-center">Return more books</h1></a></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
<div class="row">
    <div class="box">
        <div class="col-sm-12 text-center">
            <h2 class="intro-text text-center">Checking library status
                <strong>On-The-Go</strong>
            </h2>
           <hr class="visible-xs">
            <p>An online library system to check library card information by student in 
            order to know the status of number of books issued and also check our library card details.</p>
                </div>
            </div>
        </div>
 </div>
</div>
</body>
</html>