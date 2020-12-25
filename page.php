<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require __DIR__ . '/vendor/autoload.php';

$name = $_REQUEST["name"];
$number = $_REQUEST["number"];
$fileDir = "files/notes-$name-$number.md";

$file = fopen($fileDir, "r") or die();

$buffer = fread($file,filesize($fileDir));

fclose($file);

$Parsedown = new Parsedown();

echo $Parsedown->text($buffer);
