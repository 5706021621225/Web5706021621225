<html>
<head>
  <meta charset="utf-8">
  <title>การแทรกตัวแปรงลในสตริง</title>
</head>
<body>
  <?php
    $x=123;
    $y="abc";
    echo "$ x = $x<br/>";
    echo "$ y = $y<br/>";
    $x=&$y;
    echo "$ x = &$ y <br/>";
    echo "$ x = $x<br/>";
    echo "New Value $ x <br/>";
    $x="php";
    echo "$ x = $x<br/>";
    echo "$ y = $y<br/>";
    echo "New Valeu $ y<br/>";
    $y=100;
    echo "$ x = $x<br/>";
    echo "$ y = $y<br/>";

    echo "=============================<br/>";
    $name="สมชาย";
    $age=30;
    $country="ประเทศไทย";
    echo "My name is $name, $age years old from $country";
  ?>
</body>
</html>
