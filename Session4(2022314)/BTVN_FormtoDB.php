<?php
$errname = '';
$erremail = '';
$errphone = '';
$errbirthday = '';
$erravatar = '';
$errclass_id = '';

if (isset($_POST['name'])) {
    if ($_POST['name'] == '') {
        $errname = 'Please input name';
    }
    if ($_POST['email'] == '') {
        $erremail = 'Please input email';
    }

    if ($_POST['phone'] == '') {
        $errphone = ' Please input phone';
    }

    if ($_POST['birthday'] == '') {
        $errbirthday = 'Please input birthday';
    }
    if ($_POST['avatar'] == '') {
        $erravatar = 'Please input avatar';
    }
    if ($_POST['class_id'] == '') {
        $errclass_id = 'Please input class_id';
    }
    //var_dump($_FILES['image']['tmp_name']); //để debug giống console.log() bên javascript
    move_uploaded_file($_FILES['image']['tmp_name'], 'img/'.$_FILES['image']['name']);

} else {
    echo "Chưa submit";
}

// Thông tin kết nối MySQL mặc định ở localhost
$server = 'localhost';
$username = 'root';
$password = ''; // Mặc định password khi cài đặt xampp là để trống
$databaseName = 'myschool';

$connect = new mysqli($server, $username, $password, $databaseName);

// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
} else {
    echo "Connect success!";
}
if (isset($_POST['name'])) {
    echo "Đã submit";
    $name  = $_POST['name'];
    $email  = $_POST['email'];
    $phone  = $_POST['phone'];
    $birthday  = $_POST['birthday'];
    $avatar  = $_POST['avatar'];
    $class_id  = $_POST['class_id'];

    $sqlQuery = "INSERT INTO student (name, email, phone, birthday, avatar, class_id) VALUES ('$name','$email', '$phone', '$birthday', '$avatar','$class_id' )";
    echo "<br>";
    echo $sqlQuery;
    // Thực thi câu lệnh SQL
    $connect->query($sqlQuery);
}
?>
<h1>Student register</h1>
<form action="#" method="POST">
    <p>
        Name
        <input type="text" name="name" value="<?php echo isset($_POST['name'])?$_POST['name']:'';?>">
        <?php echo $errname;?>
    </p>
    <p>
        Email
        <input type="text" name="email" value="<?php echo isset($_POST['email'])?$_POST['email']:'';?>">
        <?php echo $erremail;?>
    </p>
    <p>
        Phone
        <input type="text" name="phone" value="<?php echo isset($_POST['phone'])?$_POST['phone']:'';?>">
        <?php echo $errphone;?>
        <!-- select option -->
    </p>
    <p>
        Birthday
        <input type="date" name="birthday" <?php echo isset($_POST['birthday'])?$_POST['birthday']:'';?>>
        <?php echo $errbirthday;?>
    </p>
    <p>
        Avatar
        <input type="file" name="avatar">
    </p>
    <p>
        Class id
        <input type="text" name="class_id"<?php echo isset($_POST['class_id'])?$_POST['class_id']:'';?>>
        <?php echo $errclass_id;?>
        <!-- select option -->
    </p>
    <p>
        <input type="submit" name="register" value="Register">
    </p>
</form>