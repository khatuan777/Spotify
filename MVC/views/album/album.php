<?php require_once  './MVC/views/shared/header.php' ?>

<div id="main" class="container-fluid h-100">
    <?php require_once  './MVC/views/shared/partials/side_bar.php' ?>
    <!-- Main content -->
    <div class="body">
        <!-- Main content -->
        <?php require_once './MVC/views/shared/partials/top_bar.php'; ?>
        <div class="content grid-container h-100 song">
            <div class='mt-5'>
                <div class='title navbar align-item-center row'>
                    <div class='song_img col-4' style="height: 232px; width:232px">
                        <img src="<?= $currentAlbum['img'] ?>" alt="">
                    </div>
                    <div class='col-6 grid-container' style='grid-gap: 0px'>
                        <div>Album</div>
                        <h1><?= $currentAlbum['Name'] ?></h1>
                        <div><?= $artist['artistName'] ?></div>
                    </div>
                </div>
                <div class=''>
                    <div class='d-flex align-items-center py-3'>
                        <button class="play_btn " onclick="play()">
                            <div>
                                <svg role="img" height="28" width="28" aria-hidden="true" viewBox="0 0 24 24"
                                    data-encore-id="icon" class="Svg-sc-ytk21e-0 ldgdZj  margin: auto;">
                                    <path
                                        d="m7.05 3.606 13.49 7.788a.7.7 0 0 1 0 1.212L7.05 20.394A.7.7 0 0 1 6 19.788V4.212a.7.7 0 0 1 1.05-.606z">
                                    </path>
                                </svg>
                            </div>
                        </button>

                        <button class='btn mx-3'>
                            <svg role="img" height="32" width="32" aria-hidden="true" viewBox="0 0 24 24"
                                data-encore-id="icon" class="Svg-sc-ytk21e-0 ldgdZj" fill='white'>
                                <path
                                    d="M5.21 1.57a6.757 6.757 0 0 1 6.708 1.545.124.124 0 0 0 .165 0 6.741 6.741 0 0 1 5.715-1.78l.004.001a6.802 6.802 0 0 1 5.571 5.376v.003a6.689 6.689 0 0 1-1.49 5.655l-7.954 9.48a2.518 2.518 0 0 1-3.857 0L2.12 12.37A6.683 6.683 0 0 1 .627 6.714 6.757 6.757 0 0 1 5.21 1.57zm3.12 1.803a4.757 4.757 0 0 0-5.74 3.725l-.001.002a4.684 4.684 0 0 0 1.049 3.969l.009.01 7.958 9.485a.518.518 0 0 0 .79 0l7.968-9.495a4.688 4.688 0 0 0 1.049-3.965 4.803 4.803 0 0 0-3.931-3.794 4.74 4.74 0 0 0-4.023 1.256l-.008.008a2.123 2.123 0 0 1-2.9 0l-.007-.007a4.757 4.757 0 0 0-2.214-1.194z">
                                </path>
                            </svg>
                        </button>

                        <div class='btn '>
                            <svg role="img" height="32" width="32" aria-hidden="true" viewBox="0 0 24 24"
                                data-encore-id="icon" class="Svg-sc-ytk21e-0 ldgdZj" fill='#ffff'>
                                <path
                                    d="M4.5 13.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm15 0a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm-7.5 0a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <h3 class='mt-3'>Danh sách bài hát</h3>
                    <div class='recommend mt-3'>
                        <?php
                        foreach ($songList as $row) : ?>
                        <a class='d-flex row' type="button" href='song?key= <?= $row['songID'] ?>'>
                            <div class='d-flex align-items-center col-8'>
                                <div style="height: 40px; width: 40px; margin-right: 1rem">
                                    <img src="<?= $row['img'] ?>" alt="">
                                </div>
                                <div>
                                    <?= $row['songName'] ?>
                                </div>
                            </div>
                            <div class='col-2'>
                                <?= $row['duration'] ?>
                            </div>
                        </a>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
            <div class="nav-tabs my-3" style="border-color: blueviolet;"></div>
            <div class=''>
                <div>
                    <p>Những album khác của</p>
                    <strong>
                        <h2><?= $artist['artistName'] ?></h2>
                    </strong>
                    <div class="grid-container list mt-3">
                        <?php if (is_object($album))
                            foreach ($album->find('*', ['artistID' => $artist['artistID']]) as $row) : ?>
                        <div class="profile">
                            <a class="nav-link card h-100 p-3" href=<?= 'album?key=' . $row['albumID'] ?>>
                                <div style="height: 181px;">
                                    <img class="card-img-top mb-2 rounded" src=<?= $row['img'] ?> alt="Card image cap">
                                </div>
                                <div class="my-2">
                                    <strong><?= $row['Name'] ?>
                                    </strong>
                                </div>
                                <p class="card-title">Album.</p>
                            </a>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php require_once './MVC/views/shared/footer.php' ?>