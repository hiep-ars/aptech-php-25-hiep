<?php
$a = date("H");
echo $a < "20" ? "dung" : "sai";
echo "<br>";
echo $a < "5" ? "dung" : "sai";
$a = date("H");
if ($a < "20") {
    echo "dung";
}
else {
    echo "sai";
}