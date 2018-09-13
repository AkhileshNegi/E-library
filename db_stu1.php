<?php
$ID1=$_COOKIE["ID"];
$host="localhost";
$user="root";
$pass="";
$con=mysql_connect($host,$user,$pass) or die("unable to connect");
mysql_select_db("library",$con);
$sql1="SELECT * FROM record_stu WHERE ID='$ID1'";
$query1=mysql_query($sql1,$con);
$sql="SELECT * FROM record_stu WHERE ID='$ID1'";
$query=mysql_query($sql,$con);
if(mysql_num_rows($query) > 0)
{
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
    <section>
        <div style="background-image: url('img/1920x1080/107.jpg');">
            <hr>
            <h2 class="intro-text text-center"><font color="black">Welcome
                <strong><?php echo "$ID1";?></strong></font>
            </h2>
            <hr>
            <hr>
            <h2 class="intro-text text-center">
                <font color="black">Book1:
                    <strong>
                        <?php 
                            $row1=mysql_fetch_array($query1);
                            echo $row1['book1'];
                        ?>
                    </strong>
                </font>&nbsp &nbsp &nbsp &nbsp
                <a href="book_issue1.php" button type="button" class="btn btn-success">Issue</a></button>
                <a href="return_success1.php" button type="button" class="btn btn-warning">Return</a></button>
            </h2>
            <hr>
            <hr>
            <h2 class="intro-text text-center">
                <font color="black">Book2:
                    <strong>
                <?php 
                    echo $row1['book2'];
                ?>
                    </strong>
                </font>&nbsp &nbsp &nbsp &nbsp
                <a href="book_issue2.php" button type="button" class="btn btn-success">Issue</a></button>
                <a href="return_success2.php" button type="button" class="btn btn-warning">Return</a></button>
            </h2>
            <hr>
            <hr>
            <h2 class="intro-text text-center">
                <font color="black">Book3:
                    <strong>
                    <?php 
                     echo $row1['book3'];
                    ?>
                    </strong>
                </font>&nbsp &nbsp &nbsp &nbsp
                <a href="book_issue3.php" button type="button" class="btn btn-success">Issue</a></button>
                <a href="return_success3.php" button type="button" class="btn btn-warning">Return</a></button>
            </h2>
            <hr>
            <hr>
            <h2 class="intro-text text-center">
                <font color="black">Book4:
                    <strong>
                <?php 
                 echo $row1['book4'];
                ?>
                    </strong>
                </font>&nbsp &nbsp &nbsp &nbsp
                 <a href="book_issue4.php" button type="button" class="btn btn-success">Issue</a></button>
                <a href="return_success4.php" button type="button" class="btn btn-warning">Return</a></button>
            </h2>
            <hr>
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
</body>
</html>
<?php
}
else
{
echo"Cant issue try another ID";
}
?>