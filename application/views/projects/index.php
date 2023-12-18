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
      <?php echo "<td><a href='" . base_url() . "projects/display/". $obj->id ."'>" . $obj->project_name . "</a></td>
      <td>" . $obj->project_body . "</td>"; ?>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>