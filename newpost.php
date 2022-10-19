<!DOCTYPE html>
<html lang="en">
    <?php
    session_start();
    ?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1 style="text-align:center">Zerlix Webboard</h1><hr>
    <?php echo "ผู้ใช้ : $_SESSION[username]"?><br>
    <table>

        <tr><td colspan="2">หมวดหมู่ : <select name="หมวดหมู่">
                <option value="เรื่องทั่วไป">เรื่องทั่วไป</option>
                <option value="เรื่องเรียน">เรื่องเรียน</option>
            </select></tr></td>
        <tr><td>หัวข้อ  :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input type="text" name="topic"></td></tr>
        <tr><td>เนื้อหา :</td><td><textarea row="2" cols="30"></textarea></td></tr>
        <tr><td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="บันทึกข้อความ"></td></tr>
    </table><br>
</body>
</html>