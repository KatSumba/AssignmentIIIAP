<?php
include 'dbConnect.php';

if (isset($_POST['submit_button'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $db = new dbConnect();

    if ($db->insertUser($username, $email, $password)) {
        echo "User registration successful!";
    } else {
        echo "User registration failed.";
    }
}
?>