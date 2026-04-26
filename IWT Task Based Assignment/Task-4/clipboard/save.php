<?php
include 'db.php';

$text = $_POST['text'];
$code = rand(1000, 9999);

mysqli_query($conn, "INSERT INTO data (code, text) VALUES ('$code', '$text')");
?>

<!DOCTYPE html>
<html>
<head>
<style>
    body { font-family: Arial; text-align:center; background:#dbeafe; }
    .box { background:white; padding:20px; margin:50px auto; width:300px; border:2px solid black; }
</style>
</head>
<body>

<div class="box">
    <h3>Your Code: <?php echo $code; ?></h3>
    <a href="index.php">Go Back</a>
</div>

</body>
</html>