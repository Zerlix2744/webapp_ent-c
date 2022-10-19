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
    <title>Verify</title>
</head>
<body>
    <h1 align="center">Zerlix Webboard</h1><hr>
    <br>
    <div align="center">
        <?php
            $L=$_POST["login"];
            $P=$_POST["password"];
            if($L=="admin" && $P=="ad1234"){
            echo "ยินดีต้องรับคุณ ADMIN";
            $_SESSION['username']='admin';
            $_SESSION['role']='a';
            $_SESSION['id']=session_id();
            }
            elseif($L=="member" && $P=="mem1234"){
            echo "ยินดีต้อนรับคุณ MEMBER";
            $_SESSION['username']='member';
            $_SESSION['role']='m';
            $_SESSION['id']=session_id();
            }
            else{
            echo "ชื่อหรือรหัสผ่านไม่ถูกต้อง";
            }
        ?>
    </div><br>
    <div align="center"><a href="index.php">กลับไปหน้าหลัก</a></div>
</body>
</html>