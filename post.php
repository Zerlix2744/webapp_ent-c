<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>
<body>
    <h1 align="center">Zerlix Webboard</h1><hr>
    <br>
    <div align="center">
        ต้องการดูกระทู้หมายเลข <?php echo $_GET["id"];?>
    </div>
    <div  align="center">
    <?php
        $N=$_GET['id'];
        if($N % 2 == 0)
        echo "เป็นกระทู้หมายเลยคู่";
        else
        echo "เป็นกระทู้หมายเลขคี่"
    ?>
    </div>
    <br>
    <table style="border: 2px solid black;width:40%" align="center">
        <tr><td style="background-color:#6cd2fe ;"align="center">เเสดงความคิดเห็น</td></tr>
        <tr><td><textarea name ="comment" row="50" cols="100"></textarea></td></tr>
        <tr><td align="center" ><input type="submit" value="ส่งข้อความ"></td></tr>
    </table>   
    <br>
    <div align="center"><a href="index.php">กลับไปหน้าหลัก</a></div>
</body>
</html>