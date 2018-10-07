<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>GS photographie</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="<?= base_url().'assets/css/thumbnail-gallery.css'?>">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

	<script src="<?= base_url().'assets/js/myapp.js' ?>"></script>
</head>
<body>

<!-- modal dl photo-->
<div class="modal fade in" id="exempleModalCenter" tabindex="-1" role="dialog" aria-labelledby="logoutLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mariage de A et B</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<form action="<?= base_url('Gallerie/loginDL')?>" method="post">
		  <!-- <div class="form-group">
		   
			<label for="userEmail">Email address</label>
			<input type="text" class="form-control" id="userEmail" name="userEmail" aria-describedby="emailHelp" placeholder="Enter email" required>
			<small id="emailHelp" class="form-text text-muted">Nous avons besoins de votre adresse pour vous envoyer le lien de téléchargement.</small>
		  </div> -->
		  <div class="form-group">
			<label for="userPassword">Password</label>
			<input type="password" class="form-control" id="userPassword" name="userPassword" placeholder="Password" required>
				<small id="emailHelp" class="form-text text-muted">Mot de passe fournis par les mariés</small>
		  </div>
		  <input type="hidden" class="form-control" id="titreMariage" name="titreMariage" value="mariageTest" hidden>
		  

			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
				<input class="btn btn-primary modal-login-btn" name="submit" value="Recevoir le lien de téléchargement." type="submit">
			  </div>
		</form>
    </div>
  </div>
</div> 
<!-- modal logon -->

<div class="modal fade in" id="modalLogon" tabindex="-1" role="dialog" aria-labelledby="logoutLabel" aria-hidden="true">
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
			<label for="userEmail">Email address</label>
			<input type="text" class="form-control" id="userEmail" name="userEmail" aria-describedby="emailHelp" placeholder="Enter email" required>
			<small id="emailHelp" class="form-text text-muted">Nous avons besoins de votre adresse pour vous envoyer le lien de téléchargement.</small>
		  </div> 
		  <div class="form-group">
			<label for="userPassword">Password</label>
			<input type="password" class="form-control" id="userPassword" name="userPassword" placeholder="Password" required>
				<small id="emailHelp" class="form-text text-muted">Mot de passe fournis par les mariés</small>
		  </div>
		  <input type="hidden" class="form-control" id="titreMariage" name="titreMariage" value="mariageTest" >
		  

			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
				<input class="btn btn-primary modal-login-btn" name="submit" value="Recevoir le lien de téléchargement." type="submit">
			  </div>
		</form>
    </div>
  </div>
</div>
<div class="container gallery-container">

    <h1>Bootstrap 3 Gallery</h1>

    <p class="page-description text-center">Thumbnails With Title And Description</p>
   <ul class="nav nav-tabs">
      <li role="presentation"><a href="<?= base_url() ?>">Home</a></li>
      <li role="presentation"><a href="<?= base_url() ?>vue/galleriePublique">Gallerie publique</a></li>
      <li role="presentation"><a href="<?= base_url() ?>vue/galleriePrivee">Gallerie privée</a></li>
		<li role="presentation"><a  data-toggle="modal" data-target="#modalLogon">Espace mariés</a></li>
 </ul>
</div>
