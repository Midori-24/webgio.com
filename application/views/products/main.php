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
  <h2>List Of Products</h2>
  <p>This table displays the products:</p> 
  <a href="<?=base_url()?>products/form"><button>New Product</button></a>           
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Number</th>
        <th>Name</th>
        <th>Category Brand</th>
      </tr>
    </thead>
    <tbody>

      <?php
      $number = 0;
      foreach ($getAll as $key => $value) {
      $number++;
      
      ?>

      <tr>
        <td><?=$number ?> </td>
        <td><?=$value->name?></td>
        <td><?=$value->category_brand?></td>
        <td><a href="<?=base_url()?>products/edit/<?=$value->id?>"><button>Edit</button></a>
          <a href="<?=base_url()?>products/delete/<?=$value->id?>"><button>Delete</button></a>
          </td>
      </tr>
    <?php } ?>
    </tbody>
  </table>
</div>

</body>
</html>
