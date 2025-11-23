<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: text/plain');

if (!isset($_GET['number'])) {
    echo "No number provided";
    exit;
}

$number = $_GET['number'];
$api = "https://shadowscriptz.xyz/public_apis/simdetailsapi.php?number=" . $number;

$result = @file_get_contents($api);

if ($result === FALSE) {
    echo "Failed to fetch API";
} else {
    echo $result;
}
?>
