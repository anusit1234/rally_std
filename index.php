<?php

session_start();
/*
 * include file start
 */
require 'library/core.php';
require 'library/cons.php';
require 'library/database.php';
require 'library/security.php';
require 'library/thaidate.php';

$baseUrl = base_url();
$basePath = base_path();

$onpage = isset($_GET['onpage']) ? $_GET['onpage'] : "front";
$url = isset($_GET['url']) ? $_GET['url'] : "student";
$a = isset($_GET['a']) ? $_GET['a'] : "login";

/*
 * logical programming
 */
if ($onpage == "front" AND $a != "login") {
    $url = isset($_GET['url']) ? $_GET['url'] : "student";
}

if (file_exists("application/" . $onpage . "/" . $url . "/" . $a . ".php")) {
    require ("application/" . $onpage . "/" . $url . "/" . $a . ".php");
} else {
    header('location:' . $baseUrl);
}
