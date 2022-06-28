<?php
include DIR_TEMPLATE . "page_navigation_menu.php";




$session_id = session_id();

$_SESSION['id'] = $session_id;
$_SESSION['server_name'] = $_SERVER['SERVER_NAME'];
$_SESSION['server_addr'] = $_SERVER['SERVER_ADDR'];
$_SESSION['server_port'] = $_SERVER['SERVER_PORT'];
$_SESSION['remote_addr'] = $_SERVER['REMOTE_ADDR'];


if ( isset($_POST['username']) || isset($_POST['password']) ) {
    $name = $_POST['username'];
    $pass = $_POST['password'];

    include DIR_MODULES . "include_check_login.php";


    $s = " SELECT * from register WHERE username = '" . $name . "' AND password = '" . $pass . "' LIMIT 1";
    $result = mysqli_query($connect, $s);


    if (mysqli_num_rows($result) == 1) {
        $logged_in_user = mysqli_fetch_assoc($result);
        if ($logged_in_user['user_type'] === 'admin') {
            $_SESSION['admin'] = $logged_in_user;
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php?');
        } elseif ($logged_in_user['user_type'] !== 'admin') {
            $_SESSION['user'] = $logged_in_user;
            $_SESSION['success'] = "You are now logged in";
            header('location: index.php');

        }
    }
}



include DIR_TEMPLATE . "page_login.php";




?>