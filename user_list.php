<?php
require_once ('db.php');

// Example usage
$users = getAllUsers();
// Close MySQLi connection
mysqli_close($mysqli);
?>

<html>
<head>
    <title>Test Table</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
</head>
<body>

<div class="container">
    <a href="add_user.php">Add New User</a>
    <table class="table table-striped">
        <tr>
            <td>No</td>
            <td>Name</td>
            <td>email</td>
            <td>password</td>
            <td>created_at</td>
            <td>Action</td>
        </tr>
        <?php
        $no = 1;
        foreach ($users as $user) {
            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $user['name'] ?></td>
                <td><?= $user['email'] ?></td>
                <td><?= $user['password'] ?></td>
                <td><?= $user['created_date'] ?></td>
                <td><a href="view_user.php?id=<?= $user['id'] ?>">View</a>
                    | <a href="edit_user.php?id=<?= $user['id'] ?>" class="text-warning">Edit</a> |
                    <a href="delete_user.php?id=<?= $user['id'] ?>" class="text-danger">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>
</body>
</html>