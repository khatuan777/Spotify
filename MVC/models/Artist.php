<?php

require_once './MVC/core/Init.php';

class Artist extends Init
{
    function getartistName($artistID)
    {
        $sql = 'SELECT artistName FROM Artist WHERE artistID = ' . $artistID;
        $name = $this->db->fetch_assoc($sql, 1);
        return $name['artistName'];
    }
}
