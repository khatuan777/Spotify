<?php require_once  './MVC/views/shared/header.php' ?>
<div class="container-fluid main">
    <div class="d-flex m-auto justify-content-center login ">
        <div class="p-3 bg-white rounded nav-tabs " style="max-width: 500px; ">
            <!-- Ảnh title -->
            <div class="brand nav-tabs mb-5 ">
                <div class="image mb-3 ">
                    <img src="./public/img/Spotify_Logo_CMYK_Black.png " alt="">
                </div>
            </div>
            <!-- Form đăng nhập -->
            <form class="pb-4 nav-tabs" action="auth/authLogin" method="post">
                <div class="mb-3">
                    <label for="exampleInputEmail1 " class="form-label "><strong>Email address or
                            username</strong></label>
                    <input type="email" class="form-control " id="email" name="email" aria-describedby="emailHelp"
                        placeholder='Email' required>
                    <div id="emailHelp " class="form-text ">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1 " class="form-label "><strong>Password</strong></label>
                    <input type="password " class="form-control" name="password" id="exampleInputPassword1 "
                        placeholder="Password" required />
                </div>
                <div class="mb-3">
                    <input type="checkbox" class="form-check-input " id="exampleCheck1 ">
                    <label class="form-check-label " for="exampleCheck1 ">Remember me</label>
                </div>
                <button type="submit" class="btn spotify-btn px-4">Log in</button>
            </form>
            <!-- Những các đăng nhập khác  -->
            <div class="login_ways mt-4 ">
                <p class="text-center ">Or continues with </p>
                <div class="row d-flex justify-content-center ">
                    <div class="login_way col-2 ">
                        <a href="https://wwww.facebook.com " target="_blank ">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAH0AAAB9CAMAAAC4XpwXAAAAYFBMVEUYd/L///8LdPIAbfFWkvRel/QAb/EAcfKjwfkAavE4g/Pw9f6Nsvd9qPbr8f2+0/oAZPHG1/v3+v5qnPWrxvnb5/2Vt/gpfPOwyvnK3PtAhvMsf/Pj7P1zpPaDrPZJjfQ0WakTAAAFUElEQVRogcXbibKiOhAA0JBoAEGQXUHx///yIeMC2CTdTXy3q6Zqqi5ygOyb8DgRVVla1nF/PB77uC7TrIpY9xHUH1yzetdIX2vtv+Lxf9ns4qz6qZ5kt1YoLQUUUivR3tLkN3p0LkTow/L7CfxQFGd8KmD1y00ps/x+AqWKi0s9D8QJRz8fIBQB6gMg9CQWK0ltCC1jRA6w6lEtFJUeQ4na6tv0suPZo9+Um/SqDdn2I8LWXAWY9Lwn5TUo5KnPefrloDfaj9AHQ/Fb12tLzYIN6ddkPS+2pfg0wmLt66/o187FV3+F7q4UPaNXL8aQKsXrpe/UfoQGiz6kn90l+ScUxAP6T/Ah7wH8t/4jHOS/9PJXOMQv9cx9hvuEXub8hX51Wcy/Q11Net6xy7l8dG6Hf1IabiG73KAXrFcf+pInvy36OI77W3Hv9OkUKriV0MW6XnNynB/e42yRnkl1rvsGujqcNTlT/cLIcVr2K3W4twPf3p82uBM9P5ATXZr6jrA+S/qJ3pMTXd9NHSdYF/oI6dWJioc3g72qi9PnkT96S/3uar3PYtTl4Vsn17AqNuOr+qS5e+lRR8QXJZeii+aVVV96TRw0yIN1oLauv9PsqSc0e8g6ywqGoguRzPSY+urW727UVT/Vc5o9KzWsd5fRRA+IFY1s7bhR18FEF8Syrs8bdSE/+oVa1iVmbsioh9lbvxFfXd4RuOXdi5ceUScI9Fodm6T9rj08w3wPFT31M1VXcGHP605p+Q7LPcqnXpDbdbC85S3lLcZPLxj1nOjATNcSu0bJqGfkHN9C43FqpzBMR/1G7c6BWZ7cSPq3USd3K+QO0Ol1xvAFhXcl/mpFr+lDgWrQM/J0IKgX5O64Sged/tCgvqdP5caDbqwQf6kPtxEeOOD5P3TReCKi/8qVLiNR0QdvzvRKZPSS4krXmUj/TvfPovxDPRD136W7X4v4D/Ve9H+oH8URo6tZhFALuwvnFyHWDv0bSm+CeUC9+fPimtLeX5MoXR5MKztrYU/S4d0R6Y4YLUNJYX33Id0ReZ6l5/bWa8jziPLO0+09LV1j6jqWXtn1oa5D1PMsHTFA0mdMG8fSY/t9hzYO0b6zdMTwbGjfEX0bjp7fEfeNMP06jp4guosNqk/L0RFLLMOADNOf5+iIgdXYn7ePZTh6YC9w41imsl7G0TED4wo1huXo9iz/bwxrf0yGjlhleY7fU1sGYbTviAL3nLuwz9vQ+zYxoq5JsHNWehYK7Nep6SWI6nvv8ebrnPRp3/N11LlKN/prrpI6XehC/8zTUuebXOiTOWqP9EM37+59dNrahAN9tjZBmz5xoM/WZWhrUtt1PVuTos1TO3j3+XocaS1ys/5ewn3pmH6YM/1rHZayBr1VV4G31AkT5Rt1aP2dsPdgow7uPcDvu9imw/su8HtONulre07Q+2026f50LY+z12iLvr7XCLvPaoPu72c/4uwx4+uyMe0x866YCpevq8US6nJvYYrIeWzdtrcQVeNy9TBY/uh7T6mdZ+rfOLSf1srzdAAH9xKXlqzH0iF8ZR+1udhzdA3hK3vIU+PsOl0n7SG37J8n636zsjWJc3aAqod74tkBz3RugqZzzk0McVn7+iRdd4a9cMbzMkf4vAxBl6cj87zMENUBKvp4XR34Z4UeUTbfPlZXDVjICbqXfJ8Rw+la2M+oYc7H9VKTdS17F+fjHhEFMpQEfbja2dnAMbIifNe+Zv1xLtK+4ZSmDx+gfJ0JXdelH8p96f5M6BhJOp6H9UFd+788D/sv8iqL73vgD8U9TivqfC75JLLT+A/eW0gf3G7NagAAAABJRU5ErkJggg=="
                                alt=" ">
                        </a>
                    </div>
                    <div class="login_way col-2 ">
                        <a href="https://www.google.com " target="_blank ">
                            <img src="https://www.freepnglogos.com/uploads/google-logo-png/google-logo-png-suite-everything-you-need-know-about-google-newest-0.png "
                                alt=" ">
                        </a>
                    </div>
                    <div class="login_way col-2 ">
                        <a href="https://www.github.com " target="_blank ">
                            <img src="https://www.freepnglogos.com/uploads/512x512-logo-png/512x512-logo-github-icon-35.png "
                                alt=" ">
                        </a>
                    </div>
                </div>
            </div>

            <!-- Hoặc đăng ký tài khoản mới  -->
            <div class="mt-5 ">
                <p class="text-center"><strong>If you don't have an account?</strong></p>
                <a href="auth/signup " class="btn d-block spotify-btn p-3 text-white">
                    SIGN UP FOR SPOTIFY
                </a>
            </div>

        </div>

    </div>

</div>

<?php require_once './MVC/views/shared/footer.php' ?>