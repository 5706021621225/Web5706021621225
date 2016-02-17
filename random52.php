<html>
<body bgcolor=''>
  <?php
    $number=array();
    echo "<form>";
    echo "<table border='1' align='center' width='350'>";
    echo "<tr>";
    echo "<td align='center' colspan='4'>Random ตัวเลข 1 ถึง 52 โดยไม่ซ้ำกัน</td>";
    echo "</tr>";
    for($n=1;$n<=13;$n++)
    {
      echo "<tr>";
      for($n2=1;$n2<=4;$n2++)
      {
        $rand=mt_rand(1,52);
        while(true)
        {
          if(!isset($number[$rand]))
          {
            $number[$rand]=$rand;
            break;
          }
          else $rand=mt_rand(1,52);
        }
        echo "<td align='center'>";
        echo $number[$rand];
        echo "</td>";
      }
      echo "</tr>";
    }
    echo "</table>";
    echo "</form>";
  ?>
</body>
</html>
