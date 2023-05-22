<?php

define('APP_NAME', "cr_demo");
if (
    isset($_SERVER['HTTPS']) &&
    ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) ||
    isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
    $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https'
) {
    $protocol = 'https://';
} else {
    $protocol = 'http://';
}

return array(
    'app_path' => $_SERVER['DOCUMENT_ROOT'] . '/cr_demo',
    'protocol' => $protocol
);
