<?php
header('Content-Type: text/html; charset=utf-8');

echo "<h3>1. In thông tin trực tiếp bằng echo</h3>";
echo "Họ tên: Hồ Văn Hùng <br>";
echo "Ngày sinh: 01/10/2005 <br>";
echo "Mã số sinh viên: 2123110265 <br>";

echo "<hr>";

echo "<h3>2. Khai báo biến và in giá trị</h3>";
$hoTen = "Hồ Văn Hùng";
$mssv = "2123110265";
$sdt = "0962750432";
$ngaySinh = "01/10/2005";

echo "Họ và tên: " . $hoTen . "<br>";
echo "MSSV: " . $mssv . "<br>";
echo "Số điện thoại: " . $sdt . "<br>";
echo "Ngày sinh: " . $ngaySinh . "<br>";

echo "<hr>";

echo "<h3>3. Khai báo và hiển thị hằng số</h3>";
define("HOST", "localhost");
define("DATABASE", "db_quanlysinhvien");
define("USERNAME", "root");
define("PASSWORD", "");

echo "HOST: " . HOST . "<br>";
echo "DATABASE: " . DATABASE . "<br>";
echo "USERNAME: " . USERNAME . "<br>";
echo "PASSWORD: '" . PASSWORD . "' (rỗng)<br>";

echo "<hr>";

echo "<h3>4. Phân biệt dấu nháy kép và dấu nháy đơn</h3>";
$monHoc = "Lập trình Web 1";

echo "Dùng nháy kép: Xin chào, tôi đang học môn $monHoc <br>";
echo 'Dùng nháy đơn: Xin chào, tôi đang học môn $monHoc <br>';
?>