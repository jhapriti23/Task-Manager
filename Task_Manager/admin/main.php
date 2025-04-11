<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Task Manager</title>
  <style>
    body { font-family: Arial; padding: 20px; }
    table { width: 100%; border-collapse: collapse; }
    th, td { border: 1px solid #ccc; padding: 10px; text-align: center; }
    .add-btn { padding: 10px 20px; background-color: #4CAF50; color: white; border: none; }
  </style>
</head>
<body>

<h2>Task Manager</h2>
<a href="add_task.php"><button class="add-btn">Add New Task</button></a>

<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>Task Name</th>
      <th>Assigned To</th>
      <th>Role</th>
      <th>Deadline</th>
      <th>Status</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $result = $conn->query("SELECT * FROM tasks");
    while($row = $result->fetch_assoc()) {
      echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['task_name']}</td>
        <td>{$row['assigned_to']}</td>
        <td>{$row['role']}</td>
        <td>{$row['deadline']}</td>
        <td>{$row['status']}</td>
      </tr>";
    }
    ?>
  </tbody>
</table>

</body>
</html>
