<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Task Manager</title>
  <link rel="stylesheet" href="form.css">
</head>
<body>
  <div class="container">
    <h1>Services</h1>
    <table>
      <thead>
        <tr>
          <th>Task ID</th>
          <th>Task Name</th>
          <th>Assigned To</th>
          <th>Deadline</th>
          <th>Task Status</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>001</td>
          <td>Complete Assignment on OS</td>
          <td>Priti jha</td>
          <td>2025-03-10</td>
          <td><span class="status pending">Pending</span></td>
          <td><button class="edit">Edit</button><button class="delete">Delete</button></td>
        </tr>
        <tr>
          <td>002</td>
          <td>Review Assignment Submissions</td>
          <td>Naitik jha</td>
          <td>2025-02-08</td>
          <td><span class="status completed">Completed</span></td>
          <td><button class="edit">Edit</button><button class="delete">Delete</button></td>
        </tr>
        <tr>
          <td>003</td>
          <td>Prepare for DBMS Lab Exam</td>
          <td>Ritik jha</td>
          <td>2025-04-09</td>
          <td><span class="status inprogress">In Progress</span></td>
          <td><button class="edit">Edit</button><button class="delete">Delete</button></td>
        </tr>
        <tr>
          <td>004</td>
          <td>Submit Attendance Report</td>
          <td>Jigar Yadav</td>
          <td>2025-04-10</td>
          <td><span class="status pending">Pending</span></td>
          <td><button class="edit">Edit</button><button class="delete">Delete</button></td>
        </tr>
        <tr>
          <td>005</td>
          <td>Design Poster for Tech Fest</td>
          <td>Priya</td>
          <td>2025-01-11</td>
          <td><span class="status inprogress">In Progress</span></td>
          <td><button class="edit">Edit</button><button class="delete">Delete</button></td>
        </tr>
        <tr>
          <td>006</td>
          <td>Team Presentation Slides</td>
          <td>Vikas</td>
          <td>2025-03-25</td>
          <td><span class="status pending">Pending</span></td>
          <td><button class="edit">Edit</button><button class="delete">Delete</button></td>
        </tr>
        <tr>
          <td>007</td>
          <td>Create Monthly Salary Sheet</td>
          <td>Raj singh</td>
          <td>2025-02-08</td>
          <td><span class="status completed">Completed</span></td>
          <td><button class="edit">Edit</button><button class="delete">Delete</button></td>
        </tr>
        <tr>
          <td>008</td>
          <td>Attend Company Workshop</td>
          <td>Jaydev</td>
          <td>2025-04-15</td>
          <td><span class="status inprogress">In Progress</span></td>
          <td><button class="edit">Edit</button><button class="delete">Delete</button></td>
        </tr>
        <tr>
          <td>009</td>
          <td>Prepare Viva Questions</td>
          <td>Anjali</td>
          <td>2025-04-4</td>
          <td><span class="status pending">Pending</span></td>
          <td><button class="edit">Edit</button><button class="delete">Delete</button></td>
        </tr>
        <tr>
          <td>010</td>
          <td>Grade Internal Exam Papers</td>
          <td>Neha jha</td>
          <td>2025-04-15</td>
          <td><span class="status pending">Pending</span></td>
          <td><button class="edit">Edit</button><button class="delete">Delete</button></td>
        </tr>
      </tbody>
    </table>
    <button class="add-btn">Add New Task</button>
  </div>
</body>
</html>
