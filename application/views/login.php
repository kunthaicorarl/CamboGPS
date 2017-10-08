<?php $this->load->view('header');?>
<?php echo validation_errors(); ?>
<?php echo form_open('users/login'); ?>

<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<div style="max-width: 300px; margin: 0 auto; padding: 50px 0; min-height: 500px;">
				<form>
				  <div class="form-group">
				    <label for="username">Username</label>
				    <input type="text" name="username" class="form-control" id="usernmae" placeholder="Username">
				  </div>
				  <div class="form-group">
				    <label for="password">Password</label>
				    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
				  </div>
				  <div class="form-check">
				    <label class="form-check-label">
				      <input type="checkbox" class="form-check-input">
				      Remember
				    </label>
				  </div>
				  <button type="submit" class="btn btn-primary">Login</button>
				</form>
			</div>
		</div>
	</div>
</div>


<?php $this->load->view('footer');?>