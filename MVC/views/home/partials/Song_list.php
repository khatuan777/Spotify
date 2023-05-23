<div class="mb-3">
    <h3 class="my-3"> Bài hát </h3>
    <div class="list grid-container">
        <?php foreach ($song as $row) : ?>
            <div class="profile">
                <a class="nav-link card h-100 p-3" href=<?= 'song?key=' . $row['songID'] ?>>
                    <div style="height: 181px;">
                        <img class=" card-img-top mb-2 rounded" src="<?= $row['img'] ?>" alt="Card image">
                    </div>
                    <div class="mt-2">
                        <strong style="text-decoration: none;"><?= $row['songName'] ?>
                        </strong>
                        <p class="card-text">
                            <?= $artist->findOne('artistName', ['artistID' => $row['artistID']])['artistName'] ?>
                        </p>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</div>