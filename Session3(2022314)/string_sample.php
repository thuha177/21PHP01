<?php
//Khai báo một chuỗi là họ tên đầy đủ của bạn
$myString = "Nguyen Thi Thu Ha";
echo $myString."\n";
//Đếm xem họ tên bạn có bao nhiêu ký tự
echo 'So ky tu Ho ten la '.strlen($myString)."\n";
//Đếm xem tên bạn có bao nhiêu chữ “n”
$mystrlow = mb_strtolower($myString);
echo substr_count($mystrlow, "n")."\n";
//Đếm xem tên của bạn có bao nhiêu ký tự
echo str_word_count($myString)."\n";
//In đầy đủ họ tên của bạn lên và viết hoa tên đệm của bạn
echo strtoupper($myString)."\n";
//Thay thế tên của bạn bằng chữ 21PHP01
echo str_replace("Ha", "21PHP01", $myString);