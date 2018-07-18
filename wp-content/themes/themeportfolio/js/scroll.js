$(document).ready(function(){
    $(window).scroll(function(){
        var positiontop = $(document).scrollTop();
        console.log(positiontop);

        if((positiontop > 360) && (positiontop < 897 )){
            $('#me').addClass('animated slideInLeft');
            $('#texts').addClass('animated slideInDown');
            $('#skillsuse').addClass('animated zoomIn');
        }

        if((positiontop > 780) && (positiontop < 1274 )){
            $('#toolsuse').addClass('animated slideInDown');
          
        }
    });
});