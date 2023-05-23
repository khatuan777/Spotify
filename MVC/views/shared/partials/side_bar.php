<!-- Side-bar -->
<nav class="navbar-dark bg side_bar">
    <div class="container-fluid d-block border-bottom-2">
        <div class="container mb-3">
            <a class="navbar-brand" href="home">
                <img style="width: 150px; height: 60px;" src="./public/img/Spotify-Logo.wine.svg " alt="">
            </a>
        </div>
        <!-- Các giao diện chính -->
        <ul class="nav navbar-nav mt-4 px-3">
            <li class="nav-item">
                <a id="home" class="nav-link thao_tac " name='main' href="home " aria-current="page"
                    onclick='chuyentrang()'>
                    <svg role="img" height="24" width="24" aria-hidden="true"
                        class="Svg-sc-ytk21e-0 gQUQL home-active-icon" viewBox="0 0 24 24" data-encore-id="icon">
                        <path d=" M13.5 1.515a3 3 0 0 0-3 0L3 5.845a2 2 0 0 0-1 1.732V21a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1v-6h4v6a1 1 0 0 0
                1 1h6a1 1 0 0 0 1-1V7.577a2 2 0 0 0-1-1.732l-7.5-4.33z">
                        </path>
                    </svg>
                    <span>Trang chủ</span>
                </a>
            </li>
            <li class="nav-item">
                <a id="search" class="nav-link thao_tac " name='main' href='search'>
                    <svg role=" img" height="24" width="24" aria-hidden="true"
                        class="Svg-sc-ytk21e-0 gQUQL search-active-icon" viewBox="0 0 24 24" data-encore-id="icon">
                        <path
                            d="M10.533 1.279c-5.18 0-9.407 4.14-9.407 9.279s4.226 9.279 9.407 9.279c2.234 0 4.29-.77 5.907-2.058l4.353 4.353a1 1 0 1 0 1.414-1.414l-4.344-4.344a9.157 9.157 0 0 0 2.077-5.816c0-5.14-4.226-9.28-9.407-9.28zm-7.407 9.279c0-4.006 3.302-7.28 7.407-7.28s7.407 3.274 7.407 7.28-3.302 7.279-7.407 7.279-7.407-3.273-7.407-7.28z">
                        </path>
                    </svg>
                    <span>Tìm kiếm</span>
                </a>
            </li>
            <li class="nav-item">
                <a id="library" class="nav-link thao_tac " name='main' href='library'>
                    <svg role="img" height="24" width="24" aria-hidden="true"
                        class="Svg-sc-ytk21e-0 gQUQL collection-icon" viewBox="0 0 24 24" data-encore-id="icon">
                        <path
                            d="M14.5 2.134a1 1 0 0 1 1 0l6 3.464a1 1 0 0 1 .5.866V21a1 1 0 0 1-1 1h-6a1 1 0 0 1-1-1V3a1 1 0 0 1 .5-.866zM16 4.732V20h4V7.041l-4-2.309zM3 22a1 1 0 0 1-1-1V3a1 1 0 0 1 2 0v18a1 1 0 0 1-1 1zm6 0a1 1 0 0 1-1-1V3a1 1 0 0 1 2 0v18a1 1 0 0 1-1 1z">
                        </path>
                    </svg>
                    <span>Thư viện</span>
                </a>
            </li>
        </ul>

        <!-- Tạo playlist và bài hát ưa thích  -->
        <ul class="navbar-nav mt-4 px-3 ">
            <li class="nav-item">
                <a id="playlist" class="nav-link thao_tac" href="playlist/createPlaylist" aria-current="page"
                    onclick="">
                    <div class="icon">
                        <svg role="img" height="16" width="16" style="margin: auto; position: relative; margin: auto; "
                            aria-hidden="true" viewBox="0 0 16 16" data-encore-id="icon" class="Svg-sc-ytk21e-0 gQUQL ">
                            <path
                                d="M15.25 8a.75.75 0 0 1-.75.75H8.75v5.75a.75.75 0 0 1-1.5 0V8.75H1.5a.75.75 0 0 1 0-1.5h5.75V1.5a.75.75 0 0 1 1.5 0v5.75h5.75a.75.75 0 0 1 .75.75z">
                            </path>
                        </svg>
                    </div>
                    <span>Tạo playlist</span>
                </a>
            </li>

            <li class="nav-item">
                <a id="home" class="nav-link thao_tac mb-3" href="#" aria-current="page">
                    <div class="icon icon-heart ">
                        <svg role="img" height="12" width="12" aria-hidden="true" viewBox="0 0 16 16"
                            data-encore-id="icon" class="Svg-sc-ytk21e-0 gQUQL">
                            <path
                                d="M15.724 4.22A4.313 4.313 0 0 0 12.192.814a4.269 4.269 0 0 0-3.622 1.13.837.837 0 0 1-1.14 0 4.272 4.272 0 0 0-6.21 5.855l5.916 7.05a1.128 1.128 0 0 0 1.727 0l5.916-7.05a4.228 4.228 0 0 0 .945-3.577z">
                            </path>
                        </svg>
                    </div>
                    <span>Bài hát đã thích</span>
                </a>
            </li>
            <div class='nav-tabs'></div>
        </ul>
        <!-- Chứa playlist -->
        <?php if (getSession() != null && is_array($playlist)) {
            echo '<ul class="nav navbar-nav justify-content-center mt-4 px-3">';
            foreach ($playlist as $row) :
                echo '<li class="nav-item">
                       <a class="nav-link" href="playlist/' . $row['playlistID'] . '" aria-current="page"> #' . $row["name"] . '</a>
                      </li>';
            endforeach;
            echo '</ul>';
        }
        ?>
    </div>
</nav>