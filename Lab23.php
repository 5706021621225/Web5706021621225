<html>
<head>
  <meta charset="utf-8">
  <title>แสดงการใช้งาน While</title>
</head>
<body>
  <?php
    $num=1;
    while ($num<10) {
      if($num%2==0) echo "$num is Even Number<br>";
      else echo "$num is Odd Number<br>";
      $num++;
    }
  ?>
</body>
</html>
