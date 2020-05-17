
<div class="row">
	<div class="col-lg-10 offset-lg-1">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
		  <ol class="carousel-indicators">
		  
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			
		  </ol>
		  <div class="carousel-inner">
		  <?php $first = true; ?>
			<?php foreach($photo as $photo): ?>
			
				<div class="carousel-item <?php echo ($first)? 'active' :''; ?>">
				  <img class="d-block w-100 car" src="assets/images/public/<?= $photo ?>" alt="First slide">
				</div>
				<?php $first = false; ?>
			<?php endforeach; ?>
		  </div>
		  <a class="carousel-control-prev offset-lg-1" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		  </a>
		  </div>
	</div>
</div>
<div class="row">
	<div class="col-lg-9 offset-lg-2">
		<div class="mbr-section mbr-parallax-background col-undefined" id="content5-3" data-rv-view="46" style="background-image: url(assets/images/photo-3.jpg); padding-top: 9rem; padding-bottom: 9rem;">
			<div class="mbr-overlay" style="opacity: 0.7; background-color: rgb(255, 255, 255);"></div>
			<div class="container">
				<h3 class="mbr-section-title display-2">Rendre éternels des moments de bonheur. </h3>
				<div class="lead"><p>

		Capturer des sourires francs, des regards complices, amoureux, fiers, attendris, espiègles, malicieux. 
		C'est cela pour moi être photographe. </br>N'hésitez pas à me contacter pour plus de renseignements sur mon travail, je vous répondrai avec joie !</p></div>
			</div>
		</div>
	</div>

</div>

<div class="row text-center">
	<div class="col-lg-8 offset-lg-2 ">
		<h3> Contactez-moi! </h3>
	</div>
</div>
<div class="row text-center">
	<div class="col-sm-6 offset-sm-3">
		<form action="<?= base_url('Vue/contact'); ?>" method="post" id="contact-form" data-form-title="Contact Form">
			<div class="form-group text-center">
				<input type="text" class="form-control" name="name" required="" placeholder="Nom*" data-form-field="Name">
			</div>
			<div class="form-group">
				<input type="email" class="form-control" id="email" name="email" required="" placeholder="Email*" data-form-field="Email">
			</div>
			<div class="form-group">
				<input type="tel" class="form-control" id="phone" name="phone" placeholder="Téléphone" data-form-field="Phone">
			</div>
			<div class="form-group">
				<textarea class="form-control" id="message" name="message" placeholder="Message" data-form-field="Message"></textarea>
			</div>
			
				<input type="submit" name="envoyer" value="Envoyer" class="btn btn-secondary-outline">

		</form>
	</div>
</div>



