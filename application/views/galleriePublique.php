 <div class="tz-gallery">

        <div class="row">
<?php

 $nb_fichier = 0;
 if($dossier = opendir('./assets/images/public/')){
	 while(($fichier = readdir($dossier)) !== false ){
			 if($fichier != '.' && $fichier != '..'){
				$photo[] = $fichier;
			 }
		 }
	 }
 
 foreach($photo as $photo){
	echo ' <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
				<img class="img-thumbnail" src="'.base_url().'assets/images/public/'.$photo.'">
            </div>
        </div>' ;
 }
 ?>
    </div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
</body>
</html>
