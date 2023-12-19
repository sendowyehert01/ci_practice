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
<h1>Projects</h1>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>Project Name</th>
      <th>Project Body</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($projects as $obj): ?>
    <tr>
      <td><?php echo $obj->project_name ?></td>
      <td><?php echo $obj->project_body ?></td>
      <td><a href="<?php echo base_url(); ?>projects/display/<?php echo $obj->id; ?>">View</a></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<?php endif; ?>