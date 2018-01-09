

<?php if ($this->session->flashdata('user_register')): ?>

<div class="alert alert-success">
  <button type="button" class="close" data-dismiss="alert">&times;</button>

  <strong>Success!</strong><br>

<?php echo $this->session->flashdata('user_register'); ?>

</div>

<?php endif; ?>


<?php if ($this->session->flashdata('login_failed')): ?>

<div class="alert alert-warning">
   <button type="button" class="close" data-dismiss="alert">&times;</button>

  <strong>Sorry!</strong><br>

<?php echo $this->session->flashdata('login_failed'); ?>

</div>

<?php endif; ?>

<?php if ($this->session->flashdata('no_access')): ?>

<div class="alert alert-warning">
   <button type="button" class="close" data-dismiss="alert">&times;</button>

  <strong>Sorry!</strong><br>

<?php echo $this->session->flashdata('no_access'); ?>

</div>

<?php endif; ?>

<?php if ($this->session->userdata('logged_in')): ?>

<h1>Welcome to Errand</h1>


<?php if (isset($projects)): ?>
<hr>









	
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Projects</h3>
  </div>
  <div class="panel-body">
  <ul class="">
 

		<?php foreach ($projects as $project): ?>
	

			<li class=""><a href=" <?php echo base_url() . 'projects/display/'.$project->id ?> "><?php echo '<td class="col-md-2">'.$project->project_name.'</td>' ?></a>
			</li>
			
		<?php endforeach; ?>
	
</ul>
 </div>
</div>

<?php endif; ?>

<?php if (isset($tasks)): ?>

<div class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">Tasks</h3>
  </div>
  <div class="panel-body">
  <ul class="">



		<?php foreach ($tasks as $task): ?>
	

			<?php echo '<li class=""><a href="'. base_url() .'tasks/display/' .$task->id. '">' .$task->task_name.'</li></a>' ?>
		

		<?php endforeach; ?>

		</ul>
 </div>
</div>
<?php endif; ?>



<?php else: ?>
<br>
<div class="jumbotron"><h1>Welcome to Errand</h1><br><h3>Register or log in to use the App!</h3></div>

<?php endif; ?>