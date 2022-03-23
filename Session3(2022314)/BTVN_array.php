<?php
/*Tạo 1 mảng danh sách thông tin lớp học gồm 5 bạn
Thông tin gồm: Họ và tên, ngày sinh, email
In danh sách thông tin lớp học lên màn hình
Đổi tên của bạn thứ 2 thành tên Nguyễn Văn Tuấn và in danh sách lớp học lại 1 lần nữa
Loại bỏ bạn thứ 3 ra khỏi danh sách
Kiểm tra xem email của bạn nào có chứa chữ “n” trong đó thì in ra thông tin đầy đủ của bạn đó*/

$classInfo = array(
    'A' => array('Name' => 'Nguyen Van A', 'Birthday' => '1-1-1990', 'Email' => 'nguyenvana@gmail.com'),
    'B' => array('Name' => 'Nguyen Viet B', 'Birthday' => '1-1-1991', 'Email' => 'nguyenvietb@gmail.com'),
    'C' => array('Name' => 'Tran Van C', 'Birthday' => '1-1-1992', 'Email' => 'tranvanc@gmail.com')
);
echo '<ul>';
foreach ($classInfo as $key => $Infor)
{
    echo '<li>';
    echo 'Name: ' . $Infor['Name'] . '<br/>';
    echo 'Birthday:' . $Infor['Birthday'] . '<br/>';
    echo 'Email: ' . $Infor['Email'] . '<br/>';
    echo '</li>';
}
echo '</ul>';

$changeName['B']['Name'] = 'Nguyễn Văn Tuấn';
function writeInfo($changeName) {
    foreach ($changeName as $key => $Infor) {
        foreach ($Infor as $key1 => $Infor1) {
            echo $key1.' - '.$Infor1;
            echo "<br>";
        }
    }
}


writeInfo($changeName);
$changeName['B']['Name'] = 'Nguyễn Văn Tuấn';
writeInfo($changeName);
