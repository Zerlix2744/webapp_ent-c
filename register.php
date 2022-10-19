<?php
        session_start();
        if(isset($_SESSION['id'])){
            header("location:index.php");
            die();
        }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1 style="text-align:center">สมัครสมาชิค</h1><hr>
    <table style="border: 2px solid black;width:40%" align="center">
        <tr><td style="background-color:#6cd2fe ;" colspan="2">กรอกข้อมูล</td></tr>
        <tr><td>ชื่อบัญชี :</td><td><input type="text" name="username" size="50"></td></tr>
        <tr><td>รหัสผ่าน :</td><td><input type="password"name="password" size="50"></td></tr>
        <tr><td>ชื่อนามสกุล :</td><td><input type="text"name="name" size="50"></td></tr>
        <tr><td rowspan="3">เพศ :</td><td><input type="radio" name="gender" value="m">ชาย</td></tr>
            <td><input type="radio" name="gender" value="m">หญิง</td></tr>
            <td><input type="radio" name="gender" value="m">อื่นๆ</td></tr>
            <tr><td>อีเมล :</td><td><input type="text"name="email" size="50"></td></tr>
        <tr><td colspan="2" align="center" ><input type="submit" value="สมัครสมาชิค"></td></tr>
    </table><br>
    <div align="center"><a href="index.php">กลับไปหน้าหลัก</a></div>
</body>
</html>