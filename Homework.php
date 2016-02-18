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
          <select name="day">
            <option/>01<option/>02<option/>03<option/>04<option/>05<option/>06<option/>07<option/>08<option/>09<option/>10
            <option/>11<option/>12<option/>13<option/>14<option/>15<option/>16<option/>17<option/>18<option/>19<option/>20
            <option/>21<option/>22<option/>23<option/>24<option/>25<option/>26<option/>27<option/>28<option/>29<option/>30
            <option/>31
          </select>
        </td>
        <td>
          <select name="month">
            <option/>มกราคม<option/>กุมภาพันธ์<option/>มีนาคม<option/>เมษายน<option/>พฤษภาคม<option/>มิถุนายน
            <option/>กรกฎาคม<option/>สิงหาคม<option/>กันยายน<option/>ตุลาคม<option/>พฤศจิกายน<option/>ธันวาคม
          </select>
        </td>
        <td>
          <select name="year">
            <option/>2530<option/>2531<option/>2532<option/>2533<option/>2534<option/>2535
            <option/>2536<option/>2537<option/>2538<option/>2539<option/>2540<option/>2541
            <option/>2542<option/>2543<option/>2544<option/>2545<option/>2546<option/>2547
            <option/>2548<option/>2549<option/>2550<option/>2551<option/>2552<option/>2553
            <option/>2554<option/>2555<option/>2556<option/>2557<option/>2558<option/>2559
          </select>
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
