<h1>All Projects</h1>

<p class="bg-success">
    <?php if($this->session->flashdata('project_created')): ?> 
        <?php  echo $this->session->flashdata('project_created');?>
    <?php endif; ?>
    <?php if($this->session->flashdata('project_updated')): ?> 
        <?php  echo $this->session->flashdata('project_updated');?>
    <?php endif; ?>
    <?php if($this->session->flashdata('project_deleted')): ?> 
        <?php  echo $this->session->flashdata('project_deleted');?>
    <?php endif; ?>
</p>

<a class="btn btn-primary pull-right" href="<?php echo base_url(); ?>projects/create">Create Project</a>

<table class="table table-hover">
  <thead>
    <tr>
      <th>Project Name</th>
      <th>Project Body</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($projects as $obj): ?>
    <tr>
      <?php echo "<td><a href='" . base_url() . "projects/display/". $obj->id ."'>" . $obj->project_name . "</a></td>
      <td>" . $obj->project_body . "</td>"; ?>
      <td><a href="<?php echo base_url(); ?>projects/delete/<?php echo $obj->id; ?>" class='btn btn-danger'><span class='glyphicon glyphicon-remove'></span></a></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>