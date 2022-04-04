<?php
$conn = mysqli_connect('localhost', 'root', '', 'mysql') or die ('Lỗi kết nối'); mysqli_set_charset($conn, "utf8");
if(isset($_GET['comment'])){
    $comment = $_GET['comment'];
    echo $comment;
}
?>
<!DOCTYPE html>
<html lang = “ja”>
<head>
    <meta charset = “UFT-8”>
    <title>フォームからデータを受け取る</title>
</head>
<body>
<h1>フォームデータの送信</h1>
<form action = “index.php” method = “GET”>
    <input type = “text” name =“comment/“><br/>

    <p>
        <input type="submit" name="User register">
    </p>
</form>
</body>
</html>
