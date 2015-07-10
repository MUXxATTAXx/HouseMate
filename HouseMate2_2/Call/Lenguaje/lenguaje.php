<?php
if(!isset($_SESSION)){
    session_start();
}
if(isset($_GET['lang']))
{
$lang = $_GET['lang'];
 
// register the session and set the cookie
$_SESSION['lang'] = $lang;
 
setcookie('lang', $lang, time() + (3600 * 24 * 30));
}
else if(isset($_SESSION['lang']))
{
$lang = $_SESSION['lang'];
}
else if(isset($_COOKIE['lang']))
{
$lang = $_COOKIE['lang'];
}
else
{
$lang = 'es';
}
 
switch ($lang) {
  case 'en':
  $lang_file = 'Idiomas/langen.php';
  break;
 
  case 'es':
  $lang_file = 'Idiomas/langes.php';
  break;
 
  default:
  $lang_file = 'Idiomas/langen.php';
 
}

require $lang_file;
?>