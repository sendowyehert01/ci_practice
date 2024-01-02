<div class="col-xs-9">
  
<p class="bg-success">
    <?php if($this->session->flashdata('mark_done')): ?> 
        <?php  echo $this->session->flashdata('mark_done');?>
    <?php endif; ?>
    <?php if($this->session->flashdata('mark_undone')): ?> 
        <?php  echo $this->session->flashdata('mark_undone');?>
    <?php endif; ?>
</p>

    <h1>Project Name: <?php echo $projects->project_name;?></h1>
    <p>Date Created: <?php echo $projects->date_created ?></p>
    <h3>Description</h3>
    <p><?php echo $projects->project_body ?></p>
    
    <h3>Active Tasks</h3>
    <ul>
      <?php if($completed_tasks): ?>
        <?php foreach($completed_tasks as $tasks): ?>
        <li>
          <a href="<?php echo base_url(); ?>tasks/display/<?php echo $tasks->task_id; ?>">
            <?php echo $tasks->task_name; ?>
          </a>
        </li>
        <?php endforeach; ?>
      <?php else: ?>
         <p>You have no task available!</p>
      <?php endif; ?>
    </ul>
    
    <h3>Completed Tasks</h3>
    <ul>
      <?php if($not_completed_tasks): ?>
        <?php foreach($not_completed_tasks as $tasks): ?>
        <li>
          <a href="<?php echo base_url(); ?>tasks/display/<?php echo $tasks->task_id; ?>">
            <?php echo $tasks->task_name; ?>
          </a>
        </li>
        <?php endforeach; ?>
      <?php else: ?>
         <p>You have no task available!</p>
      <?php endif; ?>
    </ul>
</div>

<div class="col-xs-3 pull-right">
    <ul class="list-group">
        <h3>Project Actions</h3>
        <li class="list-group-item"><a href="<?php echo base_url(); ?>tasks/create/<?php echo $projects->id; ?>">Create Task</a></li>
        <li class="list-group-item"><a href="<?php echo base_url(); ?>projects/edit/<?php echo $projects->id; ?>">Edit Project</a></li>
        <li class="list-group-item"><a href="<?php echo base_url(); ?>projects/delete/<?php echo $projects->id; ?>">Delete Project</a></li>
    </ul>
</div>
