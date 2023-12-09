<?php


session_start();
include "db_conn.php";
/*
if(issset($_POST['username']) && isset($_POST['password'])) {
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspeacialchars($data);
        return $data;
    }
}*/

$username = $_POST['username'];
$password = $_POST['password'];

if(empty($username)) {
    header("Location: index.php?error=Username is required");
    exit();
}

else if(empty($password)) {
    header("Location: index.php?error=Password is required");
    exit();
}
else {
    header("Location: home.php");
}

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";

$result = mysqli_query($mysqli, $sql);

if(mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    if($row['username'] === $username && $row['password'] === $password) {
        echo "Logged in!";
        $_SESSION['username'] = $row['username'];
        $_SESSION['password'] = $row['password'];
        header("Location: home.php");
        exit();
    }
    else {
        header("Location: index.php?error=Incorrect username or password");
        exit();
    }
}
else {
    header("Location: index.php?error=Incorrect username or password");
    exit();
}
?>