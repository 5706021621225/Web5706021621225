<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <form method="get" action="Lab5-9cal.php">
    <table border="1" align="center" width="500">
      <tr>
        <td colspan="2" align="center">
          <big>กรอกประวัติส่วนตัว</big>
        </td>
      </tr>
      <tr>
        <td>ชื่อ : </td>
        <td><input type="text" name="name" size="10" value=""></td>
      </tr>
      <tr>
        <td>นามสกุล : </td>
        <td><input type="text" name="surname" size="10" value=""></td>
      </tr>
      <tr>
        <td>ชื่อเล่น : </td>
        <td><input type="text" name="nickname" size="10" value=""></td>
      </tr>
      <tr>
        <td>วัน/เดือน/ปีเกิด : </td>
        <td><input type="text" name="birddate" size="10" value=""></td>
      </tr>
      <tr>
        <td>เพศ : </td>
        <td>
          <input type="radio" name="sex" value="ชาย">ชาย<br>
          <input type="radio" name="sex" value="หญิง">หญิง<br>
        </td>
      </tr>
      <tr>
        <td>อายุ : </td>
        <td><select name="age"><option/>1<option/>2</select></td>
      </tr>
      <tr>
        <td>อาชีพ : </td>
        <td><input type="text" name="career" size="15" value=""></td>
      </tr>
      <tr>
        <td>สีที่ชอบ : </td>
        <td><input type="text" name="color" size="15" value=""></td>
      </tr>
      <tr>
        <td>เบอร์โทรศัพท์ : </td>
        <td><input type="text" name="phone" size="15" value=""></td>
      </tr>
      <tr>
        <td>E-mail : </td>
        <td><input type="email" name="mail" size="15" value=""></td>
      </tr>
      <tr>
        <td colspan="2" align="center">
          <input type="submit" value="   OK   "/>
          <input type="reset" value=" Clear "/>
        </td>
      </tr>
    </table>
  </form>
</body>
</html>
