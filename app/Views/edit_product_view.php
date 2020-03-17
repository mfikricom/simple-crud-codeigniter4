<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Product</title>
</head>
<body>
    <form action="/product/update" method="post">
        <input type="text" name="product_name" value="<?= $product->product_name;?>">
        <input type="text" name="product_price" value="<?= $product->product_price;?>">
        <input type="hidden" name="product_id" value="<?= $product->product_id;?>">
        <button type="submit">Update</button>
    </form>
</body>
</html>