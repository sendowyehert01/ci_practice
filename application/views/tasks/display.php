<h1>Tasks</h1>

<table class="table table-hover">
  <thead>
    <tr>
      <th>Task Name</th>
      <th>Task Body</th>
      <th>Date</th>
      <th>Due Date</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
        <div class="task-name">
          <?php echo $task->task_name ?>
        </div>
        <div class="task-actions">
          <a href="<?php echo base_url(); ?>/tasks/edit/<?php echo $task->id; ?>">Edit</a>
          <a href="<?php echo base_url(); ?>/tasks/delete/<?php echo $task->id; ?>">Delete</a>
        </div>
      </td>
      <td><?php echo $task->task_body ?></td>
      <td><?php echo $task->date_created ?></td>
      <td><?php echo $task->due_date ?></td>
    </tr>
  </tbody>
</table>