<h1>Login User</h1>

<hr>

<?php 

 if($this->session->flashdata('user_loggedin')):?>

	<?= '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>';?>
	
<?php endif; ?>


<?= validation_errors(); ?>

<?=form_open('login')?>


<div class="form-group">
	<label>Username / Email</label>
	<input type="text" name="username" class="form-control" value="<?=set_value('username');?>" autocomplete="off" placeholder="Enter the username mail">
</div>


<div class="form-group">
		<label>Password</label>
	<input type="password" name="password" class="form-control" placeholder="Enter password">
</div>

<button type="submit" class="btn btn-primary">Login</button>