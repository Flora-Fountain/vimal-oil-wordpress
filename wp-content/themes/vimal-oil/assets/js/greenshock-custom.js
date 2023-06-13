$( window ).on('scroll', function(){


    var scrollTop = $(this).scrollTop();

    $(".oil-swirl").css({
        // height : "10px",
    })


    let i = 0;
    



    // var scrollTop = $(this).scrollTop();
    // $( '.oil-swirl' ).css({
    //   height: ( -1 * scrollTop ) +'px)',
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

  
    
    // var vh = (document.documentElement.clientHeight * 80) / 100; //80vh to px
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


// gsap.registerPlugin(ScrollTrigger);
// gsap.set('.coffee-swirl-image', {autoAlpha: 1})

//     gsap.utils.toArray(".nrt-tempe").forEach((section, i) => {
//       gsap.from(section.querySelectorAll(".about_text_p"), {
//         scrollTrigger: {
//           trigger: section,
//           // markers: true,
//           start: "top 95%"
//         },
//         yPercent: 200,
//         duration: 0.8,
//         ease: "easeInOut"
//       });
// 		});


// function isElementInViewport(element) {
//     var rect = element.getBoundingClientRect();
//     return (
//       rect.top >= 0 &&
//       rect.left >= 0 &&
//       rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
//       rect.right <= (window.innerWidth || document.documentElement.clientWidth)
//     );
//   }
  
//   function revealImage() {
//     var image = document.querySelector('.coffee-swirl-image');
//     if (isElementInViewport(image)) {
//       image.style.opacity = 1;
//     }
//   }
  
//   window.addEventListener('scroll', revealImage);

// function isElementInViewport(element) {
//     var rect = element.getBoundingClientRect();
//     return (
//       rect.top >= 0 &&
//       rect.left >= 0 &&
//       rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
//       rect.right <= (window.innerWidth || document.documentElement.clientWidth)
//     );
//   }
  
//   function revealImage() {
//     var image = document.querySelector('.coffee-swirl-image');
//     if (isElementInViewport(image)) {
//       image.style.opacity = 1;
//       image.style.bottom = 0;
//       window.removeEventListener('scroll', revealImage);
//     }
//   }
  
//   window.addEventListener('scroll', revealImage);

// var image = document.getElementById('.coffee-swirl-image');
// image.addEventListener('wheel', function(e) {
//   this.height += Math.floor(e.deltaY);
//   e.preventDefault();
// });
  

// window.addEventListener('scroll', function() {
//     var imageContainer = document.querySelector('.oil-swirl');
//     var image = document.getElementById('coffee-swirl-image');
//     var scrollPosition = window.scrollY;
  
//     // Calculate the new height based on the scroll position
//     var newHeight = scrollPosition + image.clientHeight; // Adjust the increment as needed
  
//     // Set the new height for the image container
//     imageContainer.style.height = newHeight + 'px';
//   });

// var oilSwirl = document.getElementById("oil-swirl");

//     window.addEventListener("scroll", function() {
//       // Increase the height of the div by 10 pixels on scroll
//     //   oilSwirl.style.height = (oilSwirl.offsetHeight + 10) + "px";

//       document.getElementById("oil-swirl").style.height = (oilSwirl.offsetHeight + 10)  + "px";


//     });

// window.addEventListener('scroll', function() {
//     var div = document.querySelector('.oil-swirl');
//     var img = document.querySelector('.oil-swirl img');
//     var scrollTop = window.scrollY || window.pageYOffset;
//     div.style.height = scrollTop + 'px';
//     img.style.visibility = 'visible';
// });


// var tl = gsap.timeline({paused:true});

// tl
//   .fromTo(".oil-swirl", {yPercent:-100}, {duration: 0.5, yPercent:0})
//   .fromTo(".oil-swirl img", {yPercent:100}, {duration: 0.5, yPercent: 0}, "<")
//   .reverse();

// $(window).on("scroll", function() {
//   if ($(window).scrollTop() > 300) { // Adjust the scroll position threshold as needed
//     tl.reversed(!tl.reversed());
//   }
// });

// let bgImage = document.querySelector(".oil-swirl");
//       //  Now registering thescrollTrigger plugin to gsap
//     gsap.registerPlugin(ScrollTrigger);
//       // Now we are going to animate

//     gsap.fromTo(
//         bgImage,
//         {
//           clipPath: "circle(5% at 77% 40%)",
//         },
//         {
//           clipPath: "circle(75% at 50% 50%)",
//           ease: "none",
//           //  We want to do that animation on scroll
//           scrollTrigger: {
//             trigger: bgImage,
//             scrub: 1,
//             start: "top center",
//             end: "top center-=200",
//           },
//         }
//       );

    //   $(window).on("scroll", function() {
    //     var scrollPos = $(window).scrollTop();
    //     var windowHeight = $(window).height();
    //     var imagePos = $(".coffee-swirl-image").offset().top;
        
    //     if (scrollPos > imagePos - windowHeight + 100) { // Adjust the offset and threshold as needed
    //       $(".coffee-swirl-image").addClass("reveal");
    //     }
    //   });



// oil-flow js 


 

gsap.registerPlugin(ScrollTrigger);

gasp.from('.nrt-ills-sec', { duration:1.5, x:500,

    ScrollTrigger : {
        trigger:".nrt-ills",
        start : "bottom, bottom",
        end:"bottom, bottom",
        scrub:2,
    }

})

$(window).on("scroll", (e) => {
    
})