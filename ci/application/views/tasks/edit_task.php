
<h1>Edit Task</h1>
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




<?php echo form_open('tasks/edit/'.$this->uri->segment(3).'', $attribute); ?>


<div class="row">
<div class="form-group col-md-6">
	
<?php echo form_label('Task Name'); ?>

<?php 

	$data = array (

		'class' => 'form-control',
		'name' => 'task_name',
		'value' => $the_task->task_name
		
		);

 ?>

<?php echo form_input($data); ?>


</div>

<div class="form-group col-md-6">
	
<?php echo form_label('Due Date'); ?>

<?php 

	$data = array (

		'class' => 'form-control',
		'name' => 'due_date',
		'type' => 'date',
		'value' => $the_task->due_date
		
		);

 ?>

<?php echo form_input($data); ?>

</div>
</div>


<div class="form-group">
	
<?php echo form_label('Task Body'); ?>

<?php 

	$data = array (

		'class' => 'form-control',
		'name' => 'task_body',
		'value' => $the_task->task_body
		
		);

 ?>

<?php echo form_textarea($data); ?>

</div>




<div class="form-group">
	

<?php 

	$data = array (

		'class' => 'btn btn-block btn-success',
		'name' => 'submit',
		'value' => 'Update'
		
		);

 ?>

<?php echo form_submit($data); ?>

</div>




<?php echo form_close(); ?>







</div> 