<?php require_once  './MVC/views/shared/header.php' ?>

<div id="main" class="container-fluid h-100">
    <?php require_once  './MVC/views/shared/partials/side_bar.php' ?>
    <!-- Main content -->
    <div class="body">
        <!-- Main content -->
        <?php require_once './MVC/views/shared/partials/top_bar.php'; ?>
        <div class="content grid-container h-100">
            <?php require_once './MVC/views/home/partials/Song_list.php';
            require_once './MVC/views/home/partials/Artist_list.php';
            require_once './MVC/views/home/partials/Album_list.php';
            ?>

            <!-- Mọi người tạo trang trong phần này nha -->
        </div>
    </div>
</div>

<?php require_once './MVC/views/shared/footer.php' ?>