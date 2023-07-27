<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Product form</h2>
  <form action="<?=base_url()?>products/updateData" method="POST">
    <div class="form-group">
      <label for="name">Name:</label>
       <input type="hidden" class="form-control" id="id" placeholder="Enter Id" name="id" value="<?=$getId->id?>">
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" value="<?=$getId->name?>">
    </div>
    <div class="form-group">
      <label for="pwd">Category Brand:</label>
      <select class="form-control" id="category_brand"  name="category_brand">
      <option value="international" <?php echo ($getId->category_brand  == 'international') ? 'selected' : ''; ?>>international</option>
       <option value="local" <?php echo ($getId->category_brand  == 'local') ? 'selected' : ''; ?>>local</option>
      </select>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
