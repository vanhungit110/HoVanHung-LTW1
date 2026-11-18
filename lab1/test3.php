<?php
header('Content-Type: text/html; charset=utf-8');

echo "<h2>CÂU 3: CÁC HÀM XỬ LÝ CHUỖI CƠ BẢN</h2>";

echo "<h3>1. Hàm trim()</h3>";
$chuoiKhoangTrang = "   Xin chào các bạn sinh viên   ";
echo "Chuỗi gốc: '<pre style='display:inline'>$chuoiKhoangTrang</pre>' (Độ dài: " . strlen($chuoiKhoangTrang) . ")<br>";

$daTrim = trim($chuoiKhoangTrang);
echo "Sau khi trim(): '<pre style='display:inline'>$daTrim</pre>' (Độ dài: " . strlen($daTrim) . ")<br>";

echo "<hr>";

echo "<h3>2. Hàm ltrim() và rtrim()</h3>";
$chuoiGoc2 = "   Lập trình Web 1   ";

$daLtrim = ltrim($chuoiGoc2);
echo "Sau khi ltrim() (xóa trái): '<pre style='display:inline'>$daLtrim</pre>' (Độ dài: " . strlen($daLtrim) . ")<br>";

$daRtrim = rtrim($chuoiGoc2);
echo "Sau khi rtrim() (xóa phải): '<pre style='display:inline'>$daRtrim</pre>' (Độ dài: " . strlen($daRtrim) . ")<br>";

echo "<hr>";

echo "<h3>3. Hàm cắt chuỗi substr()</h3>";
$chuoiDai = "Chao mung cac ban den voi mon hoc Lap trinh Web 1 PHP va MySQL";
echo "Chuỗi gốc (>30 ký tự): <b>$chuoiDai</b> (Độ dài: " . strlen($chuoiDai) . " ký tự)<br>";

$muoiKyTuDau = substr($chuoiDai, 0, 10);
echo "10 ký tự đầu tiên: <b>$muoiKyTuDau</b><br>";

$tuKyTuThu5 = substr($chuoiDai, 4);
echo "Từ ký tự thứ 5 đến hết chuỗi: <b>$tuKyTuThu5</b><br>";

echo "<hr>";

echo "<h3>4. Hàm thay thế chuỗi str_replace()</h3>";
$cauGoc = "Hoc lap trinh PHP rat kho nhung thu vi va bo ich cho sinh vien CNTT.";
echo "Chuỗi gốc (>30 ký tự): <b>$cauGoc</b><br>";

$cauDaThayThe = str_replace("rat kho", "rat de", $cauGoc);
echo "Chuỗi sau khi thay thế: <b>$cauDaThayThe</b><br>";
?>