<html>
<head>
  <title>การสร้างฟอร์มในการรับค่าเพื่อการตาราง</title>
</head>
<body>
  <form method="post" action="Lab27C.php">
    <table align="center" border="1" width="400">
      <tr>
        <td colspan="2" align="center">
          <big>ทดสอบการใช้ Control Structure</big>
        </td>
      </tr>
      <tr>
        <td align="right">Enter row : </td>
        <td><input type="text" name="row" size="15" value=""></td>
      </tr>
      <tr>
        <td align="right">Enter column : </td>
        <td><input type="text" name="column" size="15" value=""></td>
      </tr>
      <tr>
        <td colspan="2" align="center">
          <input type="submit" value="   OK   ">
          <input type="reset" value="   Clear   ">
        </td>
      </tr>
    </table>
  </form>
</body>
</html>
