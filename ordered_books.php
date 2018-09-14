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
    <table class="table">
    <thead>
      <tr>
      	<th>Serial No.</th>
        <th>Book Name</th>
        <th>Author Name</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $host="localhost";
$user="root";
$pass="";
$count = 0;
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("library",$con);
$sql1="SELECT * FROM order_books";
$query1=mysql_query($sql1,$con);
$i=1;
while($rowTS = mysql_fetch_array($query1)) { 
  $book = $rowTS['book_name']; 
  $Author = $rowTS['Author_name']; 
      echo "<tr>";
      echo "<td>".$i."</td>";
      echo "<td>".$book."</td>";
      echo "<td>".$Author."</td>";
      echo "</tr>";
	$i++;
}?>
    </tbody>
  </table>
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