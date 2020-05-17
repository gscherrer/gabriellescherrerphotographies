
<?php
	if(!empty($_SESSION['status'])) { 
		echo $_SESSION['status'];
		unset($_SESSION['status']);
	} 
	if(!empty($_SESSION['db'])) { 
		echo $_SESSION['db'];
		//unset($_SESSION['db']);
	} 
?>

<div class="row">
	<div class="col-md-4 offset-md-4 text-center">
		<h3> Créer un nouveau mariage </h3>
	</div>
</div>	

<div class="row">
	<div class="col-md-4 offset-md-4">
		<form action="<?= base_url('admin/setMariage/')?>" method="POST">
		  <div class="form-group">
			<label for="titre">Titre</label>
			<input type="text" class="form-control" id="titre" name="titre" >
		  </div>
		  <div class="form-group">
			<label for="date">Date du mariage</label>
			<input type="date" class="form-control" id="date" name="date">
		  </div>
		 
		  <button type="submit" class="btn btn-primary">Valider</button>
		</form>
	</div>
</div>
</br>
<div class="row">
	<div class="text-center col-md-4 offset-md-4">
		<h3> Liste des mariages </h3>
		
	</div>
</div>	
<table class="table">
<thead>
	<tr>
		<th> Titre </th>
		<th> Date du mariage </th>
		<th> Supprimer l'album </th>
		<th> Album photo</th>
		<th> Changer la photo de profile </th>
		<th> Photo de profile</th>
		<th>Mot de passe</th>
	</tr>
</thead>
<?php
$i=0;
$j=0;
echo "<tbody>";
	foreach($mariage as $mariage){
		echo '<tr>';
			echo '<td>'.$mariage['titre'].'</td>';
			echo '<td>'.$mariage['date'].'</td>';
			echo '<td class="text-center"><a style="color:red;" href="'.base_url().'admin/deleteMariage/'.$mariage['id'].'"><svg class="bi bi-x-circle-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M16 8A8 8 0 110 8a8 8 0 0116 0zm-4.146-3.146a.5.5 0 00-.708-.708L8 7.293 4.854 4.146a.5.5 0 10-.708.708L7.293 8l-3.147 3.146a.5.5 0 00.708.708L8 8.707l3.146 3.147a.5.5 0 00.708-.708L8.707 8l3.147-3.146z" clip-rule="evenodd"/>
</svg></a></td>';
			echo '<td><form action="'.base_url('admin/do_upload/').'" method="POST" enctype="multipart/form-data" id="'.$i.'">
			 <div class="custom-file" style="margin-bottom: 15px; margin-top: 15px;">
				<input type="file" class="custom-file-input" id="userfile'.$i.'" name="userfile" lang="fr" />
				<label class="custom-file-label" for="userfile">Sélectionner un fichier</label>
			</div>
			<input type="hidden" class="form-control" name="file_name" value="'.$mariage['dl_link'].'"/>
			<button type="submit" class="btn btn-primary" form="'.$i.'">Valider</button>
		</form></td>';
		echo '<td><form action="'.base_url('admin/uploadSnapshot/').'" method="POST" enctype="multipart/form-data" id="'.$i.'-'.$j.'">
			 <div class="custom-file" style="margin-bottom: 15px; margin-top: 15px;">
				<input type="file" class="custom-file-input" id="userfile'.$i.'-'.$j.'" name="userfile1" lang="fr" />
				<label class="custom-file-label" for="userfile1">Sélectionner un fichier</label>
			</div>
			<input type="hidden" class="form-control" name="id" value="'.$mariage['id'].'"/>
			<button type="submit" class="btn btn-primary" form="'.$i.'-'.$j.'">Valider</button>
		</form></td>';
		echo '<td> <img style="height:50px;" src="'.base_url().'assets/uploads/mariage_snapshot/'.$mariage['snapshot_link'].'"></td>';
		echo '<td>'.$mariage['mdp'].'</td>';
		echo '</tr>';
		$i++;
		$j++;
	}
?>
</tbody>
</table>


<script>
  $("input[type=file]").change(function (e){$(this).next('.custom-file-label').text(e.target.files[0].name);})
</script>
