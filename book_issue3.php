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
            <div class="col-sm-3 " align="left"><br>
                    <img class="img-responsive "  src="img/bluebook.png" alt="Image">
            </div>
            <div class="col-sm-6 text-center">
                <hr><h1 class="title" align="center">Welcome</h1><hr>
                <form action="issue_success3.php" method="POST">
                    <label for="name">Enter book Name:</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter book name " name="b_name"><br>
                    <input type="submit" class="btn btn-success" value="Submit">
                    <input type="reset" class="btn btn-info" value="Reset">
                </form>                       
            </div>
            <div class="col-sm-2 " align="right"> <br>
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
