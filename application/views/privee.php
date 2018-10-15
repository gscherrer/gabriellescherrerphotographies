
 <div class="text-center">
 <button type="button" class="btn btn-primary">Télécharger les photos</button> 
 </br>
 </div>
<i class="glyphicon glyphicon-folder-open style='color: blue;'">


 <?php
 

 $nb_fichier = 0;
 var_dump($titre);
 if($dossier = opendir('./assets/images/privee/'.$titre)){
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
