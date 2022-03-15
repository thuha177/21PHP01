<!--BTVN:-->
<!--Tạo form đăng ký người dùng gồm: Họ tên, ngày tháng năm sinh, giới tính, quê quán, ảnh đại diện-->
<!--Validate tất cả các trường phải được nhập-->
<!--Hiển thị tất cả thông tin vừa đăng ký lên màn hình sau khi đăng ký thành công-->

<!DOCTYPE html>
<html>
<head>
    <title>User register form</title>
</head>
<body>
<?php
$errName = '';
$errBirthday = '';
$errGender = '';
$errAvatar = '';
$errOrigins = '';

if (isset($_POST['Name'])) {
    if ($_POST['Name'] == '') {
        $errName = 'Please input name';
    }
    if ($_POST['Birthday'] == '') {
        $errBirthday = 'Please input day of birth';
    }

    if ($_POST['Gender'] == '') {
        $errGender = ' Please input gender';
    }

    if ($_POST['Avatar'] == '') {
        $errPAvatar = 'Please input Avatar';
    }
    if ($_POST['Origins'] == '') {
        $errOrigins = 'Please input Origins';
    }

} else {
    echo "Chưa submit";
}
?>
<h1>User register</h1>
<form action="#" method="POST">
    <p>
        Name
        <input type="text" name="Name" value="<?php echo isset($_POST['Name'])?$_POST['Name']:'';?>">
        <?php echo $errName;?>
    </p>
    <p>
        Birthday
        <input type="date" name="Birthday" <?php echo isset($_POST['Birthday'])?$_POST['Birthday']:'';?>>
        <?php echo $errBirthday;?>
    </p>
    <p>
        Gender
        <input type="radio" name="Gender">Male
        <input type="radio" name="Gender">Female
        <?php echo isset($_POST['Gender'])?$_POST['Gender']:'';?>
        <?php echo $errGender;?>

    </p>
    <p>
        Avatar
        <input type="file" name="image">
    </p>
    <p>
        Origins
        <input type="text" name="Origins" value="<?php echo isset($_POST['Origins'])?$_POST['Origins']:'';?>">
        <?php echo $errOrigins;?>

    </p>
    <p>
        <input type="submit" name="User register">
    </p>
</form>
</body>
</html>


