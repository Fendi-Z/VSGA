
<?php
    include "koneksi.php";

    $sql = "CREATE DATABASE tsa_web;";

    if (mysqli_query( $conn, $sql ) ) {
        echo "Database Created";
    } else {
        echo "Error : $sql <br>" . mysqli_error( $conn );
    }

    mysqli_close( $conn );
?>