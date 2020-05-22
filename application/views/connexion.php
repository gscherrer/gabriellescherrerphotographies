<div class="row">
  <div class="col-lg-4 offset-lg-4 text-center">
			<h4 class=" w-100 font-weight-bold">Connexion</h4>
  </div>

</div>
  <div class="row">

    <div class="col-lg-10 offset-lg-1 justify-content-center ">
        <form action="<?= base_url('admin/logIn'); ?>" method="post" id="contact-form" data-form-title="Contact Form">
  			  <input type="email" name="mail" id="form3" class="form-control validate">
          <svg class="bi bi-envelope" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  				  <path fill-rule="evenodd" d="M14 3H2a1 1 0 00-1 1v8a1 1 0 001 1h12a1 1 0 001-1V4a1 1 0 00-1-1zM2 2a2 2 0 00-2 2v8a2 2 0 002 2h12a2 2 0 002-2V4a2 2 0 00-2-2H2z" clip-rule="evenodd"/>
  				  <path fill-rule="evenodd" d="M.071 4.243a.5.5 0 01.686-.172L8 8.417l7.243-4.346a.5.5 0 01.514.858L8 9.583.243 4.93a.5.5 0 01-.172-.686z" clip-rule="evenodd"/>
  				  <path d="M6.752 8.932l.432-.252-.504-.864-.432.252.504.864zm-6 3.5l6-3.5-.504-.864-6 3.5.504.864zm8.496-3.5l-.432-.252.504-.864.432.252-.504.864zm6 3.5l-6-3.5.504-.864 6 3.5-.504.864z"/>
  				</svg>

  			<label data-error="wrong" data-success="right" for="form3">Votre mail</label>
  			 <input type="password" name="mdp" id="form2" class="form-control validate">
         <svg class="bi bi-tag" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
           <path fill-rule="evenodd" d="M.5 2A1.5 1.5 0 012 .5h4.586a1.5 1.5 0 011.06.44l7 7a1.5 1.5 0 010 2.12l-4.585 4.586a1.5 1.5 0 01-2.122 0l-7-7A1.5 1.5 0 01.5 6.586V2zM2 1.5a.5.5 0 00-.5.5v4.586a.5.5 0 00.146.353l7 7a.5.5 0 00.708 0l4.585-4.585a.5.5 0 000-.708l-7-7a.5.5 0 00-.353-.146H2z" clip-rule="evenodd"/>
           <path fill-rule="evenodd" d="M2.5 4.5a2 2 0 114 0 2 2 0 01-4 0zm2-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"/>
       </svg>
  			  <label data-error="wrong" data-success="right" for="form2">Votre mot de passe</label>
      <div class="row">

  		  <div class="col-lg-6 offset-lg-3 justify-content-center">
          <button class="btn btn-indigo">Send </button>
  		  </div>
      </div>
  	</form>
  </div>
</div>
