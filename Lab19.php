<html>
<head>
  <meta charset="utf-8">
  <title>แสดงการใช้งาน if-else</title>
</head>
<body>
  <?php
    $score=40;
    $limit=50;
    $name="Somchai";
    if($score>=$limit)
    {
      echo "Student Name : $name<br/>";
      echo "Student Score : $score (Passed)";
    }
    else{
      echo "Student Name : $name<br/>";
      echo "Student Score : $score (Failed)<br/>";
    }
  ?>
</body>
</html>
