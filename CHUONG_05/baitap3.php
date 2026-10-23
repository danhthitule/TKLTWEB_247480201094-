<?php
while(true){
$x = rand(1, 10);
$y = rand(1, 10);
if($x > $y){
    break;
}
}
//$x = 3;
//$y = 5;

echo "x = $x, y = $y <br>";
echo "Cộng:" . ($x + $y) ."<br>";
echo "Trừ:" .($x - $y) ."<br>";
echo "Nhân:" .($x * $y) ."<br>";
echo "Chia:" . round($x / $y, 2) . "<br>";
echo "Chia lấy dư:" . ($x % $y);
?>