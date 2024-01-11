<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="icon" href="images/sm-logo.png">
    <title>Contact Messages &#8480</title>
</head>
<body>


  <h2 class="text-center mb-2" >Contact Messages</h2>
   
<?php
require "db.php";

// Write a SQL query
$sql = "SELECT * FROM contacts";

// Execute the SQL query
$result = mysqli_query($conn, $sql);

// Store the data in an array
$data = array();
if(mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
  }
}
?>

<!-- Display the data in a Bootstrap table -->
<table class="table table-bordered border-primary table-striped">
  <thead class="table-dark">
    <tr>
      <th>Contact ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Subject</th>
      <th>Message</th>
      <th>Date</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($data as $row): ?>
      <tr>
        <td><?php echo $row['contact_id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['subject']; ?></td>
        <td><?php echo $row['message']; ?></td>
        <td><?php echo $row['time']; ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<div class="d-grid gap-2">
  <a href="/" class="btn btn-primary" src="codingsourav.unaux.com" type="button">Home</a>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
</script>

</body>
</html>