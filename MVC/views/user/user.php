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
                        <img src="<?= $user['img'] ?>" alt="">
                    </div>
                    <div class='col-6 grid-container' style='grid-gap: 0px'>
                        <div>Hồ sơ</div>

                        <h1><?= $user['username'] ?></h1>
                        <div>
                            <span>Người dùng đã xác thực</span>
                        </div>
                    </div>
                </div>
            </div>
            <h1 class='mt-3'>Thông tin cá nhân</h1>
            <div class="">
                <form method="post" action='user/updateUser'>
                    <div class="mb-3">
                        <label for="inputName" class="col-4 col-form-label">Name</label>
                        <div class="col-6">
                            <input type="text" class="form-control" name="username" id="inputName" placeholder="<?= $user['username'] ?>">
                        </div>
                    </div>
                    <div class="mb-3 ">
                        <label for="inputName" class="col-4 col-form-label">Email</label>
                        <div class="col-6">
                            <input type="text" class="form-control" name="email" id="inputName" placeholder="<?= $user['email'] ?>">
                        </div>
                    </div>
                    <div class="mb-3 ">
                        <label for="inputName" class="col-4 col-form-label">Password</label>
                        <div class="col-6">
                            <input type="text" class="form-control" name="password" id="inputName" placeholder="<?= $user['password'] ?>">
                        </div>
                    </div>
                    <div class="mb-3 ">
                        <label for="inputName" class="col-4 col-form-label">Gender</label>
                        <div class="col-6">
                            <input type="text" class="form-control" name="gender" id="inputName" placeholder="<?= $user['gender'] ?>">
                        </div>
                    </div>
                    <div class="mb-3 ">
                        <label for="inputName" class="col-4 col-form-label">Date of Birth</label>
                        <div class="col-6">
                            <input type="text" class="form-control" name="birth" id="inputName" placeholder="<?= $user['birth'] ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class=" col-sm-8">
                            <button type="submit" class="btn bg-success btn-hover-light">Cập
                                nhật</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php require_once './MVC/views/shared/footer.php' ?>