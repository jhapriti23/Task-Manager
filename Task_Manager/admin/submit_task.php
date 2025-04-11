<?php

  $task = $_POST['task'];
  $assigned = $_POST['assigned'];
  $role = $_POST['role'];
  $deadline = $_POST['deadline'];
  $status = $_POST['status'];

  $sql = "INSERT INTO tasks (task_name, assigned_to, role, deadline, status) 
          VALUES ('$task', '$assigned', '$role', '$deadline', '$status')";

  if ($conn->query($sql)) {
    header("Location: index.php");
    exit();
  } else {
    echo "Error: " . $conn->error;
  }

?>