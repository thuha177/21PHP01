<?php
/*BT1:
1.Tạo một class mô tả đối tượng người dùng
Gồm có các thuộc tính: Họ tên, tuổi, năm sinh
Gồm các phương thức: Add, edit, delete người dùng
Không cho phép kế thừa phương thức edit ở class kế thừa
2.Tạo một class xây dựng đối tượng sinh viên
Kế thừa đối tượng người dùng
Tạo thêm phương thức bảng điểm, danh sách môn học
3.Gọi phương thức add và delete ra*/


class User
{
    public $name;
    public $age;
    public $birthday;

    public function __construct($name, $age, $birthday)
    {
        $this->name = $name;
        $this->age = $age;
        $this->birthday = $birthday;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAge()
    {
        return $this->age;
    }


    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getBirthday()
    {
        return $this->birthday;
    }


    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }


    public function Add()
    {
        echo "Add user" . $this->name . "\n";
    }

    private function Edit()
    {
        echo "Edit user" . $this->name . "\n";
    }

    public function Delete()
    {
        echo "Delete user" . $this->name . "\n";
    }

}

class Student extends User
{
    public function Bangdiem()
    {
        echo "5,6,7,8,9,10";
    }

    public function Danhsachmonhoc()
    {
        echo "Toan, Ly, Hoa, Sinh, Van, Su, Dia";
    }


}

$student1 = new Student('A', 20, '1-1-2002');
$student1->Add();
$student2 = new Student('B',19,'1-1-2002');
$student2->Delete();


