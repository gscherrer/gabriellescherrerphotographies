<?php
/**
 * Created by PhpStorm.
 * User: guill
 * Date: 07/09/2018
 * Time: 14:50
 */
 
 $nb_fichier = 0;
 if($dossier = opendir('./assets/upload/'.$titre)){
	 while(($fichier = readdir($dossier)) !== false ){
			 if($fichier != '.' && $fichier != '..'){
				$photo[] = $fichier;
			 }
		 }
	 }
 
 foreach($photo as $photo){
	echo ' <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
				<img src="'.base_url().'assets/upload/'.$titre.'/'.$photo.'" alt="Harley1">
            </div>
        </div>' ;
 }
