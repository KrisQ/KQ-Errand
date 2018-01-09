
<h1>Edit Project</h1>
<hr>

<div class="well">



<?php $attribute = array('id' => 'edit_form', 'class' => 'form-horrizontal'); ?>

<?php if (validation_errors()): ?>

<div class="alert alert-dismissible alert-danger fade in">
 <button type="button" class="close" data-dismiss="alert">&times;</button>

  <strong>Oh snap!</strong><br>

<?php echo validation_errors(); ?>

</div>

<?php endif; ?>




<?php echo form_open('projects/edit/'.$project_data->id, $attribute); ?>



<div class="form-group">
	
<?php echo form_label('Project Name'); ?>

<?php 

	$data = array (

		'class' => 'form-control',
		'name' => 'project_name',
		'value' =>  $project_data->project_name
		
		);

 ?>

<?php echo form_input($data); ?>

</div>



<div class="form-group">
	
<?php echo form_label('Project Body'); ?>

<?php 

	$data = array (

		'class' => 'form-control',
		'name' => 'project_body',
		'value' =>  $project_data->project_body
		
		
		);

 ?>

<?php echo form_textarea($data); ?>

</div>




<div class="form-group">
	

<?php 

	$data = array (

		'class' => 'btn btn-block btn-success',
		'name' => 'submit',
		'value' => 'Apply Project'
		
		);

 ?>

<?php echo form_submit($data); ?>

</div>




<?php echo form_close(); ?>







</div> 