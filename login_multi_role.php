
<?php
    include "koneksi.php";

    $username = $_POST["username"];
    $password = MD5($_POST["password"]);

    $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    $fetchResult = mysqli_fetch_assoc($result);

    switch ($fetchResult['role']) {
        case 'admin':
            echo "Anda Berhasil Login : ";
            echo "<a href='admin_dashboard.html'>Admin Dashboard</a>";
            break;
        case 'user':
            echo "Anda Berhasil Login : ";
            echo "<a href='user_dashboard.html'>User Dashboard</a>";
            break;
        default:
            echo "Anda Gagal Login : ";
            echo "<a href='login_form.html'>Back to Login</a>";
            break;
    }

    mysqli_close($conn);
?>