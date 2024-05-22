<?php
function isPrime($n) {
    if ($n <= 1) {
        return false;
    }
    for ($i = 2; $i <= $n / 2; $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}
function check($n) {
    for ($i = 2; $i <= $n / 2; $i++) {
        if (isPrime($i)) {
            if (isPrime($n - $i)) {
                echo $n . " = " . $i . " + " . ($n - $i) ;
                echo "<br>";
                $flag = false;
            }
        }
    }
    if ($flag==true) {
        echo "No combination found";
    }
}

$n = 20;
check($n);
?>
