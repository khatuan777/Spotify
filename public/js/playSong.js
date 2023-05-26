if ($('#img').attr('src') != null) {
    localStorage.setItem('img', $('#img').attr('src'));
    localStorage.setItem('songName', $('#songName').text());
    localStorage.setItem('artist', $('#artist').text());
    localStorage.setItem('link', $('#link').text());
}
$(document).ready(function() {
    $.ajax({
        type: 'get',
        url: "./MVC/views/shared/partials/player_bar.php",
        data: {
            img: localStorage.getItem('img'),
            songName: localStorage.getItem('songName'),
            artist: localStorage.getItem('artist'),
            link: localStorage.getItem('link')
                // $('#link').text()
        },
        success: function(response, status, request) {
            $('#main').append(response); // dom element
        },
        complete: function() {
            audio = $('#musicPlay');
            music = new Audio(audio.attr('src'));
            $('#play_btn').click(function(e) {
                e.preventDefault();
                if ($(this).attr('aria-label') == 'stop') {
                    $(this).html(`<svg role="img" height="16" width="16" aria-hidden="true" viewBox="0 0 16 16" data-encore-id="icon" class="Svg-sc-ytk21e-0 ldgdZj">
                    <path d="M2.7 1a.7.7 0 0 0-.7.7v12.6a.7.7 0 0 0 .7.7h2.6a.7.7 0 0 0 .7-.7V1.7a.7.7 0 0 0-.7-.7H2.7zm8 0a.7.7 0 0 0-.7.7v12.6a.7.7 0 0 0 .7.7h2.6a.7.7 0 0 0 .7-.7V1.7a.7.7 0 0 0-.7-.7h-2.6z"></path></svg>`);
                    music.play();
                    $(this).attr('aria-label', 'play');
                    return;
                }
                if ($(this).attr('aria-label') == 'play') {
                    music.pause();
                    $(this).html(`<svg role="img" height="28" width="28" aria-hidden="true" viewBox="0 0 24 24" data-encore-id="icon" class="Svg-sc-ytk21e-0 ldgdZj  margin: auto;">
                    <path d="m7.05 3.606 13.49 7.788a.7.7 0 0 1 0 1.212L7.05 20.394A.7.7 0 0 1 6 19.788V4.212a.7.7 0 0 1 1.05-.606z">
                    </path>
                </svg>`);
                    $(this).attr('aria-label', 'stop');
                    return;
                }
            })
        }
    });
});