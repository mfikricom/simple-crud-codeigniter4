<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add New Product</title>
</head>
<body>
    <form action="/product/save" method="post">
        <input type="text" name="product_name">
        <input type="text" name="product_price">
        <button type="submit">Save</button>
    </form>
</body>
</html>