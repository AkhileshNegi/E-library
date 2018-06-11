<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>WELCOME</h2>
  <form action="stu_success.php" method="POST">
<div class="form-group">
      <label for="id">ID:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name " name="id">
  </div>
  <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
    </div>
     <input type="submit" class="btn btn-success" value="Submit">
          <input type="reset" class="btn btn-info" value="Reset">
          </form>
</div>

</body> 
</html>
