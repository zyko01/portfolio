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
        if((positiontop > 1500) && (positiontop < 1750 )){
            $('.portfolio3').addClass('animated slideInLeft');
        }

        if((positiontop > 1868) && (positiontop < 2000)){
            $('#contacttitle').addClass('animated slideInLeft');
            $('.box').addClass('animated slideInLeft');
        }
        if((positiontop > 2000) && (positiontop < 2200 )){
            $('#contacth2').addClass('animated slideInLeft');
            $('#contactp').addClass('animated slideInLeft');
        }
        if((positiontop > 2114) && (positiontop < 2300 )){
            $('.send-email').addClass('animated slideInLeft');
        }
    });
});