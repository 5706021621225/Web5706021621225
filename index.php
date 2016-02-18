<html>
<head>
  <meta charset="utf-8">
</head>
<body>
  <form method="post" action="CalBMR.php">
    <table align="center" border="1" width="500">
      <?php
        echo "<tr>";
          echo "<td colspan='3' align='center'>ตารางคำนวณการเผาผลาญพลังงาน<br/>";
          echo "Basal Metabolic Rate (BMR)";
          echo "</td>";
        echo "</tr>";
      ?>
      <tr>
        <td>เพศ : </td>
        <td><input type="radio" name="sex" value="ชาย">ชาย</td>
        <td><input type="radio" name="sex" value="หญิง">หญิง</td>
      </tr>
      <tr>
        <td>ส่วนสูง : </td>
        <td><input type="text" name="high" size="10" value=""></td>
        <td>เซนติเมตร</td>
      </tr>
      <tr>
        <td>น้ำหนัก : </td>
        <td><input type="text" name="weight" size="10" value=""></td>
        <td>กิโลกรัม</td>
      </tr>
      <tr>
        <td>อายุ : </td>
        <td><input type="text" name="age" size="10" value=""></td>
        <td>ปี</td>
      </tr>
      <tr>
        <td>ข้อมูลแคลอรี่ในอาหาร</td>
      </tr>
      <tr>
        <td>อาหารเช้า : </td>
        <td>
          <select name="breakfast">
            <option value="750"/>ข้าวต้มยำกุ้ง 750 kcal
            <option value="730"/>ก๋วยเตี๋ยว 730 kcal
            <option value="580"/>กระเพาะปลา 580 kcal
            <option value="900"/>ข้าวเหนียวหมูปิ้ง 900 kcal
          </select>
        </td>
      </tr>
      <tr>
        <td>อาหารกลางวัน : </td>
        <td>
          <select name="lunch">
            <option value="950"/>ข้าวมันไก่ 950 kcal
            <option value="730"/>ก๋วยเตี๋ยว 730 kcal
            <option value="810"/>ข้าวคลุกกะปิ 810 kcal
            <option value="930"/>กระเพราไข่ดาว 930 kcal
          </select>
        </td>
      </tr>
      <tr>
        <td>อาหารเย็น : </td>
        <td>
          <select name="dinner">
            <option value="800"/>ก๋วยเตี๋ยวต้มยำ 800 kcal
            <option value="830"/>บะหมี่หมูแดง 830 kcal
            <option value="650"/>โจ๊กหมูสับ 650 kcal
            <option value="600"/>ปลานึ่ง 600 kcal
          </select>
        </td>
      </tr>
      <tr>
        <td>เครื่องดื่ม : </td>
        <td>
          <select name="drink">
            <option value="290"/>น้ำส้มคั้น 290 kcal
            <option value="350"/>นมสด 350 kcal
            <option value="550"/>น้ำอัดลม 550 kcal
            <option value="500"/>ชาเขียว 500 kcal
          </select>
        </td>
      </tr>
      <tr>
        <td align="center" colspan="3">
          <input type="submit" value=" คำนวณ "/>
          <input type="reset" value=" Clear "/>
        </td>
      </tr>
    </table>
  </form>
</body>
</html>
