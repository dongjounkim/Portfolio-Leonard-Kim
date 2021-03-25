$(document).ready(function(){
    var width = $(window).width();
    if (width > 768){
        $(".hero-text").animate({left: 100,opacity:1});
        $(".hero-bg").animate({opacity:1});
    }
});
