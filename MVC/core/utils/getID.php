<?php

function getID()
{
    if (isset($_GET['key'])) {
        return  $_GET['key'];
    } else {
        return null;
    };
}
