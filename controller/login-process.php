<?php
session_start();
include "../model/config.php";

if (isset($_POST['username']) && isset($_POST['password'])) {
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $uname = validate($_POST['username']);
    $pass = validate($_POST['password']);
    if (empty($uname)) {
        header("Location: ../view/login.php?error=User Name is required");
        exit();
    } else if (empty($pass)) {
        header("Location: ../view/login.php?error=Password is required");
        exit();
    } else {
        $sql = "SELECT * FROM akun WHERE username='$uname' AND password='$pass'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['username'] === $uname && $row['password'] === $pass) {
                echo "Logged in!";
                $_SESSION['username'] = $row['username'];
                $_SESSION['id'] = $row['id'];
                $_SESSION['role'] = $row['role'];
                $_SESSION['isLulus'] = $row['isLulus'];
                header("Location: ../view/home.php");
                exit();
            } else {
                header("Location: ../view/login.php?error=Password atau username salah");
                exit();
            }
        } else {
            header("Location: ../view/login.php?error=Password atau username salah");
            exit();
        }
    }
} else {
    header("Location: ../view/index.php");
    exit();
}
