<div class="col-md-8">

<h1><?php echo $project_data->project_name; ?></h1>

<?php if ($this->session->flashdata('mark_done')): ?>

<div class="alert alert-dismissible alert-success fade in">
 <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Success!</strong><br>

<?php echo $this->session->flashdata('mark_done'); ?>

</div>

<?php endif; ?>

<?php if ($this->session->flashdata('mark_undone')): ?>

<div class="alert alert-dismissible alert-success fade in">
 <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Success!</strong><br>

<?php echo $this->session->flashdata('mark_undone'); ?>

</div>

<?php endif; ?>

<?php if ($this->session->flashdata('project_edited')): ?>

<div class="alert alert-dismissible alert-success fade in">
 <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Success!</strong><br>

<?php echo $this->session->flashdata('project_edited'); ?>

</div>

<?php endif; ?>

<?php if ($this->session->flashdata('task_deleted')): ?>

<div class="alert alert-dismissible alert-success fade in">
 <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Success!</strong><br>

<?php echo $this->session->flashdata('task_deleted'); ?>

</div>

<?php endif; ?>

<h5 class="text-info"><?php echo $project_data->data_created; ?></h5>
<hr>
<h4>Project Description :</h4>
<p><?php echo $project_data->project_body; ?></p>

<hr>

<h3>Active Tasks :</h3>


<?php if ($not_completed_task): ?>
<ul>
	<?php foreach ($not_completed_task as $task): ?>

		<li><a href="<?php echo base_url(); ?>tasks/display/<?php echo $task->task_id; ?>">
		
		<?php echo $task->task_name; ?>
		
		</a></li>

	<?php endforeach; ?>

	</ul>
	<?php else: ?>
	
	<h4 class="text-danger">You have no task Pending</h4>

<?php endif; ?>



<hr>
<h3>Completed Tasks :</h3>

<?php if ($completed_task): ?>
<ul>
	<?php foreach ($completed_task as $task): ?>

		<li><a href="<?php echo base_url(); ?>tasks/display/<?php echo $task->task_id; ?>">
		
		<?php echo $task->task_name; ?>
		
		</a></li>

	<?php endforeach; ?>

	</ul>
	<?php else: ?>
	
	<h4 class="text-danger">You have no completed task</h4>

<?php endif; ?>




</div>
<div class="col-md-4 pull-right">
<ul class="list-group">
<h4>Projects Actions</h4>

<li class="list-group-item"><a href="<?php echo base_url() ?>tasks/create/<?php echo $project_data->id; ?>">Create Task</a></li>
 <li class="list-group-item"><a href="<?php echo base_url() ?>projects/edit/<?php echo $project_data->id; ?>">Edit Project</a></li>
<li class="list-group-item"><a href="<?php echo base_url() ?>projects/delete/<?php echo $project_data->id; ?>">Delete Project</a></li>

</ul>

</div>