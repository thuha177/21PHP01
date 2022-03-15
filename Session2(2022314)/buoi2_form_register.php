<!DOCTYPE html>
<html>
<head>
    <title>Add news</title>
</head>
<body>
<?php
$errTitle = '';
$errDescription = '';
$errContent = '';
$errPublishDate = '';
$errPublish = '';
$errNewsType = '';
if (isset($_POST['title'])) {
    if ($_POST['title'] == '') {
        $errTitle = 'Please input title';
    }
    if ($_POST['description'] == '') {
        $errDescription = 'Please input description';
    }
    if ($_POST['content'] == '') {
        $errContent = 'Please input content';
    }
    if ($_POST['publish_date'] == '') {
        $errPublishDate = 'Please input Publish date';
    }
    if ($_POST['publish'] == '') {
        $errPublish = 'Please input Publish?';
    }
    if ($_POST['news_type'] == "") {
        $errNewsType = 'Please input News type';
    }
} else {
    echo "Chưa submit";
}
?>
<h1>Add news</h1>
<form action="#" method="POST">
    <p>
        Title
        <input type="text" name="title" value="<?php echo isset($_POST['title'])?$_POST['title']:'';?>">
        <?php echo $errTitle;?>
    </p>
    <p>
        Description
        <input type="text" name="description" value="<?php echo isset($_POST['description'])?$_POST['description']:'';?>">
        <?php echo $errDescription;?>
    </p>
    <p>
        Content
        <textarea name="content"><?php echo  isset($_POST['content'])?$_POST['content']:'';?></textarea>
        <?php echo $errContent;?>
    </p>
    <p>
        Image
        <input type="file" name="image">
    </p>
    <p>
        PublishDate
        <input type="date" name="publish_date" <?php echo isset($_POST['PublishDate'])?$_POST['PublishDate']:'';?>>
        <?php echo $errPublishDate;?>
    </p>
    <p>
        Publish
        <input type="radio" name="publish"> Publish
        <input type="radio" name="publish"> No publish
    </p>
    <p>
        News type
        <select name="news_type"> value="<?php echo isset($_POST['NewsType'])?$_POST['NewsType']:'';?>">
            <?php echo $errNewsType;?>
            <option value="">Choose type</option>
            <option value="1">Tin thể thao</option>
            <option value="2">Tin xã hội</option>
            <option value="3">Tin thế giới</option>
        </select>
    </p>
    <p>
        <input type="submit" name="Add news">
    </p>
</form>
</body>
</html>
