<?php 

$book_name =$_POST['book_name'];
$copies =$_POST['copies'];
$location =$_POST['location'];
$author =$_POST['author'];
$available =$_POST['available'];
$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("library",$con);
$sql = "INSERT INTO book_details (book_name, no_of_copies, location, Author, Available)  
VALUES ('$book_name', '$copies', '$location', '$author', '$available')";
$retval = mysql_query( $sql, $con);
if(! $retval ) {
      die('Could not update data1: ' . mysql_error());
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
<link href="css2/creative.css" rel="stylesheet">
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
        <div class="row1">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">New book Added: 
                        <strong><?php echo $book_name."</br>";?></strong>
                    </h2>
                    <hr>

<hr>
                    <h2 class="intro-text text-center">Number of Copies: 
                        <strong><?php echo $copies."</br>";?></strong>
                    </h2>
                    <hr>


<hr>
                    <h2 class="intro-text text-center">Location: 
                        <strong><?php echo $location."</br>";?></strong>
                    </h2>
                    <hr>


<hr>
                    <h2 class="intro-text text-center">Author Name: 
                        <strong><?php echo $author."</br>";?></strong>
                    </h2>
                    <hr> 
<hr>
                    <h2 class="intro-text text-center">Number of Copies Available: 
                        <strong><?php echo $available."</br>";?></strong>
                    </h2>
                    <hr><br>                
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