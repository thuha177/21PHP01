<?php
// In chuỗi ký tự lên
$myString ="This is my string!";
// Chiều dài của chuỗi
echo strlen($myString);
echo "<br>";
//dem so ky tu trong chuoi
echo str_word_count($myString);
echo "<br>";
// Tìm vị trí của ký tự trong chuỗi
echo strpos($myString, "o");
echo "<br>";
//tim chuoi dau tien
echo strpos ($myString, "i");
echo "<br>";
//tim chuoi cuoi cung
echo strrpos ($myString, "i");
echo "<br>";
//Tim chuoi
echo strpos ($myString, "this");
echo "<br>";
//thay the ky tu
echo str_replace("is", "are", $myString);
echo "<br>";
echo strtoupper($myString);
echo "<br>";
echo mb_strtolower($myString);

