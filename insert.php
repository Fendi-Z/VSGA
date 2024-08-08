
<?php
    include "koneksi.php";

    $sql = "INSERT INTO user (username, password, role) VALUES 
        ('user', MD5('user'), 'user')";

    if (mysqli_query($conn, $sql)) {
        echo "Data Recorded!";
    } else {
        echo "Error! $sql <br>" . mysqli_error($conn);
    }

    mysqli_close( $conn );
?>