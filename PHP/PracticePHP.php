<?php

session_start();     //This will start the session
?>

<!DOCTYPE html>
<html>
<body>


<?php

$_SESSION["username"] = "ctoren1";
$_SESSION["email"] = "ctoren1@jhu.edu";
$_SESSION["fullname"] = "Corine  Toren";
echo "My session variables have been set.";
?>

</body>
</html>

