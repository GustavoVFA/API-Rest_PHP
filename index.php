<?php
session_start();
$heroes = $_SESSION['heroes'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>

  <form method="post" action="http://localhost/Api-Rest-PHP/v1/Api.php?apicall=createhero">
    <div class="form-group">
      <label for="exampleInputEmail1">name</label>
      <input type="text" class="form-control" id="exampleInputEmail1" name="name">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Realname</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="realname">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">teamaffiliation</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="teamaffiliation">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Rating</label>
      <input type="number" class="form-control" id="exampleInputPassword1" name="rating">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  </div>

  <table class="table">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">RealName</th>
        <th scope="col">Rating</th>
        <th scope="col">teamaffiliation</th>
      </tr>
    </thead>

    <tbody>
      <?php foreach ($heroes as $heroe) : ?>
        <tr>
          <td><?= $heroe['name']; ?></td>
          <td><?= $heroe['realname']; ?></td>
          <td><?= $heroe['rating']; ?></td>
          <td><?= $heroe['teamaffiliation']; ?></td>
        </tr>
    </tbody>
  <?php endforeach ?>
  </table>

</body>

</html>