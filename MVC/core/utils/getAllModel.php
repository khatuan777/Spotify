<?php
function getAllModel()
{
    echo
    '$song = $this->model("song");
    $album = $this->model("album");
    $artist = $this->model("artist");
    $user = $this->model("user");
    $playlist = $this->model("playlist");
';
}
