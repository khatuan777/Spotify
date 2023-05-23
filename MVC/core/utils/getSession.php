<?php

function getSession()
{
    if (isset($_SESSION['user'])) {
        return  $_SESSION['user'];
    } else {
        return null;
    };
}
