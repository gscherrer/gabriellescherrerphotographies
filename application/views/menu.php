<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>GS Photographie</title>
<link rel = "icon" type = "image/png" href="<?= base_url().'assets/images/logo1.png'?>">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<!-- 	<link rel="stylesheet" href="<?= base_url().'assets/bootstrap-4.0.0/assets/css/bootstrap.min.css'?>"> -->
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="<?= base_url().'assets/css/thumbnail-gallery.css'?>">
	<link rel="stylesheet" href="<?= base_url().'assets/css/general.css'?>">
	<link rel="stylesheet" href="<?= base_url().'assets/css/gp.css'?>">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script type="text/javascript"	src="https://slideshow.triptracker.net/slide.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="<?= base_url().'assets/js/myapp.js' ?>"></script>
</head>
<body>

<!-- <div class="modal fade in" id="modalLogon" tabindex="-1" role="dialog" aria-labelledby="logoutLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Se connecter</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<form action="<?= base_url('Gallerie/login')?>" method="post">
			<div class="form-group">
				<label for="userEmail">Adresse mail</label>
				<input type="text" class="form-control" id="userEmail" name="userEmail" aria-describedby="emailHelp" placeholder="Entrer votre email" required>
		  </div> 
		  <div class="form-group">
			<label for="userPassword">Mot de passe</label>
			<input type="password" class="form-control" id="userPassword" name="userPassword" placeholder="Entrer votre mot de passe" required>
		  </div>
		  <input type="hidden" class="form-control" id="titreMariage" name="titreMariage" value="" >
		  

			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
				<input class="btn btn-primary modal-login-btn" name="submit" value="Connexion" type="submit">
			  </div>
		</form>
    </div>
  </div>
</div> -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
<img class="img-thumbnail" style="width: 100px" src="<?= base_url().'assets/images/logo1.png'?>">
  <a class="navbar-brand" href="#">Gabrielle Scherrer Photographie</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">	
    <div class="navbar-nav">
      <a class="nav-item nav-link active"href="<?= base_url() ?>">Home</a>
      <a class="nav-item nav-link" href="<?= base_url() ?>vue/galleriePublique">Galerie publique</a>
      <a  class="nav-item nav-link" href="<?= base_url() ?>vue/galleriePrivee">Galerie privée</a>
	 <?php 
	 //Espace utilisateur pour la connexion, au cas où
		/*if ($this->session->userdata('iduser') == null ) 
		{
			//Enlever le disabled du data-target !!!!!
			echo '<a class="nav-item nav-link disabled" data-toggle="modal" data-target="#modalLogon">Espace Utilisateur</a>';
		}
		elseif($this->session->userdata('iduser') !== null ){
			echo '<a class="nav-item nav-link disabled" href="'.base_url('Gallerie/logout').'">Déconnexion</a>';
		}*/
	?>
    </div>
  </div>
</nav>
<!-- <row class="text-center">
	<div class="container gallery-container ">

		<h1>Gabrielle Scherrer Photographie</h1>

		<p class="page-description">Vos photos de mariage</p>
	   <ul class="list-inline justify-content-center">
			<li role="presentation"><a href="<?= base_url() ?>">Home</a></li>
			<li role="presentation"><a href="<?= base_url() ?>vue/galleriePublique">Galerie publique</a></li>
			<li role="presentation"><a href="<?= base_url() ?>vue/galleriePrivee">Galerie privée</a></li>
			<li role="presentation"><a data-toggle="modal" data-target="#modalLogon">Connexion</a></li>
	 </ul>
	</div>
</row> -->
