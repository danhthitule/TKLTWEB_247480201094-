<?php
$x = $_POST["So1"];
$y = $_POST["So2"];
$pheptoan = $_POST["Cong"];
$kq = $x + $y;
echo "$x + $y = $kq";
$pheptoan = $_POST["Tru"];
$kq = $x - $y;
echo "$x - $y = $kq";
$pheptoan = $_POST["Nhan"];
$kq = $x * $y;
echo "$x * $y = $kq";
$pheptoan = $_POST["Chia"];
$kq = $x / $y;
echo "$x / $y = $kq";
$pheptoan = $_POST["Mod"];
$kq = $x % $y;
echo "$x % $y = $kq";

?>