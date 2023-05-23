<!-- Top-bar -->
<div class="sticky-lg-top">
    <nav class="navbar navbar-expand-sm bg top_bar">
        <div class="container-fluid px-4 ">
            <div class="chuyen_trang">
                <button id='prev' class="btn btn-outline-dark">
                    <svg role="img" height="16" width="16" aria-hidden="true"
                        class="Svg-sc-ytk21e-0 lmlFMn IYDlXmBmmUKHveMzIPCF" viewBox="0 0 16 16" data-encore-id="icon"
                        fill="white">
                        <path
                            d="M11.03.47a.75.75 0 0 1 0 1.06L4.56 8l6.47 6.47a.75.75 0 1 1-1.06 1.06L2.44 8 9.97.47a.75.75 0 0 1 1.06 0z">
                        </path>
                    </svg>
                </button>

                <button id="next" class="btn btn-outline-dark ">
                    <svg role="img" height="16" width="16" aria-hidden="true"
                        class="Svg-sc-ytk21e-0 lmlFMn IYDlXmBmmUKHveMzIPCF" viewBox="0 0 16 16" data-encore-id="icon"
                        fill="white" style="margin: auto;">
                        <path
                            d="M4.97.47a.75.75 0 0 0 0 1.06L11.44 8l-6.47 6.47a.75.75 0 1 0 1.06 1.06L13.56 8 6.03.47a.75.75 0 0 0-1.06 0z">
                        </path>
                    </svg>
                </button>
            </div>
            <?php
            if (getSession() != null) {
                echo ' <div class="user_bar d-flex">
                <button type="button" class="btn bg-white mx-3 px-3 "><strong>Nâng cấp</strong> </button>
                <div class="dropdown">
                    <div class="dropdown-toggle bg-dark rounded-pill d-flex user_bar p-2" type="button" id="triggerId"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mx-4 text-white">' . $user['username'] . '</span>
                        <div style="width: 24px"> 
                        <img src= "./public/img/icon.png" class="img-fluid rounded-circle bg-white" alt="." >
                        </div>
                    </div>
                    <div class="dropdown-menu bg-dark" aria-labelledby="triggerId">
                        <a class="dropdown-item" href="user?key="' . $user['userID'] . '">Hồ sơ</a>
                        <a class="dropdown-item" href="#">Tài khoản</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="auth/logout">Đăng xuất</a>
                    </div>
                </div>
            </div>';
            } else {
                echo '
                <span class="btn-login">
                    <a type="button" class="px-4 btn btn-lg " href="auth/login"> Login </a>
                    <a type="button" class="px-4 btn btn-lg btn-light btn-hover-light" href="auth/signup">SignUp</a>
                </span>
            ';
            }
            ?>


        </div>
    </nav>
</div>