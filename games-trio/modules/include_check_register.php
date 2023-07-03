<?php
$s = " SELECT * from register WHERE username = '" . $name . "' OR email = '" . $email . "' LIMIT 1";

$result = mysqli_query($connect, $s);

if (!$row = mysqli_fetch_assoc($result)) {
    echo "<div class='yes'>Registration Successful</div>";
}
else{
    echo "<div class='yes'>Username or E-mail Alredy Taken!</div>";
    exit;
}


?>