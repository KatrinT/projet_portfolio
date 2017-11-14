$( document ).ready(function(){

// //smooth scroll
//     $("a[href^='#']").on('click', function(event) {
//     		event.preventDefault();
//     		var monID = $(this).attr("href");
//     		console.log(monID);
//     		var decalage = $(monID).offset().top;
//     		console.log(decalage);
//     		$("html, body").animate({
//     			"scrollTop":decalage
//     		}, 500);
// }); //FIN CLICK
//
// //sticky menu
// var ouKilEstMonNav = $("nav").offset().top;
// $(document).on("scroll", function(){
//
//     var positionScroll = $(document).scrollTop();
//     console.log(positionScroll);
//     if(positionScroll>ouKilEstMonNav){
//         $("nav").addClass("stiky");
//         $("main").css("margin-top",80 );
//     }else{
//         $("nav").removeClass("stiky");
//         $("main").css("margin-top",0 );
//     }
// });//FIN SCROLL
//

    //carousel

    $('.carousel.carousel-slider').carousel({fullWidth: true});

    //présentation accordeon
    $(document).ready(function(){
        $('.collapsible').collapsible();
    });

    //navbar

     $(".button-collapse").sideNav();

});
