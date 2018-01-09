
<br>

<div class="well">

<?php if($this->session->userdata('logged_in')): ?>


<?php echo form_open('users/logout'); ?>

<?php if($this->session->userdata('username')): ?>

<?php echo 'You are logged in as: <br> <h4 class="text-info">' . $this->session->userdata('username') . '</h4>'; ?>

<?php endif; ?>



<?php $data = array(

	'class' => 'btn btn-danger btn-block',
	'name'  => 'submit',
	'value' => 'Logout'

); ?>

<?php echo form_submit($data); ?>

<?php echo form_close(); ?>




<?php else: ?>


<?php $attribute = array('id' => 'login_form', 'class' => 'form-horrizontal'); ?>

<?php if ($this->session->flashdata('errors')): ?>

<div class="alert alert-dismissible alert-danger fade in">
 <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Oh snap!</strong><br>

<?php echo $this->session->flashdata('errors'); ?>

</div>

<?php endif; ?>

<?php echo form_open('users/login', $attribute); ?>

<div class="form-group">
	
<?php echo form_label('Username'); ?>

<?php 

	$data = array (

		'class' => 'form-control',
		'name' => 'username',
		'placeholder' => 'Enter Username',
		
		);

 ?>

<?php echo form_input($data); ?>

</div>

<div class="form-group">
	
<?php echo form_label('Password'); ?>

<?php 

	$data = array (

		'class' => 'form-control',
		'name' => 'password',
		'placeholder' => 'Enter password',
		
		);

 ?>

<?php echo form_password($data); ?>

</div>


<div class="form-group">
	

<?php 

	$data = array (

		'class' => 'btn btn-block btn-primary',
		'name' => 'submit',
		'value' => 'login'
		
		);

 ?>

<?php echo form_submit($data); ?>

</div>




<?php echo form_close(); ?>




<?php endif; ?>



</div>