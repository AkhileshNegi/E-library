<!DOCTYPE html>
<html lang="en">
<head>

  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<nav class="navbar 	navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="home.php">Library</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home.php">Home</a></li>
      <li><a href="stu_login.html">Student Login</a></li>
      <li><a href="admin_login.html">Admin login</a></li> 
      <li><a href="#">Contacts</a></li> 
       <li><a href="#">About us</a></li> 
    </ul>
  </div>
</nav>


        <div class="row">
            <div class="box">
                <div class="col-sm-12 text-center">
                    <div id="carousel-example-generic" class="carousel slide">
                        <!-- Indicators -->
                        <ol class="carousel-indicators hidden-xs">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img class="img-responsive img-full" src="book3.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="bg3.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-responsive img-full" src="book1.jpg" alt="">
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="icon-prev"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="icon-next"></span>
                        </a>
                    </div></div></div> </div>




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