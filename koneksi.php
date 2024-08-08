
<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "tsa_web";

    $conn = mysqli_connect($host, $user, $pass, $db);

    if (!$conn) {
        echo "Gagal Bro! : " . mysqli_connect_error();
    } else {
        echo "Nice Connect! <br>";
    }
?>