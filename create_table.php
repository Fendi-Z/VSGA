
<?php
    include "koneksi.php";

    $sql = "CREATE TABLE user (
        id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
        username VARCHAR(225),
        password VARCHAR(225),
        role ENUM('admin', 'user')
    )";

    if (mysqli_query($conn, $sql)) {
        echo "Table Created!";
    } else {
        echo "Error $sql <br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
?>