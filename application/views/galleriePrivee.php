<div class='container'>
<div class='row s4'>
 <?php
foreach($mariage as $mariage){
	echo "<div class='col-md-6 col-lg-3'>
      <div class='card'>
        <img class='card-img-top' src='".base_url()."assets/uploads/mariage_snapshot/".$mariage['snapshot_link']."'>
        <div class='card-block'>
          <h3 class='card-title'>". $mariage['titre']."</h3>
          <p class='card-text'><a href='".base_url()."vue/download/".$mariage['dl_link']."' class='btn btn-primary'>Télécharger les photos</a></p></br>
        </div>
      </div>
    </div>";
	/*echo $mariage['titre'];
	echo $mariage['date'];
	echo $mariage['dl_link'];*/
}
?>
  </div>
</div>
