</br>
<?php echo $this->session->userdata('level') ?>

 <div class="text-center">
<button id="download" type="button" class="btn btn-primary">Télécharger les photos</button>
 </div>
</br>
<div class="text-center">
	<span></span><i class="glyphicon glyphicon-folder-open "> <a href="<?= base_url()."Gallerie/showPics/messe_$titre" ?>"><button type="button" class="btn btn-secondary"> Messe</button> </a> </span>
	<span></span><i class="glyphicon glyphicon-folder-open "> <a href="<?= base_url()."Gallerie/showPics/cocktail_$titre" ?>"><button type="button" class="btn btn-secondary"> Cocktail</button> </a> </span>
	 <span></span><i class="glyphicon glyphicon-folder-open "> <a href="<?= base_url()."Gallerie/showPics/diner_$titre" ?>"><button type="button" class="btn btn-secondary"> Diner et soirée</button> </a> </span>
 </div>
 
 <?php
// var_dump($title);
		$dossier = opendir('./assets/images/privee/'.$title[1].'/'.$title[0]);
		
		if(!empty($dossier)){
			while(($fichier = readdir($dossier)) !== false ){
				if($fichier != '.' && $fichier != '..'){
					$photo[] = $fichier;
				}
			 }

	 echo "<div class='container'> <div class='row'>";
			foreach($photo as $photo){
				echo '<div class="col-md-3 col-sm-4 col-xs-6">
						<img style="width:100%"class="img-responsive" src="'.base_url().'assets/images/privee/'.$title[1].'/'.$title[0].'/'.$photo.'" />
					</div>' ;
			}
		}
		echo "</div></div>";
