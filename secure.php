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
    <a class="navbar-brand" href="#">Bank</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Database</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="login.php">Login</a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- Begin page content -->
  <section class="container-fluid">
    <!-- Begin page content -->
    <section class="row">
    <section class="col-md-6 content">
    <h1>Salle des coffres</h1>

    Rechercher un coffre en particulier :

    <form method="POST" action="secure.php">
      <div class="form-group">
        <input type="text" class="form-control" name="nom_coffre" placeholder="Nom du coffre">
      </div>

      <button type="submit" class="btn btn-primary">Chercher</button>
    </form>

    <section id="result">

      <?php
      if(isset($_POST['nom_coffre'])) {
        echo "Pas de résultat pour.. " . $_POST['nom_coffre'];
      }
      ?>

    </section>
  </section>
    <section class="col-md-6 bg-open"></section>
  </section>
  <!-- Optional JavaScript -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src='script.js'></script>
</body>
</html>
