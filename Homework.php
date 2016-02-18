<html>
<head>
  <meta charset="utf-8">
</head>
<body>
  <form method="post" action="Homeworkcal.php">
    <table border="1" align="center" width="450">
      <tr>
        <td colspan="4" align="center">
          <big></b>กรอกประวัติส่วนตัว</b></big>
        </td>
      </tr>
      <tr>
        <td><b>ชื่อ : </b></td>
        <td>
          <input type="text" name="firstname" size="15" value="">
        </td>
      </tr>
      <tr>
        <td><b>นามสกุล : </b></td>
        <td>
          <input type="text" name="lastname" size="15" value="">
        </td>
      </tr>
      <tr>
        <td><b>ชื่อเล่น : </b></td>
        <td>
          <input type="text" name="nickname" size="15" value="">
        </td>
      </tr>
      <tr>
        <td><b>เพศ : </b></td>
        <td>
          <input type="radio" name="sex" value="ชาย">ชาย
          <input type="radio" name="sex" value="หญิง">หญิง
        </td>
      </tr>
      <tr>
        <td><b>วัน/เดือน/ปีเกิด : </b></td>
        <td>
          <?php
            echo "<select name='day'>";
              for($i=1;$i<=31;$i++)
              {
                echo "<option/>$i";
              }
            echo "</select>";
          ?>
        </td>
        <td>
          <select name="month">
            <option/>มกราคม<option/>กุมภาพันธ์<option/>มีนาคม<option/>เมษายน<option/>พฤษภาคม<option/>มิถุนายน
            <option/>กรกฎาคม<option/>สิงหาคม<option/>กันยายน<option/>ตุลาคม<option/>พฤศจิกายน<option/>ธันวาคม
          </select>
        </td>
        <td>
          <?php
            echo "<select name='year'>";
              for($i=2530;$i<=2559;$i++)
              {
                echo "<option/>$i";
              }
            echo "</select>";
          ?>
        </td>
      </tr>
      <tr>
        <td><b>อาชีพ : </b></td>
        <td>
          <input type="text" name="career" size="15" value="">
        </td>
      </tr>
      <tr>
        <td><b>เบอร์โทรศัพท์ : </b></td>
        <td><input type="text" name="phone" maxlength="10" size="15" value=""></td>
      </tr>
      <tr>
        <td><b>งานอดิเรก : </b></td>
        <td><input type="text" name="hobby" size="15" value=""></td>
      </tr>
      <tr>
        <td><b>Facebook : </b></td>
        <td><input type="text" name="facebook" size="15" value=""></td>
      </tr>
      <tr>
        <td><b>E-mail : </b></td>
        <td><input type="email" name="email" size="15" value=""></td>
      </tr>
      <tr>
        <td colspan="4" align="center">
          <input type="submit" value="  OK  ">
          <input type="reset" value="  Clear  ">
        </td>
      </tr>
    </table>
  </form>
</body>
</html>
