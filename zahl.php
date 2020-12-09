<html>
<head>
</head>
<body>
<form action="web.php" method="get">
<input type="number" name="zahl">
<input type = "submit" name= "submit">
</form>
<?php
$zahl= $_GET["zahl"];
while ($zahl > 0) {
    $sum=$sum + $zahl % 10;
    $zahl=$zahl / 10;
}
echo $sum;
?>
</body>
</html>
