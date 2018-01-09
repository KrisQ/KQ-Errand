<h1>Projects</h1>
<hr>


<?php if ($this->session->flashdata('project_created')): ?>

<div class="alert alert-dismissible alert-success fade in">
 <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Success!</strong><br>

<?php echo $this->session->flashdata('project_created'); ?>

</div>

<?php endif; ?>

<?php if ($this->session->flashdata('project_deleted')): ?>

<div class="alert alert-dismissible alert-success fade in">
 <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Success!</strong><br>

<?php echo $this->session->flashdata('project_deleted'); ?>

</div>

<?php endif; ?>

<?php if ($this->session->flashdata('task_edited')): ?>

<div class="alert alert-dismissible alert-success fade in">
 <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>Success!</strong><br>

<?php echo $this->session->flashdata('task_edited'); ?>

</div>

<?php endif; ?>





<table class="table table-hover">
	

	<thead>
		<tr>
		<th>Project Name</th>
		<th>Project Description</th>
		</tr>
	</thead>

	<tbody>
		<?php foreach ($projects as $project): ?>
	<tr>

			<?php echo '<td class="col-md-2"><a href="' . base_url() . 'projects/display/'.$project->id.'">'.$project->project_name.'</a></td>' ?>
			<?php echo "<td class='col-md-9'>".$project->project_body.'</td>' ?>

			<td class='col-md-1'><a class="btn btn-danger btn-sm" href="<?php echo base_url();?>projects/delete/<?php echo $project->id;?>"><span class="glyphicon glyphicon-remove"></span></a></td>
	</tr>		
		<?php endforeach; ?>
	</tbody>


</table>

<a class="btn btn-success" href="<?php echo base_url() ?>projects/create"><span class="fa fa-angle-right"></span>  New Project</a>
