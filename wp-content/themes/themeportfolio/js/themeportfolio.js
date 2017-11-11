// this is where you put your custom js
$(function () {
    var currentHash = "#"
    $(document).scroll(function () {
        $('.row').each(function () {
            var top = window.pageYOffset;
            var distance = top - $(this).offset().top;
            var hash = $(this).attr('id');
            // 30 is an arbitrary padding choice, 
            // if you want a precise check then use distance===0
            if (distance < 30 && distance > -30 && currentHash != hash) {
                window.location.hash = (hash);
                currentHash = hash;
            }
        });
    });
});

