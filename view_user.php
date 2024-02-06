<?php
require_once ('db.php');
// Example usage
$id = $_GET['id'];
$users = getUserById($id);
$user = $users[0];
// Close MySQLi connection
mysqli_close($mysqli);
?>
<html>
<head>
    <title>Test Table</title>
</head>
<style>
    table,td{
        border:1px solid green;
    }

</style>
<body>
 <h1>Name: <?=$user['name']?></h1>
 <h1>Name: <?=$user['email']?></h1>
 <h1>Name: <?=$user['password']?></h1>
 <h1>Name: <?=$user['created_date']?></h1>

 <form action="">
     id: <input type="text" name="id" value="<?=$user['id']?>">
     Name: <input type="text" name="name" value="<?=$user['name']?>">
     Email: <input type="text" name="email" value="<?=$user['email']?>">
     Password: <input type="text" name="password" value="<?=$user['password']?>">
     <button>Update</button>
 </form>
</body>
</html>