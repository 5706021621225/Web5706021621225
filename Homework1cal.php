<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      $firstname=$_POST['firstname'];
      $lastname=$_POST['lastname'];
      $nickname=$_POST['nickname'];
      $sex=$_POST['sex'];
      $day=$_POST['day'];
      $month=$_POST['month'];
      $year=$_POST['year'];
      $career=$_POST['career'];
      $phone=$_POST['phone'];
      $hobby=$_POST['hobby'];
      $facebook=$_POST['facebook'];
      $email=$_POST['email'];

      echo "<p>";
      echo "<b>ประวัติส่วนตัว</b><br/>";
      echo "<b>ชื่อ-นามสกุล : </b>$firstname $lastname ($nickname)<br/>";
      echo "<b>เพศ : </b>$sex<br/>";

      $year2=$year-543;
      if($month=="มกราคม") $month2="January";
      elseif ($month=="กุมภาพันธ์") $month2="February";
      elseif ($month=="มีนาคม") $month2="March";
      elseif ($month=="เมษายน") $month2="April";
      elseif ($month=="พฤษภาคม") $month2="May";
      elseif ($month=="มิถุนายน") $month2="June";
      elseif ($month=="กรกฎาคม") $month2="July";
      elseif ($month=="สิงหาคม") $month2="August";
      elseif ($month=="กันยายน") $month2="September";
      elseif ($month=="ตุลาคม") $month2="October";
      elseif ($month=="พฤศจิกายน") $month2="November";
      elseif ($month=="ธันวาคม") $month2="December";

      if($year2%4==0&&$month=="กุมภาพันธ์"&&$day<30)
        echo "<b>วัน/เดือน/ปีเกิด : </b>$day/$month2/$year2<br/>";
      elseif($year2%4!=0&&$month=="กุมภาพันธ์"&&$day<29)
        echo "<b>วัน/เดือน/ปีเกิด : </b>$day/$month2/$year2<br/>";
      elseif($year2%4!=0&&$month=="กุมภาพันธ์"&&$day>28)
        echo "<b>วัน/เดือน/ปีเกิด : </b>กรุณากรอกใหม่<br/>";
      else echo "<b>วัน/เดือน/ปีเกิด : </b>$day/$month2/$year2<br/>";

      $age=2559-$year;
      if($age>=1&&$age<=12) echo "<b>อายุ : </b>$age (เด็ก)<br/>";
      elseif($age>=13&&$age<=19) echo "<b>อายุ : </b>$age (วัยรุ่น)<br/>";
      elseif($age>19) echo "<b>อายุ : </b>$age (ผู้ใหญ่)<br/>";
      
      echo "<b>อาชีพ : </b>$career<br/>";
      echo "<b>เบอร์โทรศัพท์ : </b>$phone<br/>";
      echo "<b>งานอิเรก : </b>$hobby<br/>";
      echo "<b>Facebook : </b>$facebook<br/>";
      echo "<b>Email : </b>$email<br/>";
    ?>
  </body>
</html>
