<?php

require_once './MVC/core/Init.php';

class Playlist extends Init
{

    function createPlaylist($userID, $name)
    {
        $sql = "INSERT INTO playlist (userID, name) VALUES ('" . $userID . "','" . $name . "')";
        $result = $this->db->query($sql);

        if ($result) {
            return '';
        } else {
            return null;
        }
    }

    function deletePlaylist()
    {
    }
}
