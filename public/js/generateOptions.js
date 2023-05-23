$(document).ready(function() {
    for (i = 1; i <= 30; i++) {

        (i <= 12) ? $('#month').append('<option value=' + i + '>' + i + '</option>'): [];

        $('#day').append(
            '<option value=' + i + '>' + i + '</option>'
        );
    }
    for (j = 1993; j < 2023; j++) {
        $('#year').append(
            '<option value=' + j + '>' + j + '</option>'
        );
    }
});