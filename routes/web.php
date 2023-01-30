<?php
require '../src/Controller/DashboardController.php';

$parameter = explode("/", substr($path, 1));

$data = [];
$view = '';

switch ($parameter[0]) {
    case '':
        $control = new DashboardController;
        $data   = $control->index();
        $view   = "dashboard";
        break;
    default:
        $view   = "error";
        break;
}
