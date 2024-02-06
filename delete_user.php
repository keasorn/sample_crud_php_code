<?php
require_once ('db.php');
// Example usage
$id = $_GET['id'];
$isDelete = deleteUserById($id);


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
<style>
    table,td{
        border:1px solid green;
    }

</style>
<body>
<?php

if($isDelete){
?>
    <div class="alert alert-danger" role="alert">
        User have been deleted
    </div>
<?php
}
?>

<a href="user_list.php">Back To list</a>

</body>
</html>