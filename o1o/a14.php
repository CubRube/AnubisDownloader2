<?php
include 'crypt.php';
include 'config.php';
$responce = encrypt("$base64fileapk",cryptKey);
echo "<tag>$responce</tag>";?>