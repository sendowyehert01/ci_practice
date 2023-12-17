<h1>All Projects</h1>

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
      <?php echo "<td>" . $obj->project_name . "</td>
      <td>" . $obj->project_body . "</td>"; ?>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>