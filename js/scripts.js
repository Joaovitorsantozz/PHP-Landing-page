
$(function(){
     $('nav.mobile').click(function(){
        var menulist=$('nav.mobile ul');
        
        if(menulist.is('hidden')==true){
              var icon= $('.button-mobile').find('i');
              icon.removeClass("fa-bars");
              icon.addClass("fa-times");
              menulist.slideToggle();
        }else{
                menulist.slideToggle();
                icon.removeClass("fa-times");
                icon.addClass("fa-bars");
        }
     })
})