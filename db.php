<?php
// Exercise 1 - Basic CRUD Operations
// Create a MySQLi connection
$mysqli = mysqli_connect("localhost", "root", "", "my_app_database");

// Check connection
if (!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());
}


// Function to insert a new user
function insertUser($name, $email,$password) {
    global $mysqli;
    $query = "INSERT INTO users (name, email,password) VALUES (?, ?,?)";
    $stmt = mysqli_prepare($mysqli, $query);
    mysqli_stmt_bind_param($stmt, "sss", $name, $email,$password);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    return true;
}
// Function to retrieve and display all users
function getAllUsers() {
    global $mysqli;
    $result = mysqli_query($mysqli, "SELECT * FROM users");
    $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
    return $users;
}

function getUserById($id) {
    global $mysqli;
    $result = mysqli_query($mysqli, "SELECT * FROM users where id =" .$id);
    $users = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
    return $users;
}

function updateUser($name, $email,$password,$id) {
    global $mysqli;
    $query = "UPDATE users SET name=?, email=?, password=? where id =?";
    $stmt = mysqli_prepare($mysqli, $query);
    mysqli_stmt_bind_param($stmt, "sssi", $name, $email,$password,$id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    return true;
}
function deleteUserById($id) {
    global $mysqli;
    $query = "DELETE FROM users where id = ?";
    $stmt = mysqli_prepare($mysqli, $query);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    return true;
}
?>