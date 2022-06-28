<?php

include DIR_TEMPLATE . "page_navigation_menu.php";
include DIR_TEMPLATE . "page_registration.php";
include DIR_MODULES . "include_check_validation.php";


if ( isset($_POST['username']) || isset($_POST['password']) ||  isset($_POST['email'])) {
    $name = $_POST['username'];
    $pass = $_POST['password'];
    $email = $_POST['email'];
    include DIR_MODULES . "include_check_register.php";

    $s = " SELECT * from register WHERE username = '" . $name . "' AND email = '" . $email . "' LIMIT 1";

    $result = mysqli_query($connect, $s);


    $reg = "INSERT INTO register (username, password, email) VALUES ('$name', '$pass', '$email')";
    mysqli_query($connect, $reg);

}
/*
if ( isset($_POST['username']) || isset($_POST['password']) || isset($_POST['email'])) {
    $name = $_POST['username'];
    $pass = $_POST['password'];
    $email = $_POST['email'];

    $s = " SELECT * from register WHERE username = '$name' || email = '$email'";

    $result = mysqli_query($connect, $s);

    $num = mysqli_num_rows($result);

    if ($num == 1) {
        echo "Username or E-mail Alredy Taken";
    } else {
        $reg = "INSERT INTO register (username, password, email) VALUES ('$name', '$pass', '$email')";
        mysqli_query($connect, $reg);
        echo "Registration Successful";
    }
}
*/

/*
if (isset($_POST['email']) == true && empty($_POST['email']) == false) {
    $email = $_POST['email'];
    if (filter_var($email, FILTER_VALIDATE_EMAIL) == true) {

    } else {
        echo 'Not a valid email adress';
    }
}
*/


//  $result = mysqli_query($connect, $sql);
//  mysqli_query("SELECT * FROM register WHERE username = 'username' AND email = 'email' ");
/*
if ($connect -> query($sql) === TRUE ){
    echo "Ubaceni podaci";
}
else
    echo "Greska:". $sql. ": -". $connect -> error;
$connect ->close();
*/

/* if ($_POST['psw'] === $_POST['psw_repeat']){

     //succes
 }
 else {
     echo 'The password must be same';
 }
*/

//method in php for chek same pass
?>
