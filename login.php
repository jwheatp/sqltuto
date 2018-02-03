<?php
if(isset($_POST['pseudo'], $_POST['password'])) {
  $servername = "localhost";
  $username = "root";
  $password = "stuart";
  $dbname = "bank";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  $sql = "SELECT * FROM users WHERE name='". $_POST['pseudo'] ."' AND password='". $_POST['password']."'";

  $result = mysqli_query($conn, $sql);

  if(!$result || mysqli_num_rows($result) > 0) {
    header('Location: secure.php');
  }
  else {
    echo "Wrong Password";
  }
  // if ($result || mysqli_num_rows($result) > 0) {

}
?>
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="stylesheet" href="style.css">

  <title>Hacker Challenge</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">SecureBank</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Database</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="login.php">Accès aux coffres</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- Begin page content -->

    <section class="container-fluid">
      <!-- Begin page content -->
      <section class="row">
      <section class="col-md-8 content">
        <h1>Accès aux coffres</h1>
    <form id="form" method="POST" action="login.php">
      <div class="form-group">
        <label for="exampleInputEmail1">Login</label>
        <input type="text" class="form-control" id="pseudo" name="pseudo" aria-describedby="emailHelp" placeholder="Enter login">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
      </div>

      <button type="submit" id="login" class="btn btn-primary">Login</button>
    </form>

    <section id="result">

    </section>
  </section>
    <section class="col-md-4 bg"></section>
  </section>
</section>
  <!-- Optional JavaScript -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src='script.js'></script>
</body>
</html>
