<html>
<head>
  <meta charset="utf-8">
  <title>แสดงการใช้งาน Switch</title>
</head>
<body>
  <?php
    $grade='F';
    $point=0;
    switch($grade)
    {
      case 'A':
        $point=4;
        break;
      case 'B':
        $point=3;
        break;
      case 'C':
        $point=2;
        break;
      case 'D':
        $point=1;
        break;
      case 'F':
        $point=0;
        break;
    }
    echo "Subject 662325 Web Programming<br/>";
    echo "You got $grade and has $point point.<br/>";
  ?>
</body>
</html>
