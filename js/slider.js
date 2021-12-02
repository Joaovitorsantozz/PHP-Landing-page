$(function(){

    var curSlide=0;
    
    var maxSlide=$(banner-single).length-1;
    changeslide();

    function init(){
        $('banner-single').hide();
        $('banner-single').eq(0).show();

    }
    function changeslide(){
        setInterval(function(){
            curSlide++;
            $('banner-single').eq(curSlide).fadeOut(2000);
            if(curSlide>maxSlide){
                curSlide=0;
            }
            $('banner-single').eq(curSlide).fadeIn(2000);
        },3000);
    }
})