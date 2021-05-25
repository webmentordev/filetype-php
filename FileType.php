<?php 

    if(isset($_POST['check'])){
        $name = $_FILES['myfile']['name'];
        $ext = pathinfo($name, PATHINFO_EXTENSION);
        $allowed = array('pdf', 'png', 'jpg', 'jpeg');
        if(in_array($ext, $allowed)){
            echo $ext. " File Extension is Allowed";
        }else{
            echo $ext. " File Extension is Not Allowed";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <title>File Type</title>
</head>
<style>
    *{
        font-family: 'Roboto', sans-serif;
    }
</style>
<body>
    <form action="FileType.php" method="post" enctype="multipart/form-data">
        <input type="file" name="myfile">
        <button type="submit" name="check">Upload</button>
    </form>
</body>
</html>