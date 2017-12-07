<?php
header("Access-Control-Allow-Origin: *");

require_once('Ticker.php');
$limit = filter_var($_REQUEST['limit'] ?? '', FILTER_SANITIZE_NUMBER_INT);
$ticker = new Ticker($limit);
header('Content-type: application/json');
echo json_encode($ticker->fetch());
