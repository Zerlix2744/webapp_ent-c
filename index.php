<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zerlix Webboard</title>
</head>
<body>
    <form action="post.php" method="post">
    <h1 style="text-align:center">Zerlix Webboard</h1><hr>
    <p>หมวดหมู่ : <select name="หมวดหมู่"></p>
        <option value="--ทั้งหมด--">--ทั้งหมด--</option>
        <option value="เรื่องทั่วไป">เรื่องทั่วไป-</option>
        <option value="เรื่องเรียน">เรื่องเรียน</option>
    </select>
    <a href="login.html" style="float: right">เข้าสู่ระบบ</a>
    <ul>
        <?php
            for($i=1;$i<=10;$i++){
                echo "<li><a href=post.php?id=$i>กระทู้ที่$i</a></li>";
            }
        ?>
    </ul>
    </form>
</body>
</html>