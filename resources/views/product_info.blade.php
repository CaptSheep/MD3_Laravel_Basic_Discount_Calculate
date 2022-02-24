<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Product Info</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

</head>
<body>
<div class="container-fluid">
    <form action="login" method="post">
        @csrf
        <div class="form-group has-success has-feedback">
            <label class="control-label" for="description">Product Description</label>
            <input type="text" class="form-control" id="description" aria-describedby="usernameStatus" name="description">
        </div>
        <div class="form-group has-warning has-feedback">
            <label class="control-label" >List Price</label>
            <input type="text" class="form-control" id="price" name="price">
        </div>
        <div class="form-group has-error has-feedback">
            <label class="control-label" > Discount Percent</label>
            <input type="text" class="form-control" id="discountPercent" aria-describedby="phoneStatus" name="discountPercent">
        </div>
        <div>
            <input type="submit" value="Calculate Discount">
        </div>
    </form>

</div>

<!-- jQuery library -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
