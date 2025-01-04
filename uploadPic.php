<?
    include('./config.php');
    if(isset($_POST['submit'])){
        $file_name = $_FILES['image']['name'];
        $tempname = $_FILES['image']['tmp-name'];

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" enctype="multipart/form-data">
        <input type = "file" name = "image"/>
        <br/><br/>
        <button type="submit" name="submit">Submit</button>
    </form>

</body>
</html>