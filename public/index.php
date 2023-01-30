<?php

$path = $_SERVER["REQUEST_URI"];
require '../config/db.php';
require '../routes/web.php';

// require_once('../routes/web.php');
// $route = new web($path);

echo $data;