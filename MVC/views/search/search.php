<?php require_once  './MVC/views/shared/header.php' ?>
<div id="main" class="container-fluid">
    <?php require_once  './MVC/views/shared/partials/side_bar.php' ?>
    <!-- Main content -->
    <div class="body">
        <!-- Main content -->
        <?php require_once './MVC/views/search/partials/search_bar.php' ?>
        <div class="content">
            <h3 class='pt-3'> Kết quả tìm kiếm </h3>
            <div class="my-4 research">
                Kết quả tìm kiếm trả về đây
            </div>
            <h3 class="my-3"> Thể loại </h3>
            <div class='grid-container list'>
                <?php foreach ($category as $row) : ?>
                <div class="profile">
                    <a class="card h-100 p-3 rounded" href=<?= 'category/' . $row['name'] ?>>
                        <div class="card-title">
                            <strong class="text-white" style="text-decoration: none;">
                                <?= $row['name'] ?>
                            </strong>
                        </div>
                        <img class="card-img-top rounded" src=<?= $row['img'] ?> alt="Card image">
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
            <!-- Mọi người tạo trang trong phần này nha -->
        </div>
    </div>
</div>
<?php require_once './MVC/views/shared/footer.php' ?>