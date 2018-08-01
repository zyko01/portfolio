$(document).ready(function(){
    $(window).scroll(function(){
        var positiontop = $(document).scrollTop();
        console.log(positiontop);

        if((positiontop > 230) && (positiontop < 340 )){
            $('#abouttitle').addClass('animated slideInLeft');
          
        }
        if((positiontop > 360) && (positiontop < 897 )){
            $('#me').addClass('animated slideInLeft');
            $('#texts').addClass('animated slideInDown');
            $('#skillsuse').addClass('animated zoomIn');
        }
        if((positiontop > 760) && (positiontop < 1274 )){
            $('#toolsuse').addClass('animated slideInDown');
          
        }
        if((positiontop > 920) && (positiontop < 1300 )){
            $('#portfoliotitle').addClass('animated slideInLeft');
          
        }
        if((positiontop > 1100) && (positiontop < 1500 )){
            $('.portfolio1').addClass('animated slideInLeft');
            $('.portfolio1').addClass('portfolio1');
            $('.portfolio2').addClass('animated slideInRight');
          
        }
        if((positiontop > 1490) && (positiontop < 1750 )){
            $('.portfolio3').addClass('animated slideInLeft');
        }

        if((positiontop > 1867) && (positiontop < 2000 )){
            $('#bltext').addClass('animated slideInLeft');
        }

        if((positiontop > 1890) && (positiontop < 2100 )){
            $('.images1').addClass('animated slideInLeft');
            $('.images2').addClass('animated slideInDown');
            $('.images3').addClass('animated slideInRight');
        }

        if((positiontop > 2290) && (positiontop < 2450)){
            $('#contacttitle').addClass('animated slideInLeft');
            $('.box').addClass('animated slideInLeft');
        }
        if((positiontop > 2467) && (positiontop < 2650 )){
            $('#contacth2').addClass('animated slideInLeft');
            $('#contactp').addClass('animated slideInLeft');
        }

        if((positiontop > 2580) && (positiontop < 2650 )){
            $('.contact-form').addClass('animated slideInLeft');
        }

    });
});