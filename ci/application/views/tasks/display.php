<h1><?php echo $task->task_name; ?></h1>

<div class="col-md-8">

<h4>Task for project : <?php echo $project_name; ?></h4>
Created :<p class="text-info"><?php echo $task->date_created; ?></p>
Due on :<p class="text-info"><?php echo $task->due_date; ?></p>

<h4>Description : </h4>
<p class="text-success"><?php echo $task->task_body; ?></p>

</div>

	<div class="col-md-4 pull-right">
<ul class="list-group">
<h4>Projects Actions</h4>

<li class="list-group-item"><a href="<?php echo base_url(); ?>tasks/mark_complete/<?php echo $task->id; ?>">Mark Complete</a></li>
 <li class="list-group-item"><a href="<?php echo base_url(); ?>tasks/mark_incomplete/<?php echo $task->id; ?>">Mark Incomplete</a></li>
<li class="list-group-item"><a href="<?php echo base_url(); ?>tasks/edit/<?php echo $task->id; ?>">Edit</a></li>
<li class="list-group-item"><a href="<?php echo base_url(); ?>tasks/delete/<?php echo $task->project_id; ?>/<?php echo $task->id; ?>">Delete</a></li>

</ul>

</div>


