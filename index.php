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
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Database</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Accès aux coffres</a>
        </li>
      </ul>
    </div>
  </nav>

<section class="container-fluid">
  <!-- Begin page content -->
  <section class="row">
  <section class="col-md-8 content">
    <h1>Bienvenue sur SecureBank.</h1>
    <form id="database-form" method="POST" action="index.php">
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Sauras-tu trouvrer le mot de passe ?</label>
        <textarea class="form-control" name="query" id="query" rows="5">SELECT * FROM users</textarea>
      </div>
      <button id="execute" type="submit" class="btn btn-primary">Execute</button>

    </form>
    <div id="result">
      <?php
      if(isset($_POST['query'])) {
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

        $sql = $_POST['query'];

        $result = mysqli_query($conn, $sql);

        if ($result || mysqli_num_rows($result) > 0) {

          // output data of each row
          echo "<table class='table'>";
          while($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["money"]. "</td></tr>";
          }
          echo "</table>";
        } else {
          echo "0 results";
        }

        mysqli_close($conn);
      }
      ?>
    </div>

  </section>
    <section class="col-md-4 bg"></section>
  </section>
</section>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
</body>
</html>
