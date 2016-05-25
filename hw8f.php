// Task 1

<?php

function pifagor($x1, $x2, $x3, $y1, $y2, $y3) {
    $a = ($x2 - $x1) ** 2 + ($y2 - $y1) ** 2;
    $b = ($x3 - $x1) ** 2 + ($y3 - $y1) ** 2;
    $c = ($x3 - $x2) ** 2 + abs($y3 - $y2) ** 2;

    if (($a + $b == $c ) || ($a + $c == $b) || ($b + $c == $a) ) {
        $res = ' �������������.';
    } else {
        $res = ' �� �������������';
    }
    return '��� �����������'.$res;

}
?>

// Task 2
<?php


function pifagorCount($maxSideLen) {
    $count = 0;
    for ($i = 1; $i < $maxSideLen; $i++){
        for ($n = $i; $n < $maxSideLen; $n++){
            for ($m = $n; $m < $maxSideLen; $m++){
                if ((($i ** 2 + $n ** 2) === ($m ** 2)) || (($i ** 2 + $m ** 2) === ($n ** 2)) ||
                    (($m ** 2 + $n ** 2) === ($i ** 2))) {
                    $count++;
                }

            }
        }
    }
    return $count;
}
//test git

echo "fuck";