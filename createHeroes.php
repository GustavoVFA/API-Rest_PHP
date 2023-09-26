<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
</body>
</html>