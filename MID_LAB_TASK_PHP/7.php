<html>
    <body>
      <table border=1px>
          <tr>
              <td> 
                  <?php
                    function print_pattern1($num)
                    {
                        for ($i = 0; $i < $num; $i++) {
                            for ($j = 0; $j <= $i; $j++) {
                                echo "* ";
                            }
                            echo "<br>";
                        }
                    }
                    $num = 3;
                    print_pattern1($num);
                    ?>
                </td>
                <td> 
                    <?php
                        for ($a = 3; $a >= 1; $a--) {
                            for ($b = 1; $b <= $a; $b++) {
                                echo $b;
                            }
                            echo "<br>";
                        }
                    ?>
                </td>
                <td> 
                    <?php
                    function pattern3($n)
                    {
                        $num = 65;
                        for ($i = 0; $i < $n; $i++) {
                            for ($j = 0; $j <= $i; $j++) {
                                $ch = chr($num);
                                echo $ch . " ";
                                $num = $num + 1;
                            }
                            echo "<br>";
                        }
                    }
                    $n = 3;
                    pattern3($n);
                    ?>
                </td>
            </tr>
        </table>
    </body
</html>