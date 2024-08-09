<?php
    include "koneksi.php";
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "select * from user where username = '$username' and password = '$password'";
    
    $result = mysqli_query($connect, $query);
    
    $fetchResult = mysqli_fetch_assoc($result);
    
    if ($fetchResult['role'] == 'admin'){
        echo "Anda berhasil login ";
        echo "<a href='adminDashboard.html'> Admin</a>";
    } elseif ($fetchResult['role'] == 'user'){ 
        echo "Anda berhasil login ";
        echo "<a href='userDashboard.html'> User Dashboard</a>";
    } else {
        echo "Anda gagal login ";
        echo "<a href='loginForm.html'>Login Form</a>";
    }
    mysqli_close($connect);
?>