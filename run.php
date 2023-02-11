<?php
date_default_timezone_set('Europe/Paris');

$output = shell_exec('git log -1');
$gFile = dirname(__FILE__) . '/fonts.json';
$fonts = array();
$php_fonts = array();
$arrContextOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
    ),
);
$result = file_get_contents("https://fonts.google.com/metadata/fonts", false, stream_context_create($arrContextOptions));
$cd = date('Y-m-d h:i:s:a');

echo "Saving JSON File\n\n";
file_put_contents($gFile, $result);
