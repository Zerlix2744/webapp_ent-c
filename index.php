<!DOCTYPE html>
<html lang="en">
    <?php
    session_start();
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zerlix Webboard</title>
</head>
<?php
    if(!isset($_SESSION['id'])){
?>
<body>
    <form action="post.php" method="post">
    <h1 style="text-align:center">Zerlix Webboard</h1><hr>
    หมวดหมู่ : <select name="หมวดหมู่">
        <option value="--ทั้งหมด--">--ทั้งหมด--</option>
        <option value="เรื่องทั่วไป">เรื่องทั่วไป</option>
        <option value="เรื่องเรียน">เรื่องเรียน</option>
    </select>
    <a href="login.php" style="float: right">เข้าสู่ระบบ</a>
    <ul>
        <?php
            for($i=1;$i<=10;$i++){
                echo "<li><a href=post.php?id=$i>กระทู้ที่$i</a></li>";
            }
        ?>
    </ul>
    </form>
</body>
<?php
    }else{
?>
<body>
    <form action="post.php" method="post">
    <h1 style="text-align:center">Zerlix Webboard</h1><hr>
    หมวดหมู่ : <select name="หมวดหมู่">
        <option value="--ทั้งหมด--">--ทั้งหมด--</option>
        <option value="เรื่องทั่วไป">เรื่องทั่วไป</option>
        <option value="เรื่องเรียน">เรื่องเรียน</option>
    </select>
    <div style="float: right">
    <?php
        echo"ผู้ใช้งานระบบ : $_SESSION[username]"; 
    ?> &nbsp;&nbsp;
    <a href="logout.php"> ออกจากระบบ</a>
    </div><br>
    <a href="newpost.php">สร้างกระทู้ใหม่</a>
    <ul>
        <?php
            for($i=1;$i<=10;$i++){
                echo "<li>";
                echo "<a href=post.php?id=$i>กระทู้ที่$i</a>";
                if($_SESSION['role']=='a'){
                    echo "&nbsp;&nbsp;&nbsp;<a href=delete.php?id=$i>ลบ</a>";
                }
                echo "</li>";
            }
        ?>
    </ul>
    </form>
</body>
<?php
    }
?>
</html>