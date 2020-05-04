</br>
<?php echo $this->session->userdata('level') ?>

 <div class="text-center">
 <button type="button" class="btn btn-primary">Télécharger les photos</button> 
 </div>
</br>
<div class="text-center">
	<span></span><i class="glyphicon glyphicon-folder-open "> <a href="<?= base_url()."Gallerie/showPics/messe_$titre" ?>"><button type="button" class="btn btn-secondary"> Messe</button> </a> </span>
	<span></span><i class="glyphicon glyphicon-folder-open "> <a href="<?= base_url()."Gallerie/showPics/cocktail_$titre" ?>"><button type="button" class="btn btn-secondary"> Cocktail</button> </a> </span>
	 <span></span><i class="glyphicon glyphicon-folder-open "> <a href="<?= base_url()."Gallerie/showPics/diner_$titre" ?>"><button type="button" class="btn btn-secondary"> Diner et soirée</button> </a> </span>
 </div>
 
 <?php
 var_dump($title);
		$dossier = opendir('./assets/images/privee/'.$title[1].'/'.$title[0]);
		
		if(!empty($dossier)){
			while(($fichier = readdir($dossier)) !== false ){
				if($fichier != '.' && $fichier != '..'){
					$photo[] = $fichier;
				}
			 }

	 echo "<row>";
			foreach($photo as $photo){
				echo ' <div class="col-sm-6 col-md-4">
						<div class="thumbnail">
							<img class="img-thumbnail'.$title[1].' src="'.base_url().'assets/images/privee/'.$title[1].'/'.$title[0].'/'.$photo.'" >
						</div>
					</div>' ;
			}
		}
		echo "</row>";
