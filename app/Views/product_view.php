<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product List</title>
</head>
<body>
    <a href="/product/add_new">Add New</a>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($product as $row):?>
            <tr>
                <td><?= $row['product_name'];?></td>
                <td><?= $row['product_price'];?></td>
                <td>
                    <a href="/product/edit/<?= $row['product_id'];?>">Edit</a>
                    <a href="/product/delete/<?= $row['product_id'];?>">Delete</a>
                </td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
</body>
</html>