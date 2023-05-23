<?php

$arr = [];

?>

<div class="player_bar fixed-bottom bg px-2">
    <div class='col-2 d-flex'>
        <div style='height:56px;width:56px'>
            <img id="img" src='<?php echo $_GET['img'] ?>' alt="">
        </div>
        <div>
            <span id='songName'></span>
            <?php echo $_GET['songName'] ?>
            </span>
            <br>
            <span id='music'> <?php echo $_GET['artist'] ?></span>
        </div>
    </div>
    <div class='main-play col-7 d-flex align-items-center justify-content-center '>
        <i class="fas fa-random"></i>
        <i class="fas fa-step-backward"></i>
        <button aria-label="stop" class="play_btn" id='play_btn' type="button " title="">
            <div class="node">
                <svg role="img" height="28" width="28" aria-hidden="true" viewBox="0 0 24 24" data-encore-id="icon"
                    class="Svg-sc-ytk21e-0 ldgdZj  margin: auto;">
                    <path
                        d="m7.05 3.606 13.49 7.788a.7.7 0 0 1 0 1.212L7.05 20.394A.7.7 0 0 1 6 19.788V4.212a.7.7 0 0 1 1.05-.606z">
                    </path>
                </svg>
            </div>
        </button>
        <audio id='musicPlay' preload='true' src='<?php echo $_GET['link'] ?>'>
        </audio>
        <i class="fas fa-step-forward"></i>
        <i class="fas fa-undo-alt"></i>
    </div>
    <div class="col-2 d-flex align-items-center justify-content-center">
        <i class="fas fa-list-ul"></i>
        <i class="fas fa-desktop"></i>
        <i class="fas fa-volume-down"></i>
    </div>
</div>