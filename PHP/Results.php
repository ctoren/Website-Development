<!DOCTYPE html>

<html>
<head>
<title><form method="get" name="contact1" onsubmit="return formActions()" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
</title>
</head>



Welcome <?php echo $_GET["firstname"]; ?><br>
Your last name is: <?php echo $_GET["lastname"]; ?><br>
Your email address is: <?php echo $_GET["email"]; ?><br>
Your phone number is: <?php echo $_GET["phonenumber"]; ?><br>

<?php
$myfile = fopen("textfile.txt", "w") or die ("Unable to open file!");
$txt = $_GET["firstname"];
fwrite($myfile, $txt);
$txt = " ";
fwrite($myfile, $txt);
$txt = $_GET["lastname"];
fwrite($myfile, $txt);
$txt = " ";
fwrite($myfile, $txt);
$txt = $_GET["email"];
fwrite($myfile, $txt);
$txt = " ";
fwrite($myfile, $txt);
$txt = $_GET["phonenumber"];
fwrite($myfile, $txt);
fclose($myfile);
?>




</body>
</html>
