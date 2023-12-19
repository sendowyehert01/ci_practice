<h1>Tasks</h1>

<table class="table table-hover">
  <thead>
    <tr>
      <th>Task Name</th>
      <th>Task Body</th>
      <th>Date</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo $task->task_name ?></td>
      <td><?php echo $task->task_body ?></td>
      <td><?php echo $task->date_created ?></td>
    </tr>
  </tbody>
</table>