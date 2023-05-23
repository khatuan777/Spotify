<div class="mb-3">
    <h3 class="my-3"> Nghệ sĩ </h3>
    <div class="list grid-container">
        <?php foreach ($artist->find() as $row) : ?>
            <div class='profile'>
                <a class="nav-link card h-100 p-3" href=<?= 'artist/' . $row['artistName'] ?>>
                    <div style="max-height: 181px;">
                        <img class="card-img-top mb-2 rounded" src=<?= $row['img'] ?> alt="Card image cap">
                    </div>
                    <div class="my-2">
                        <strong><?= $row['artistName'] ?>
                        </strong>
                    </div>
                    <p class='card-title'> Nghệ sĩ.</p>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</div>