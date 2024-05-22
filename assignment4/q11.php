<?php
function factorial($n) {
    if ($n <= 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

function sumofSeries($n) {
    $sum = 0;
    for ($i = 1; $i <= $n; $i++) {
        $sum += 1 / factorial($i);
    }
    return $sum;
}

$n = 3;
echo "The sum of the series is: " . sumofSeries($n);
?>