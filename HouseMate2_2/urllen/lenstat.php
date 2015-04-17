<?php $query = $_SERVER['PHP_SELF'];
$path = pathinfo( $query );
$url = $path['basename'];
echo $url;  ?>