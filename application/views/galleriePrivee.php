
<div class="tz-gallery">

    <div class="row">
		<?php  foreach ($mariage as $mariage){  ?>
			<div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <a class="lightbox" href="<?=base_url()?>assets/images/tunnel.jpg">
                    <img src="<?=base_url()?>assets/images/tunnel.jpg" alt="Tunnel">
                </a>
                <div class="caption">
                    <h3><?php echo $mariage['titreMariage'] ?></h3>
                    <p><?php echo $mariage['description'] ?></p>
					<button type="button" id="loginModal" class="btn btn-primary" data-toggle="modal" data-target="#exempleModalCenter">  Voir les photos </button>
                </div>
            </div>
        </div>
		<?php } ?>
        
       

</div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
</body>
</html>
