<?php
function print_pattern($num)
{
    for ($i = 0; $i < $num; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            echo "* ";
        }
        echo "\n<br>";
    }
}
$num = 3;
print_pattern($num);



echo "<br>";

echo "<hr>";




for ($a = 3; $a >= 1; $a--) {
    for ($b = 1; $b <= $a; $b++) {
        echo $b;
    }
    echo "<br>";
}




echo "<br>";

echo "<hr>";


function pattern($n)
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
pattern($n);
?>