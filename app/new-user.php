<?php
require('db.php');
session_start();
if ($_SESSION['admin'] != 'true') { // non-administrator tried to access page
    header('location:index.php');
    exit(5);
}
$data = array();
parse_str(file_get_contents('php://input'), $data);
$_POST = array_merge($data, $_POST); // merge parsed login data with _POST session values
// testing data
$newusername = mysqli_real_escape_string($mysqli, $_POST['newUserUsername']);
$newpassword = mysqli_real_escape_string($mysqli, $_POST['newUserPassword']);
$newpassword = hash('sha512', $newpassword); // hash password
$newadmin = mysqli_real_escape_string($mysqli, $_POST['adminStatus']);
$results = $mysqli->query("SELECT username from users WHERE username = '$newusername'"); // see if username already exists
if ($results->num_rows > 0) { // username already exists
    echo '<script type="text/javascript">
        alert ("username already exists!");
        window.location = "index.php#/users";
</script>';
} else {
    $sql = "INSERT into users (username, pass, admin) VALUES ('$newusername', '$newpassword', '$newadmin')";
    $mysqli->query($sql);
    echo '<script type="text/javascript">
        alert ("username created successfully");
        window.location = "index.php#/users";
</script>';
}