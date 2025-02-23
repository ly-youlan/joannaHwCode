<?php
// Get the input variables
$name = $_POST['name'];
$pin = $_POST['pin'];

// Create cookie name by concatenating name and pin
$cookie_name = $name . $pin;

// Set cookie to expire in 20 minutes
setcookie($cookie_name, "active", time() + (20 * 60));
?>
<!DOCTYPE html>
<html>
<head>
<title>E Commerce: Cookie Management</title>
</head>
<body bgcolor="#DDDDDD">
<p>I have set a cookie called <?php echo $cookie_name; ?> on your computer. To delete this cookie, click on the following button.</p>

<form method="POST" action="/cgi-bin/cookies_2.php">
    <input type="hidden" name="cookie_name" value="<?php echo $cookie_name; ?>">
    <input type="submit" value="Delete Cookie">
</form>
</body>
</html>
