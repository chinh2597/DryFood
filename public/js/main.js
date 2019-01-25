$(document).ready(function(){
    $(".partnerContent").owlCarousel({
        loop:true,
        margin:20,
        responsiveClass:true,
        nav: false,
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:3,
                nav:false
            },
            1000:{
                items:5,
                nav:false,
                loop:false
            }
        }
    });
});

/*-------------end js config carsoule news macca--------------*/

$(".shoppingCart").on("mouseover",function(){
    $(".shoppingCartContent").slideDown();
    $(".shoppingCartContent").on("mouseleave", function(){
        $(".shoppingCartContent").slideUp();
    })
});
// $(".shoppingCart").not(".shoppingCartContent").on("mouseleave",function(){
//     $(".shoppingCartContent").slideUp();
// })
