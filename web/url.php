<?php
session_start();

$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https://" : "http://";
$domain = $_SERVER['SERVER_NAME'];
$directory = dirname($_SERVER['REQUEST_URI']);

$BASE_URL = $protocol . $domain . $directory . '/';
?>
