<div class="tz-gallery">

    <div class="row">
		<?php  foreach ($mariage as $mariage){  ?>
			<div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                    <img src="<?=base_url()?>assets/images/privee/<?php echo $mariage['titreMariage']?>/<?php echo $mariage['mariage_pic']?>" alt="Tunnel">
                <div class="caption">
                    <h3 id="mariageTitle"><?php echo $mariage['titreMariage'] ?></h3>
					<input type="hidden" id="hiddenMariageTitle" value="<?php echo $mariage['titreMariage'] ?>">
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
