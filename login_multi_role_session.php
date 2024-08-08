
<?php
    include "koneksi.php";

    $username = $_POST["username"];
    $password = MD5($_POST["password"]);

    $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    $fetchResult = mysqli_fetch_assoc($result);
    $rowcount = mysqli_num_rows($result);
    
    // $sql = "SELECT * FROM user WHERE username = ? AND password = ?";
    // $stmt = mysqli_prepare($conn, $sql);
    // mysqli_stmt_bind_param( $stmt, "ss", $username, $password);
    // mysqli_stmt_execute($stmt);
    // $result = mysqli_stmt_get_result($stmt);
    // $fetchResult = mysqli_fetch_assoc($result);
    // $rowcount = mysqli_num_rows($result);

    if ($rowcount > 0) {
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['status'] = 'login';
    }
    
    if ($fetchResult['role'] == 'admin') {
        echo "Anda Berhasil Login : ";
        echo "<a href='admin_dashboard.php'>Admin Dashboard</a>";
    } elseif ($fetchResult['role'] == 'user') {
        echo "Anda Berhasil Login : ";
        echo "<a href='admin_dashboard.php'>Admin Dashboard</a>";
    } else {
        echo "Anda Gagal Login : ";
        echo "<a href='login_form.html'>Back to Login</a>";
    }

    // switch ($fetchResult['role']) {
    //     case 'admin':
    //         echo "Anda Berhasil Login : ";
    //         echo "<a href='admin_dashboard.php'>Admin Dashboard</a>";
    //         break;
    //     case 'user':
    //         echo "Anda Berhasil Login : ";
    //         echo "<a href='user_dashboard.php'>User Dashboard</a>";
    //         break;
    //     default:
    //         echo "Anda Gagal Login : ";
    //         echo "<a href='login_form.html'>Back to Login</a>";
    //         break;
    // }
    
    mysqli_close($conn);
?>