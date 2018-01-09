
<h1>Register</h1>
<hr>

<div class="well">



<?php $attribute = array('id' => 'register_form', 'class' => 'form-horrizontal'); ?>

<?php if (validation_errors()): ?>

<div class="alert alert-dismissible alert-danger fade in">
 <button type="button" class="close" data-dismiss="alert">&times;</button>

  <strong>Oh snap!</strong><br>

<?php echo validation_errors(); ?>

</div>

<?php endif; ?>

<?php echo form_open('users/register', $attribute); ?>

<div class="row">
<div class="form-group col-md-6">
	
<?php echo form_label('First Name'); ?>

<?php 

	$data = array (

		'class' => 'form-control',
		'name' => 'first_name',
		'placeholder' => 'Enter Your First Name',
		'value' => set_value('first_name')
		
		);

 ?>

<?php echo form_input($data); ?>

</div>

<div class="form-group col-md-6">
	
<?php echo form_label('Last Name'); ?>

<?php 

	$data = array (

		'class' => 'form-control',
		'name' => 'last_name',
		'placeholder' => 'Enter Your Last Name',
		'value' => set_value('last_name')
		
		);

 ?>

<?php echo form_input($data); ?>

</div>
</div>
<div class="row">
<div class="form-group col-md-6">
	
<?php echo form_label('E-mail'); ?>

<?php 

	$data = array (

		'class' => 'form-control',
		'name' => 'email',
		'placeholder' => 'Enter Your E-mail',
		'value' => set_value('email')
		
		);

 ?>

<?php echo form_input($data); ?>

</div>

<div class="form-group col-md-6">
	
<?php echo form_label('Username'); ?>

<?php 

	$data = array (

		'class' => 'form-control',
		'name' => 'username',
		'placeholder' => 'Enter Username',
		'value' => set_value('username')
		
		);

 ?>

<?php echo form_input($data); ?>

</div>
</div>
<div class="row">
<div class="form-group col-md-6">
	
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

<div class="form-group col-md-6">
	
<?php echo form_label('Comfirm Password'); ?>

<?php 

	$data = array (

		'class' => 'form-control',
		'name' => 'comfirm_password',
		'placeholder' => 'Comfirm Password',
		
		);

 ?>

<?php echo form_password($data); ?>

</div>
</div>

<div class="form-group">
	

<?php 

	$data = array (

		'class' => 'btn btn-block btn-success',
		'name' => 'submit',
		'value' => 'Register'
		
		);

 ?>

<?php echo form_submit($data); ?>

</div>




<?php echo form_close(); ?>







</div>