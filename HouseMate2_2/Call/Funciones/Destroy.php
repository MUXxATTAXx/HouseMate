<?php
session_start();
header('Location: ../../Index.php#login-overlay');
session_destroy();

?>