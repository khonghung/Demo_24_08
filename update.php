<?php
include "function.php";
$id = $_REQUEST['id'];
$user = getUserById($id);
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
<form method="POST">
    <input type="text" name="name" value="<?php echo $user['name'] ?>" placeholder="nhap ten">
    <input type="text" name="age" value="<?php echo $user['age'] ?>" placeholder="nhap tuoi">
    <input type="text" name="address" value="<?php echo $user['address'] ?>" placeholder="nhap dia chi">
    <input type="submit" value="submit" placeholder="them">
</form>
</body>

</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST["name"];
    $age = $_POST["age"];
    $address = $_POST["address"];
    $user = array("name" => $name, "age" => $age, "address" => $address);
    updateUser($id, $user);
    header("location: user-list.php");
}

?>
