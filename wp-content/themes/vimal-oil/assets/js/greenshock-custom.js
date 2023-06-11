$( window ).on('scroll', function(){

    var scrollTop = $(this).scrollTop();
    // $( '.oil-swirl' ).css({
    //   transform: 'translateX('+  ( -1 * scrollTop ) +'px)',
    // });

    // $('.oil-swirl').css({
      
    // })

    // $('.oil-swirl').css({
    //   opacity: function() {
    //       var elementHeight = $(this).height(),
    //       // opacity = ((elementHeight - scrollTop) / elementHeight);
    //       opacity = ((scrollTop - elementHeight) / scrollTop);
    //       return opacity;
    // }
    // })

  
    
    // var vh = (document.documentElement.clientHeight * 80) / 100;//80vh to px
    // var scrollTop = $(this).scrollTop();
    // var current = parseFloat($('.coffee-swirl-image').css('opacity'));
    // var opacity = Math.min(Math.max((scrollTop >= vh ? current - 0.1 : current + 0.1), 0), 1);
    // $('.coffee-swirl-image').css({opacity: opacity});
     

});


// gsap.registerPlugin(ScrollTrigger);
// gsap.to("#coffee-swirl-image", {
//   scrollTrigger: {
//     trigger: "#oil-swirl",
//     start: "center center",
//     pin: true,
//     markers: true,
//     scrub: true
//   },
//   opacity: 1,
// });