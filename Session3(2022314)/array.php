<?php
$arr = array('Nam', 'Quoc', 'Tuan');
//echo "<pre>";
//var_dump($arr);
foreach ($arr as $key => $value) {
    echo $key.'-'.$value;

}

$arr2 = array('nam2222' => 'Nam', 'quoc' => 'Quoc', 'tuan' => 'Tuan');
foreach ($arr2 as $key => $value) {
    echo $key . ' -'. $value;
}

