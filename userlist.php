<?php
include_once "function.php";
$users = loadData();

// echo "<pre>";
//
// var_dump($users);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="login.php">login</a>
<a href="add-user.php">them</a>
<table>
    <thead>
    <tr>
        <th>Image</th>
        <th>Name</th>
        <th>Age</th>
        <th>Address</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($users as $index => $user): ?>
        <tr>
            <td><img src= <?php echo $user['image']?> width="45px", height="45px"></td>
            <td><?php echo $user['name'] ?></td>
            <td><?php echo $user['age'] ?></td>
            <td><?php echo $user['address'] ?></td>
            <td><a href="update.php?id=<?php echo $index ?>">Edit</a></td>
            <td><a href="delete.php?id=<?php echo $index ?>" onclick="return confirm('Do you want delete?')">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>

    </tbody>
</table>
</body>
</html>