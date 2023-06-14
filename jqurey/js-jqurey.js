

$(function(){

    'use strict';

//  Click on Link a => enter on section Link .

$('.Header .nav ul li a').click(function(e){
        // e.preventDefault();

        $("html , body").animate({
            scrollTop : $("#" + $(this).data('scroll')).offset().top
        },1000);
});


//  Click on Link a => hover appears => Hover disappears from the siblings

$('.Header .nav ul li a').click(function(){

   $(this).parent().addClass("act").siblings().removeClass("act");

});

//  All scroll 

 $(window).scroll(function(){
       
    // first what => scroll Enter the section => The hover on nav+a Section .
                 $(".height").each(function(){
    
                if($(window).scrollTop() > $(this).offset().top - 400 ){
        
                    var heightId = $(this).attr('id');
                    
                   $('.Header .nav ul li a[data-scroll="'+ heightId +'"]').parent().addClass('act').siblings().removeClass("act");
                }
       
    // first what => scroll the less than 30 => The hover on header-background .

                // else if($(window).scrollTop() > 30){
                //        $('.Header').css({
                //            backgroundColor : "#eeeff1",
                //        })
                // }else{
                //        $('.Header').css({
                //            backgroundColor : "transparent"
                //        })
                //    } 
                });


    //   first what => scroll the less than 500 => The animate on Home .

                if( this.scrollY <= 500 ){

                    $(".contrenir-item h1").addClass("animate-h1")
                    $(".contrenir-item p").addClass("animate-p")
                    $(".contrenir-item .btn").addClass("animate-btn")
                    $(".contrenir-item .icon").addClass("animate-icon")

                }else{

                    $(".contrenir-item h1").removeClass("animate-h1")
                    $(".contrenir-item p").removeClass("animate-p")
                    $(".contrenir-item .btn").removeClass("animate-btn")
                    $(".contrenir-item .icon").removeClass("animate-icon")

                }

             

    // first what => scroll enter About appears => animate

                 if($(window).scrollTop() > $("#about").offset().top - 100 ){
            
                       $(".title-About-two-img h1").addClass('about-animate-h1');
                       $(".title-About-two-img p").addClass('about-animate-Two');
                       $(".title-About-two-img p:nth-child(3)").addClass('about-animate-pOne');
                       $(".title-About-two-img a ").addClass('about-animate-a');
            
                }else{
                       $(".title-About-two-img h1").removeClass('about-animate-h1');
                       $(".title-About-two-img p").removeClass('about-animate-Two');
                       $(".title-About-two-img p:nth-child(3)").removeClass('about-animate-pOne');
                       $(".title-About-two-img a ").removeClass('about-animate-a');
                }
// 

// 
                if($(window).scrollTop() > $("#rent").offset().top - 400 ){

                    $(".ani").addClass('headerh1-animation');
                    $(".ani1").addClass('headerh2-animation');

                }else{

                    $(".ani").removeClass('headerh1-animation');
                    $(".ani1").removeClass('headerh2-animation');
                }

                if($(window).scrollTop() > $("#sale").offset().top - 400 ){

                    $(".new1-A").addClass('headerh4-animation');
                    $(".new1-a").addClass('headerh5-animation');
                    $(".new1-b").addClass('headerh6-animation');


                }else{

                    $(".new1-A").removeClass('headerh4-animation');
                    $(".new1-a").removeClass('headerh5-animation');
                    $(".new1-b").removeClass('headerh6-animation');


                }


 });







});