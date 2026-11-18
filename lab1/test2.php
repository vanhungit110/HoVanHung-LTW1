<?php
header('Content-Type: text/html; charset=utf-8');

echo "<h2>CÂU 2: TOÁN TỬ, CHUỖI VÀ KIỂU DỮ LIỆU</h2>";

echo "<h3>1. Phép toán số học</h3>";
$a = 15;
$b = 4;

echo "Số a = $a, Số b = $b <br>";
echo "Cộng ($a + $b): " . ($a + $b) . "<br>";
echo "Trừ ($a - $b): " . ($a - $b) . "<br>";
echo "Nhân ($a * $b): " . ($a * $b) . "<br>";
echo "Chia ($a / $b): " . ($a / $b) . "<br>";
echo "Chia lấy dư ($a % $b): " . ($a % $b) . "<br>";

echo "<hr>";

echo "<h3>2. Toán tử so sánh</h3>";
$soNguyen = 10;
$chuoiSo = "10";

echo "So sánh == : "; var_dump($soNguyen == $chuoiSo); echo "<br>";
echo "So sánh === : "; var_dump($soNguyen === $chuoiSo); echo "<br>";
echo "So sánh != : "; var_dump($soNguyen != $chuoiSo); echo "<br>";
echo "So sánh <> : "; var_dump($soNguyen <> $chuoiSo); echo "<br>";
echo "So sánh !== : "; var_dump($soNguyen !== $chuoiSo); echo "<br>";

echo "<hr>";

echo "<h3>3. Toán tử tăng trước và tăng sau</h3>";
$x = 5;
echo "Giá trị ban đầu của x: $x <br>";
echo "Thực hiện tăng trước (++\$x): " . (++$x) . " | Giá trị x sau lệnh: $x <br>";

$y = 5;
echo "Giá trị ban đầu của y: $y <br>";
echo "Thực hiện tăng sau (\$y++): " . ($y++) . " | Giá trị y sau lệnh: $y <br>";

echo "<hr>";

echo "<h3>4. Toán tử nối chuỗi</h3>";
$str1 = "Xin chào";
$str2 = "Việt Nam";

$ketQuaNoi = $str1 . " " . $str2;
echo "Dùng toán tử (.) : $ketQuaNoi <br>";

$str1 .= " các bạn!";
echo "Dùng toán tử (.=) : $str1 <br>";

echo "<hr>";

echo "<h3>5. Đếm số lượng ký tự</h3>";
$chuoiKhongDau = "Lap trinh PHP";
$chuoiCoDau = "Lập trình PHP";

echo "Chuỗi không dấu '$chuoiKhongDau' - strlen(): " . strlen($chuoiKhongDau) . "<br>";
echo "Chuỗi có dấu '$chuoiCoDau' - mb_strlen(): " . mb_strlen($chuoiCoDau, "UTF-8") . "<br>";
echo "(Thử dùng strlen() cho chuỗi có dấu sẽ bị sai số byte: " . strlen($chuoiCoDau) . ")<br>";

echo "<hr>";

echo "<h3>6. Chuyển đổi chữ hoa / chữ thường</h3>";
$text = "Học Lập Trình Web Với PHP";

echo "strtoupper(): " . strtoupper($text) . "<br>";
echo "strtolower(): " . strtolower($text) . "<br>";
echo "mb_strtoupper(): " . mb_strtoupper($text, "UTF-8") . "<br>";
echo "mb_strtolower(): " . mb_strtolower($text, "UTF-8") . "<br>";

echo "<hr>";

echo "<h3>7. Ép kiểu string sang int</h3>";
$s1 = "123 abc";
$s2 = "abc 123";

$epKieu1 = (int)$s1;
$epKieu2 = (int)$s2;

echo "Ép kiểu '123 abc' thành int: "; var_dump($epKieu1); echo "<br>";
echo "Ép kiểu 'abc 123' thành int: "; var_dump($epKieu2); echo "<br>";

echo "<hr>";

echo "<h3>8. Kiểm tra kiểu dữ liệu bằng var_dump()</h3>";
$kieuInt = 2026;
$kieuFloat = 9.75;
$kieuString = "PHP & MySQL";
$kieuBool = true;

var_dump($kieuInt); echo "<br>";
var_dump($kieuFloat); echo "<br>";
var_dump($kieuString); echo "<br>";
var_dump($kieuBool); echo "<br>";
?>