<h1>All Projects</h1>

<p class="bg-success">
    <?php if($this->session->flashdata('project_created')): ?> 
        <?php  echo $this->session->flashdata('project_created');?>
    <?php endif; ?>
    <?php if($this->session->flashdata('project_updated')): ?> 
        <?php  echo $this->session->flashdata('project_updated');?>
    <?php endif; ?>
</p>

<a class="btn btn-primary pull-right" href="<?php echo base_url(); ?>projects/create">Create Project</a>

<table class="table">
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
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>