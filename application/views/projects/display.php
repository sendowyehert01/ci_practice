<div class="col-xs-9">
    <h1>Project Name: <?php echo $projects->project_name;?></h1>
    <p>Date Created: <?php echo $projects->date_created ?></p>
    <h3>Description</h3>
    <p><?php echo $projects->project_body ?></p>
    
</div>

<div class="col-xs-3 pull-right">
    <ul class="list-group">
        <h3>Project Actions</h3>
        <li class="list-group-item"><a href="">Create Task</a></li>
        <li class="list-group-item"><a href="<?php echo base_url(); ?>projects/edit/<?php echo $projects->id; ?>">Edit Task</a></li>
        <li class="list-group-item"><a href="">Delete Task</a></li>
    </ul>
</div>
