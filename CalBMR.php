<html>
<head>
  <meta charset="utf-8">
</head>
<body>
  <?php
    $sex=$_POST['sex'];
    $high=$_POST['high'];
    $weight=$_POST['weight'];
    $breakfast=$_POST['breakfast'];
    $lunch=$_POST['lunch'];
    $dinner=$_POST['dinner'];
    $drink=$_POST['drink'];

    if($sex=="ชาย")
      $bmr=66+(13.7*$weight)+(5*$high)-(6.8*$age);
    else
      $bmr=665+(9.6*$weight)+(1.8*$high)-(4.7*$age);

    $totalcal=$breakfast+$lunch+$dinner+$drink;

    echo "<big>ข้อมูลที่ได้จากไฟล์ index.php</big><br/>";
    echo "เพศ : $sex<br/>";
    echo "ส่วนสูง : $high<br/>";
    echo "น้ำหนัก : $weight<br/>";
    echo "BMR : $bmr<br/>";
    echo "แคลอรี่ที่ได้รับในวันนี้ : $totalcal<br/><br/>";

    echo "<form method='post' action='#'>";
      echo "<table border='1' width='400'>";
        echo "<tr>";
        echo "<td>ข้อมูลการกำลังกายต่อเนื่อง 1 ชม.</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>เลือกวิธีการออกกำลังกาย</td>";
        echo "<td>";
        echo "<select name='sport'>";
        echo "<option value='200'>เดิน";
        echo "<option value='700'>วิ่ง";
        echo "<option value='500'>ปั่นจักรยาน";
        echo "<option value='750'>ว่าบน้ำ";
        echo "</select>";
        echo "</td>";
        echo "</tr>";

        echo "<tr>";
          echo "<td align='center' colspan='2'>";
            echo "<input type='hidden' name='sex' value='$sex'>";
            echo "<input type='hidden' name='high' value='$high'>";
            echo "<input type='hidden' name='weight' value='$weight'>";
            echo "<input type='hidden' name='breakfast' value='$breakfast'>";
            echo "<input type='hidden' name='lunch' value='$lunch'>";
            echo "<input type='hidden' name='dinner' value='$dinner'>";
            echo "<input type='hidden' name='drink' value='$drink'>";
            echo "<input type='submit' value=' คำนวณ '/>";
            echo "<input type='reset' value=' Clear '/>";
          echo "</td>";
        echo "</tr>";
        $sport=$_POST['sport'];
        $x=$totalcal-($bmr+$sport);
        echo "<tr>";
          echo "<td>ปริมาณแคลอรี่ คงเหลือ = $x</td>";
        echo "</tr>";
      echo "</table>";
    echo "</form>";
  ?>
</body>
</html>
