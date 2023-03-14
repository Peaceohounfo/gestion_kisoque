<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kiosque | Acceuil</title>
  <!-- Liens vers Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
    /* Style pour le header */
    .navbar {
      background-color: #5ae4a7;
    }
    .btn-green {
      background-color: #5ae4a7;
    }
    .navbar-brand, .navbar-nav .nav-link {
      color: white;
    }
    .navbar-brand:hover, .navbar-nav .nav-link:hover {
      color: #dfe3e6;
    }

    /* Style pour la section principale */
    .container-fluid {
      padding: 50px 0;
    }
    .row {
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .col {
      padding: 0 20px;
    }
    .text-section {
      text-align: justify;
	  padding: 15px;
    }
    .image-section {
      height: 100%;
      min-height: 450px;
      background: url("./images/kiosque.png") no-repeat center center;
      background-size: contain;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .image-section h2 {
      color: white;
      font-size: 4rem;
      text-shadow: 2px 2px #333;
    }
  </style>
</head>
<body>
  <!-- Header -->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="#">Kiosque</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
    <div class="collapse navbar-collapse" id="navbarNav">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item active">
			   <a class="nav-link" href="index.php">Home</a>
			</li>
			<li class="nav-item">
			   <a class="nav-link" href="contact.php">Contact</a>
			</li>
			<li class="nav-item">
			   <a class="nav-link" href="login.php">Connexion</a>
			</li>
		</ul>
    </div>
  </nav>

  <!-- Section principale -->
  <div class="container-fluid">
    <div class="row" style="margin: 10px;">
      <div class="col-md-6 text-section">
        <h2>Bienvenue</h2>
        <p>La gestion de kiosque simplifiée et intuitive pour tous à l'ère de la digitalisation !</p>
        <a class="btn btn-green btn-sm" href="login.php">Se connecter</a>
      </div>
      <div class="col-md-6 image-section">
      </div>
    </div>
  </div>
</body>
</html>