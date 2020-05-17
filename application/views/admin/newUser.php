<div class="row">
	<div class="col-md-6 offset-md-3">
		<h3> Créer un nouvel utilisateur </h3>
	</div>
</div>

<div class="row">
	<div class="col-md-6 offset-md-3">
		<form action="<?= base_url('admin/setUser/')?>" method="POST">
		  <div class="form-group">
			<label for="email">Email address</label>
			<input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
			<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
		  </div>
		  <div class="form-group">
			<label for="password">Password</label>
			<input type="password" class="form-control" id="password">
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</div>
