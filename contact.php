<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kiosque | Contact</title>
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
    iframe{
      width: 100%;
      height: 100%;
    }
    .container-fluid{
      margin-top: 60px;
    }
    #contatti{
      background-color: #70c3be;
      letter-spacing: 2px;
      }
    #contatti a{
      color: #fff;
      text-decoration: none;
    }


    @media (max-width: 575.98px) {

      #contatti{padding-bottom: 800px;}
      #contatti .maps iframe{
        width: 100%;
        height: 450px;
      }
    }


    @media (min-width: 576px) {

      #contatti{padding-bottom: 800px;}

      #contatti .maps iframe{
        width: 100%;
        height: 450px;
      }
    }

    @media (min-width: 768px) {

      #contatti{padding-bottom: 350px;}

      #contatti .maps iframe{
        width: 100%;
        height: 850px;
      }
    }

    @media (min-width: 992px) {
      #contatti{padding-bottom: 200px;}

      #contatti .maps iframe{
        width: 100%;
        height: 700px;
      }
    }


    #author a{
      color: #fff;
      text-decoration: none;
        
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
			<li class="nav-item">
			   <a class="nav-link" href="index.php">Home</a>
			</li>
			<li class="nav-item active">
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
  <div class="row" style="height:550px;">
      
      <div class="col-md-6">
        <h3 class="text-uppercase mt-3 font-weight-bold">Nos contacts</h3>
        <h6>
          Nous sommes ravis de pouvoir répondre à vos questions et de recevoir vos commentaires. N'hésitez pas à nous contacter en utilisant
          le formulaire ci-dessous. Nous nous efforçons de répondre à toutes les demandes dans les meilleurs délais.
        </h6>
        <form action="">
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <input type="text" class="form-control mt-2" placeholder="Nom/Sociéte" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <input type="text" class="form-control mt-2" placeholder="Objet" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <input type="email" class="form-control mt-2" placeholder="Email" required>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <input type="number" class="form-control mt-2" placeholder="Telephone" required>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="votre message ici ..." rows="3" required></textarea>
              </div>
            </div>
            <div class="col-12">
              <button class="btn btn-light" type="submit">Envoyer</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>