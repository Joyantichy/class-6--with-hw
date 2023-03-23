<?php



?>

<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billing Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
<form  action="./bill.php" method="Get" class="col-4 mx-auto mt-5">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Quantity of Product</label>
    <input  name ="product" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Please enter your product">

  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">price</label>
    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="price">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Discount</label>
    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Discount">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    
</body>
</html>