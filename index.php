<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">
    <form method="post" action="v1/create.php">


     <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group">
      <label for="dob">Realname:</label>
      <input type="text" class="form-control" name="realname">
    </div>
    <div class="form-group">
      <label for="email">Rating:</label>
      <input type="number" class="form-control" name="rating">
    </div>
    <div class="form-group">
      <label for="address">teamAffiliation</label>
      <input type="text" class="form-control" name="teamAfilliation">
    </div>   
    
      <button type="reset" class="btn">Reset</button>
      <button type="submit" class="btn" style="float:right">Submit</button>
     </form>
</div>
    
</body>
</html>