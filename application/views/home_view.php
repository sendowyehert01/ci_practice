<p class="bg-success">
    <?php if($this->session->flashdata('login_success')): ?> 
        <?php  echo $this->session->flashdata('login_success');?>
    <?php endif; ?>
    <?php if($this->session->flashdata('register_user')): ?> 
        <?php  echo $this->session->flashdata('register_user');?>
    <?php endif; ?>
</p>
<p class="bg-danger">
    <?php if($this->session->flashdata('login_failed')): ?> 
        <?php  echo $this->session->flashdata('login_failed');?>
    <?php endif; ?>
    <?php if($this->session->flashdata('no_access')): ?> 
        <?php  echo $this->session->flashdata('no_access');?>
    <?php endif; ?>
</p>

<div class="jumbotron">
  <h3 class='text-center'>Welcome to Sendo APP</h3>
</div>

<?php if(isset($projects)): ?>

<div class="panel panel-primary">
  <div class="panel-heading">
     <h3>Your Projects</h3>
  </div>
  <div class="panel-body">
    <ul class="list-group">
      <?php foreach ($projects as $obj): ?>
        <li class="list-group-item">
          <a href="<?php echo base_url(); ?>projects/display/<?php echo $obj->id; ?>"><?php echo $obj->project_name ?></a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
</div>

<?php endif; ?>

<?php if(isset($tasks)): ?>
<h1>Your Tasks</h1>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>Task Name</th>
      <th>Task Body</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($tasks as $obj): ?>
    <tr>
      <td><?php echo $obj->task_name ?></td>
      <td><?php echo $obj->task_body ?></td>
      <td><a href="<?php echo base_url(); ?>tasks/display/<?php echo $obj->id; ?>">View</a></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<?php endif; ?>