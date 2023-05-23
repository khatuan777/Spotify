<div class="mb-3">
    <h3 class="my-3"> Albums </h3>
    <div class="grid-container list">
        <?php foreach ($album as $row) : ?>
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