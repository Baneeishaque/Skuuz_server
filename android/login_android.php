
<?php
error_reporting(0);
require_once 'config.php';
$uname = mysql_escape_string($_POST['uname']);
$pass = mysql_escape_string($_POST['pass']);
$result = mysql_query("SELECT `USERNAME`, `PASSWORD`, `Role` FROM `login` WHERE `USERNAME`='$uname' and `PASSWORD`='$pass'");
$row = mysql_fetch_array($result);
$a = $row['USERNAME'];
if ($a == null) {
    echo'e';
} else {
    echo 's';
}

							