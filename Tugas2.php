<?php
if (isset($_POST['submit'])) {
$a;
$b;
$c;
$maxsimal;

$a = $_POST['nilai1'];
$b = $_POST['nilai2'];
$c = $_POST['nilai3'];
if ($a > $b) {
    if ($a > $c) {
        $maxsimal = $a;
    }else{
        $maxsimal = $c;
    }
    
}else{
    if ($c > $b) {
        $maxsimal = $c;
    }else{
        $maxsimal = $b;
    }
}
echo "nilai yang lebih besar adalah = $maxsimal";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>level 2</title>
</head>
<body>
    <form action="" method="post">
     nilai 1:<input type="text" name="nilai1" >
     nilai 2:<input type="text" name="nilai2" >
     nilai 3:<input type="text" name="nilai3" >
    <button type="submit" name="submit">submit</button>
    </form>
    <a href="index3.php">selanjutnya</a>
</body>
</html>