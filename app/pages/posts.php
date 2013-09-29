<?php
require_once('../config.php');
$themeUrl = $_SERVER['DOCUMENT_ROOT'] . '\\theme\\' . config::settings('blog.theme');
require_once($themeUrl . '\posts.php');
?>