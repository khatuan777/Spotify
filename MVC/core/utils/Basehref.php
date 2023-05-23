<?php
function getBaseURL()
{
    $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'OFF') || $_SERVER['SERVER_PORT'] == 443) ? 'https://' : 'http://';
    $URL = $protocol . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']);
    return $URL;
}