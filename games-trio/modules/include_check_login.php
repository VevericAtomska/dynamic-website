<?php
$s = " SELECT * from register WHERE username = '" . $name . "' AND password = '" . $pass . "' LIMIT 1";
$result = mysqli_query($connect, $s);

if (!$row = mysqli_fetch_assoc($result)) {
    echo "<div class='check'>Your username or password is incorrect!</div>";
} else {
    echo "You are logged in!";
}


?>
