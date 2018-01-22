<?php
define('DB_SERVER', 'shareddb1d.hosting.stackcp.net');
define('DB_USERNAME', 'admin-13');
define('DB_PASSWORD', 'aravi-13');
define('DB_DATABASE', 'credentials-313726f7');

$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE) or die('data base connection failed ');

?>