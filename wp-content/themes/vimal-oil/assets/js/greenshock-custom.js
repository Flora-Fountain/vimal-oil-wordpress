// oil-flow js 

$(".next").click(function(event){
    event.preventDefault();
    $('html, body').animate({scrollTop: '+=700'}, 800);

});
 
$(window).on("scroll", function(){

})

gsap.registerPlugin(ScrollTrigger);

gsap.from('.nrt-ills-sec', { duration:1.5, x:500,

    ScrollTrigger : {
        trigger:".nrt-ills",
        start : "bottom, bottom",
        end:"bottom, bottom",
        scrub:2,
    }

})

$(window).on("scroll", (e) => {
    
})



// homepage greensock aniamtion


