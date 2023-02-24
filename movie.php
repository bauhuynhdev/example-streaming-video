<?php

$filename = $_GET['filename'];
$quality = $_GET['quality'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
if ($ext === 'm3u8') {
    header('Content-Type: application/vnd.apple.mpegurl');
}

$path = __DIR__ . "/example/$quality/$filename";
echo file_get_contents($path);
