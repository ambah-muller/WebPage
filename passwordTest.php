<!DOCTYPE html>
<html>
<head>
<title></title>
</head>

<body>
<?php
/*
echo "test123";
echo "<br>";
echo password_hash("test123", PASSWORD_DEFAULT); */

$input = "test123";
$hashedPasswordInDb = password_hash("test123", PASSWORD_DEFAULT);

//de hash / verify
echo password_verify($input, $hashedPasswordInDb);
?>
</body>
</html>