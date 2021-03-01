<?php
echo "so nguyen to la : ";
for ($i = 0; $i <= 100; $i++) {
    if ($i < 2) {
        continue;
    }
    $kiemtra = false;
    for ($j = 2; $j < ($i/2); $j++) {
        if ($i % $j == 0) {
            $kiemtra = false;
            break;
        }
        $kiemtra = true;
    }
    if ($i == 2|| $i == 3 || $kiemtra) {
        echo "$i &nbsp;";
    }
}