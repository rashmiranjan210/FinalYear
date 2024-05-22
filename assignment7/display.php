<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
<table class="table">
    <?php
        include_once "header.php";
        require_once"db-connect.php";
        $qry="SELECT Student_ID,Name,Mobile FROM Student";
        $res=$conn->query($qry);
    ?>
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Mobile</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php 
        while($std=$res->fetch_assoc()){
    ?>
    <tr>
      <th scope="row"><?php echo $std['Student_ID']; ?></th>
      <td><?php echo $std['Name']; ?></td>
      <td><?php echo $std['Mobile']; ?></td>
      <td>
      <a href="details.php?id=<?php echo $std['Student_ID'] ?>" class="btn btn-sm btn-outline-info">Details</a>
        <a href="delete.php?id=<?php echo $std['Student_ID']; ?>">
<button type="button" class="btn btn-outline-danger">Delete</button></a>
        <a href="update.php?id=<?php echo $std['Student_ID']; ?>"><button type="button" class="btn btn-outline-warning">Update</button></a>
      </td>
    </tr>
    <?php
        }
        ?>
  </tbody>
</table>

<?php
    $conn->close();
 ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>