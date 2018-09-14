<?php
$ID=$_POST["id"];
$PASSWORD=$_POST["password"];
$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("library",$con);
$sql = "SELECT * FROM details_stu WHERE id='$ID' AND password='$PASSWORD'";
$query = mysql_query( $sql, $con);
   if(! $query ) {
      die('Could not update data: ' . mysql_error());
   }
//Checking if its a valid student id or not
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
      <li class="active" ><a href="stu_login.html">Student Login</a></li>
      <li><a href="admin_login.html">Admin login</a></li> 
      <li><a href="#">Contacts</a></li> 
       <li><a href="#">About us</a></li> 
    </ul>
  </div>
</nav>
        <section id="page-breadcrumb">
        <div class="g-color--white-opacity-light" style="background-image: url('img/1920x1080/120.png');">
         <div class="row1">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
 <h2 class="intro-text text-center">Welcome
         <strong><?php echo $row["name"]."</br>";?>
        </strong>
</h2><hr>
<?php //ISSUE BOOKS?>
    <hr><h2 class="intro-text text-center">Book1:
                        <strong>
                        <?php 
                        $sql1="SELECT * FROM record_stu WHERE ID='$ID'";
                        $query1=mysql_query($sql1,$con);

                         $row1=mysql_fetch_array($query1);
                         echo $row1['book1'];?></strong></h2>
                    <hr >
<hr>
                    <h2 class="intro-text text-center">Book2:<strong>
                        <?php echo $row1['book2']; ?></strong></h2><hr>
<hr>
                    <h2 class="intro-text text-center">Book3:<strong>
           <?php  echo $row1['book3']; ?>
                       </strong></h2><hr>
<hr>
                    <h2 class="intro-text text-center">Book4:<strong>
                        <?php echo $row1['book4'];?>
                        </strong></h2>

<hr>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
      <div class="col-sm-3 " align="left"> 
      </div>
      <div class="col-sm-6 text-center">
        <a href="availability.php" class="btn btn-info  btn-lg" role="button" >Check Available books</a>
      <br><br>
        <a href="order_books.php" class="btn btn-info  btn-lg" role="button" >Order books</a>
      </div>
      <div class="col-sm-3 " align="left"> 
      </div>
      <br><br>
</section>

                <div class="row">
            <div class="box">
                <div class="col-sm-12 text-center">
                    <hr>
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
  { echo"INVALID ID";}
mysql_close($con);
?>