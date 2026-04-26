<?php
include 'db.php';

$code = $_POST['code'];
$result = mysqli_query($conn, "SELECT * FROM data WHERE code='$code'");
$row = mysqli_fetch_assoc($result);
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
<?php
if ($row) {
    echo "<h3>Text:</h3>";
    echo "<p>".$row['text']."</p>";
} else {
    echo "<p>Invalid Code</p>";
}
?>
<br>
<a href="index.php">Go Back</a>
</div>

</body>
</html>