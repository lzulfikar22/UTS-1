<?php
// set the expiration date to one hour ago
setcookie("user", $_COOKIE["user"], time() - (86400 * 30));
setcookie("score", $_COOKIE["score"], time() - (86400 * 30));
setcookie("lasttime", $_COOKIE["lasttime"], time() - (86400 * 30));
// setcookie("photo", $_COOKIE["photo"], time() - (86400 * 30));
header("Location: index.php");
exit;
?>
<html>
<body>
</body>
</html>