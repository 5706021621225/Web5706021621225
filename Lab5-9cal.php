<html>
<head>
  <meta charset="utf-8">
</head>
<body>
  <?php
    $name=$_GET['name'];
    $surname=$_GET['surname'];
    $nickname=$_GET['nickname'];
    $birddate=$_GET['birddate'];
    $sex=$_GET['sex'];
    $age=$_GET['age'];
    $career=$_GET['career'];
    $color=$_GET['color'];
    $phone=$_GET['phone'];
    $mail=$_GET['mail'];

    echo "<p>";
    echo "<b>ประวัติส่วนตัว</b><br/>";
    echo "ชื่อ : <i>$name</i><br/>";
    echo "นามสกุล : <i>$surname</i><br/>";
    echo "ชื่อเล่น : <i>$nickname</i><br/>";
    echo "วันเกิด : <i>$birddate</i><br/>";
    echo "เพศ : <i>$sex</i><br/>";
    if($age>=1&&$age<=100)
      echo "อายุ : <i>$age</i><br/>";
    else echo "อายุ : <i>กรุณากรอกใหม่</i><br/>";
    echo "อาชีพ : <i>$career</i><br/>";
    echo "สีที่ชอบ : <i>$color</i><br/>";
    echo "เบอร์โทรศัพท์ : <i>$phone</i><br/>";
    echo "E-mail : <i>$mail</i><br/>";
  ?>
</body>
</html>
