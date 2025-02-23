<html>
<head>
<title> E Commerce basics: Session tracking using cookies </title>
</head>
<body bgcolor=#DDDDDD>
<p>
<!-- The lines above are the standard html header -->

<?php

if (isset($_COOKIE["ECOM"])) { 
 echo "Cookie is set. It's value is: "; 
 echo $_COOKIE["ECOM"];
}

// Get the cookie name from the form
$cookie_name = $_POST['cookie_name'];

// Unset the cookie by setting its expiry time to the past
setcookie($cookie_name, "", time() - 3600);

echo "The cookie $cookie_name has been deleted from your computer.";

?>

<!-- The lines below are a standard html footer -->
<p>
<hr>
<p>
</body>
</html>
