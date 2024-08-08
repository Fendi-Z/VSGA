
<?php
    include "koneksi.php";

    $username = $_POST["username"];
    $password = MD5($_POST["password"]);

    $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    $rowcount = mysqli_num_rows($result);

    if ($rowcount > 0) {
        echo "Anda Berhasil Login <br> <a href='admin_dashboard.php'>Admin</a>";
    } else {
        echo "Anda Gagal Login <br> <a href='login_form.php'>Back to Login</a>";
    }
?>