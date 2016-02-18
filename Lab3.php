<html>
<head>
  <meta charset="utf-8">
  <title>การกำหนดค่าแบบอ้างอิง</title>
</head>
<body>
  <?php
    $x=123;
    $y="abc";
    echo "$ x = "; echo $x; echo "<br/>";
    echo "$ y = "; echo $y; echo "<br/>";
    $x=&$y;
    echo "$ x = &$ y <br/>";
    echo "$ x = "; echo $x; echo "<br/>";
    echo "New Value $ x <br/>";
    $x="php";
    echo "$ x = "; echo $x; echo "<br/>";
    echo "$ y = "; echo $y; echo "<br/>";
    echo "New Valeu $ y<br/>";
    $y=100;
    echo "$ x = "; echo $x; echo "<br/>";
    echo "$ y = "; echo $y;
  ?>
</body>
</html>
