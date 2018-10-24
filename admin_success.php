<?php
$PASSWORD=$_POST["password"];
$Staff=$_POST["staff_id"];
$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("library",$con);
$sql="SELECT * FROM staff WHERE ID='$Staff' AND password='$PASSWORD'";
$query=mysql_query($sql,$con);
if(mysql_num_rows($query) > 0)
{
  $row = mysql_fetch_array($query);

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
        <div class="row">
            <div class="col-sm-3 " align="left"> 
                <div >
                    <div class="s-team-v1"><br><br><br><br><br>
                        <img class="img-responsive "  src="book7.png" alt="Image">
                        <div class="g-text-center--xs">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 text-center">
            <hr>
                    <h1 class="intro-text text-center">Welcome: 
                        <strong><?php echo $row["name"];?></strong>
                    </h1>
                    <hr>
         <br><a href="issue_login.php" class="btn btn-info  btn-lg" role="button" >Issue/submit book</a><br><br>
                 <a href="new_login.html" class="btn btn-info  btn-lg" role="button" >New student id</a><br><br>
                 <a href="new_book.html" class="btn btn-info  btn-lg" role="button" >Add new book</a><br><br>
                 <a href="ordered_books.php" class="btn btn-info  btn-lg" role="button" >See ordered books</a>
            </div>
            <div class="col-sm-2 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">                   
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
<?php 
}
else
{
echo"Wrong ID";
}
?>