<h1>Login User</h1>

<hr>

<?php 

 if($this->session->flashdata('failed_login')):?>

	<?= '<p class="alert alert-danger">'.$this->session->flashdata('failed_login').'</p>';?>
	
<?php endif; ?>



<?php 

 if($this->session->flashdata('user_loggedout')):?>

	<?= '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>';?>
	
<?php endif; ?>


<?php 

 if($this->session->flashdata('failed_login')):?>

	<?= '<p class="alert alert-success">'.$this->session->flashdata('failed_login').'</p>';?>
	
<?php endif; ?>



<?= validation_errors(); ?>

<?=form_open('login')?>


<div class="form-group">
	<label>Username / Email</label>
	<input type="email" name="username" class="form-control" value="<?=set_value('username');?>" autocomplete="off" placeholder="Enter the username mail">
</div>


<div class="form-group">
		<label>Password</label>
	<input type="password" name="password" class="form-control" placeholder="Enter password">
</div>

<button type="submit" class="btn btn-primary">Login</button>