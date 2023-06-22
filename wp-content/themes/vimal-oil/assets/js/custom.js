$(document).ready(function(){
    $('.banner-slider').owlCarousel({
        loop: true,
        autoplay: true,
        responsiveClass: true,
        dots: true,
        margin: 15,
        autoplayTimeout: 50000,
        smartSpeed: 400,
        items:1,
        //animateOut: 'slideOutDown',
        //animateIn: 'flipInX',
        responsive: {}
    });
    $('.home-prod-sldr').owlCarousel({
        loop: false,
        autoplay: false,
        responsiveClass: true,
        nav: false,
        margin: 30,    
        autoplayTimeout: 4000,
        smartSpeed: 400,
        center: false,
        responsive: {
            0: {
                items: 2,
                margin: 10, 
                loop: true,
                autoplay: true,
                center: true,
                autoplayTimeout: 4000,
                smartSpeed: 400,
            },
            480: {
                items: 3,
                margin: 10, 
                loop: true,
                autoplay: true,
                center: true,
                autoplayTimeout: 4000,
                smartSpeed: 400,
            },
            575: {
                items: 3,
                margin: 10, 
                loop: true,
                autoplay: true,
                center: true,
                autoplayTimeout: 4000,
                smartSpeed: 400,
            },
            991: {
                items: 4,
                loop: true,
                autoplay: true,
                center: true,
                autoplayTimeout: 4000,
                smartSpeed: 400,
            },
            1200: {
                items: 5
            },
        }
    });
});
$(document).ready(function(){
    $('.banner-slider').owlCarousel({
        loop: true,
        autoplay: true,
        responsiveClass: true,
        dots: true,
        margin: 15,
        autoplayTimeout: 50000,
        smartSpeed: 400,
        items:1,
        //animateOut: 'slideOutDown',
        //animateIn: 'flipInX',
        responsive: {}
    });
    $('.home-prod-sldr').owlCarousel({
        loop: false,
        autoplay: false,
        responsiveClass: true,
        nav: false,
        margin: 30,    
        autoplayTimeout: 4000,
        smartSpeed: 400,
        center: false,
        responsive: {
            0: {
                items: 2,
                margin: 10, 
                loop: true,
                autoplay: true,
                center: true,
                autoplayTimeout: 4000,
                smartSpeed: 400,
                dots:false,
            },
            480: {
                items: 3,
                margin: 10, 
                loop: true,
                autoplay: true,
                center: true,
                autoplayTimeout: 4000,
                smartSpeed: 400,
            },
            575: {
                items: 3,
                margin: 10, 
                loop: true,
                autoplay: true,
                center: true,
                autoplayTimeout: 4000,
                smartSpeed: 400,
                dots:false,
            },
            991: {
                items: 4,
                loop: true,
                autoplay: true,
                center: true,
                autoplayTimeout: 4000,
                smartSpeed: 400,
            },
            1200: {
                items: 5
            },
        }
        });

    /* Video Slider */
    $('.pro-vdo-sld').owlCarousel({
            stagePadding: 200,
            loop:true,
            items:1,
            lazyLoad: true,
            autoplay: true,
            autoplaySpeed: 2000,
            autoplayTimeout: 5000,
            autoplayHoverPause: true,
            margin: -320,
            responsive: {
                0: {
                    margin: -100,
                    stagePadding: 40,
                },
                360: {
                    margin: -100,
                    stagePadding: 50,
                },
                480: {
                    margin: -120,
                    stagePadding: 80,
                },
                768: {
                    margin: -100,
                    center: true,
                    stagePadding: 100,
                },
                992: {
                    margin: -130
                },
                1200: {
                    margin: -120
                },
                1300: {
                    margin: -220
                }
            }
            
        })

    // cook healthy slider
     $('.cook-sldr').owlCarousel({
            loop: false,
            autoplay: false,
            responsiveClass: true,
            nav: false,
            margin: 30,    
            autoplayTimeout: 4000,
            smartSpeed: 400,
            center: false,
            responsive: {
                0: {
                    items: 1,
                    margin: 10, 
                    loop: true,
                    autoplay: true,
                    autoplayTimeout: 4000,
                    smartSpeed: 400,
                },
                480: {
                    items: 1,
                    margin: 10, 
                    loop: true,
                    autoplay: true,
                    autoplayTimeout: 4000,
                    smartSpeed: 400,
                },
                575: {
                    items: 2,
                    margin: 10, 
                    loop: true,
                    autoplay: true,
                    autoplayTimeout: 4000,
                    smartSpeed: 400,
                },
                768: {
                    items: 3,
                    margin: 10, 
                    loop: true,
                    autoplay: true,
                    autoplayTimeout: 4000,
                    smartSpeed: 400,
                },
                992: {
                    items: 4,
                    loop: true,
                    autoplay: true,
                    autoplayTimeout: 4000,
                    smartSpeed: 400,
                },
                1200: {
                    items: 4
                }
            }
        });

    $(".menu-btn").on("click", function(e) {
            $(".menu-float").toggleClass("m-open"), e.preventDefault()
    }), $(".close-btn").on("click", function(e) {
            $(".menu-float").removeClass("m-open"), e.preventDefault()
    })
    

    // Instagram slider
    function detect_active() {
        // get active
        var get_active = $("#dp-slider .dp_item:last-child").data("class");
        $(".bg-item").removeClass("active");
        $(".bg-item[data-item=" + get_active + "]").addClass("active");
    }
    $("#dp-next").click(function () {
        var total = $(".tinder--card").length;
        $(".tinder--cards .tinder--card:first-child").hide().appendTo("#tinder--card").fadeIn();
        $.each($(".tinder--card"), function (index, dp_item) {
        $(dp_item).attr("data-position", index + 1);
        });
        detect_active();
    });
    
    $("#dp-prev").click(function () {
        var total = $(".tinder--card").length;
        $(".tinder--cards .tinder--card:last-child").hide().prependTo("#tinder--card").fadeIn();
        $.each($(".tinder--card"), function (index, dp_item) {
        $(dp_item).attr("data-position", index + 1);
        });
    
        detect_active();
    });
    
    $("body").on("click", "#dp-slider .dp_item:not(:last-child)", function () {
        var get_slide = $(this).attr("data-class");
        console.log(get_slide);
        $("#dp-slider .dp_item[data-class=" + get_slide + "]")
        .hide()
        .appendTo("#dp-slider")
        .fadeIn();
        $.each($(".dp_item"), function (index, dp_item) {
        $(dp_item).attr("data-position", index + 1);
        });
    
        detect_active();
    });
});
    // Sticky Header JS Starts
    if ($(window).width() > 0) {
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            if (scroll >= 20) {
                $("header").addClass("sticky");
            } else {
                $("header").removeClass("sticky");
            }
        });
    }

$(document).ready(function(){
    $('.owl-tabbing-jour ').owlCarousel({
        loop: true,
        autoplay: false,
        responsiveClass: true,
        nav: true,
        margin: 10,
        smartSpeed: 400,
        center: false,
        owlNav:true,
        responsive: {
            0: {
                items: 3,
                margin: 0, 
                loop: true,
                autoplay: false,
                center: true,
            },
            480: {
                items: 3,
                margin: 0, 
                loop: true,
                autoplay: false,
                center: true,
            },
            575: {
                items: 7,
                margin: 0, 
                loop: true,
                autoplay: false,
                center: true,
            },
            991: {
                items: 6,
                loop: true,
                autoplay: false,
                center: true,
            },
            1200: {
                items: 6
            },
        }
    });
})

    $(document).ready(function(){
        // Video Play Button
        if ($(".wl-modal-btn").length > 0) {
        $(".wl-modal-btn").click(function() {
            console.log("hello");
            var modalPopup = $(this).attr("data-modal");
            $(".wl-modal").removeClass("wl-modal-open");
            $("#" + modalPopup).addClass("wl-modal-open");
            $("body").addClass("wl-modal-active");
        });
        $(".wl-modal .wl-m-close").click(function() {
            $(".wl-modal").removeClass("wl-modal-open");
            $("body").removeClass("wl-modal-active");
            $(".video-play-box").removeClass("video-play");
        });
        $(".wl-modal").click(function(m) {
            if ($(m.target).is(".wl-modal-open")) {
                $(".wl-modal").removeClass("wl-modal-open");
                $("body").removeClass("wl-modal-active");
                $(".video-play-box").removeClass("video-play");
            }
        });
        document.addEventListener("keydown", function(event) {
            const key = event.key;
            if (key === "Escape") {
                $(".wl-modal").removeClass("wl-modal-open");
                $("body").removeClass("wl-modal-active");
            }
        });
        }

        
        // Video Popup
        if ($("#videoPlaypopup").length > 0) {
            $("#videoPlaypopup").each(function() {
                var playBtn2 = $(".video-play-btn");
                var vBox2 = $(".wl-video-modal");
                var vPlay2 = $(".video-play-box");

                var Video2 = $(this).find("#video");
                var Source2 = $(this).find("source");
                var playStopBtn2 = $(this).find("button") && $(vBox2);

                playBtn2.click(function() {
                    var vPath2 = $(this).attr("data-src");
                    Video2.trigger("load");
                    Video2.trigger("play");
                    vPlay2.attr("src",vPath2 );
                });

                playStopBtn2.click(function() {
                    Source2.attr("src", "/");
                    Video2.trigger("pause");
                    vBox2.removeClass("wl-modal-open");
                    $("body").removeClass("modal-open");
                });

                Video2.click(function() {
                    event.stopPropagation();
                });

                Video2.on("ended", function() {
                    Source2.attr("src", "/");
                    Video2.trigger("pause");
                    vBox2.removeClass("wl-modal-open");
                    vPlay2.removeClass("video-play");
                    $("body").removeClass("modal-open");
                });

                $(document).on("keydown", function(event) {
                    if (event.key === "Escape") {
                        Source2.attr("src", "/");
                        Video2.trigger("pause");
                        vPlay2.removeClass("video-play");
                    }
                });
            });
        }
        
        // Hide header on scroll down
        if ($(window).width() > 767) {
            $(window).scroll(function() {
                var scroll = $(window).scrollTop();
                if (scroll >= 20) {
                    $("header").addClass("sticky");
                } else {
                    $("header").removeClass("sticky");
                }
            });
        }

        // Add class on scroll for NRT section smooth scroll homepage
        $(window).scroll(function(){
            inViewport();
        });
        $(window).resize(function(){
            inViewport();
        });
        function inViewport(){
            $('.nrt-section ').each(function(){
                var divPos = $(this).offset().top - 500,
                    topOfWindow = $(window).scrollTop();
                
                if( divPos < topOfWindow+400 ){
                    $(this).addClass('text-ani');
                }
            });
        }

        // Counter JS
        function inVisible(e) {
            var t = $(window).scrollTop(),
                n = t + $(window).height(),
                o = e.offset().top;
            o + e.height() <= n && o >= t && animate(e)
        }
        
        function animate(e) {
            if (!e.hasClass("ms-animated")) {
                var t = e.data("count"),
                    n = e.html();
                e.addClass("ms-animated"), $({
                    countNum: e.html()
                }).animate({
                    countNum: t
                }, {
                    duration: 2e3,
                    easing: "linear",
                    step: function() {
                        e.html(Math.floor(this.countNum) + n)
                    },
                    complete: function() {
                        e.html(this.countNum + n)
                    }
                })
            }
        }
        $(function() {
            $(window).scroll(function() {
                $("div[data-count]").each(function() {
                    inVisible($(this))
                })
            })
        })
        // Counter JS Ends
        
    });



    // tvc slider 
    $(document).ready(function() {
        $('#tvc-carousel').owlCarousel({
            loop:true,
            margin:10,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1.3,
                },
                575:{
                    items:2,
                },
                768:{
                    items:2,
                },
                1000:{
                    items:3,
                }
            }
        })
    });

    // billboard slider 
    $(document).ready(function() {
        $('#billboard-carousel').owlCarousel({
            loop:true,
            margin:10,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1.3,
                },
                575:{
                    items:2,
                },
                768:{
                    items:2,
                },
                1000:{
                    items:3,
                }
            }
        })
    });

    // // Quiz JS
    // // Create a function that will generate new question objects
    // function newQuestion(params) {
    //     var temp = {
    //         question:  params[0],
    //         choices: params[1],
    //         correctAnswer: params[2]
    //     };
    //     return temp;
    // }
    // // Create the array allQuestions and generate all of the new questions
    // var allQuestions = [
    //     ["<p>1. What kind of oil do you eat in winters?<p/>", ["simply dummy text of the printing and typesetting industry. Lorem ", "simply dummy text of the printing and typesetting industry. Lorem ", "simply dummy text of the printing and typesetting industry. Lorem ", "simply dummy text of the printing and typesetting industry. Lorem "], 1],
    //     ["<p>2. What kind of oil do you eat in winters?<p/>", ["simply dummy text of the printing and typesetting industry. Lorem ", "simply dummy text of the printing and typesetting industry. Lorem ", "simply dummy text of the printing and typesetting industry. Lorem ", "simply dummy text of the printing and typesetting industry. Lorem "], 1],
    //     ["<p>3. What kind of oil do you eat in winters?<p/>", ["simply dummy text of the printing and typesetting industry. Lorem ", "simply dummy text of the printing and typesetting industry. Lorem ", "simply dummy text of the printing and typesetting industry. Lorem ", "simply dummy text of the printing and typesetting industry. Lorem "], 1],
    //     ["<p>4. What kind of oil do you eat in winters?<p/>", ["simply dummy text of the printing and typesetting industry. Lorem ", "simply dummy text of the printing and typesetting industry. Lorem ", "simply dummy text of the printing and typesetting industry. Lorem ", "simply dummy text of the printing and typesetting industry. Lorem "], 1],
    //     ["<p>5. What kind of oil do you eat in winters?<p/>", ["simply dummy text of the printing and typesetting industry. Lorem ", "simply dummy text of the printing and typesetting industry. Lorem ", "simply dummy text of the printing and typesetting industry. Lorem ", "simply dummy text of the printing and typesetting industry. Lorem "], 1]
    // ].map(newQuestion);
    // // Create and initialize the total (to 0), number (to 0), and totalQuestions (to the length of allQuestions) variables
    // var total = 0, number = 0, totalQuestions = allQuestions.length, answers = [];

    // $(document).ready(function() {

    //     function newQuestionAnswers() {
    //         $("#content").fadeOut(500, function() {
    //             $("#answers").empty();
    //             if (number < totalQuestions)
    //                 $("#questCount").text("" + (number + 1) + "/5");
    //             var query = allQuestions[number];
    //             $("#question").html(query.question);

    //             // make sure to put in the name parameter and make sure that it's the same as the div that groups
    //             // the radio buttons together, otherwise they can all be checked at the same time, you'll never have
    //             // just one answer. The use of the html <label> element was discovered here:
    //             // http://stackoverflow.com/questions/5795499/changing-text-of-radio-button
    //             // Where it was explained that the text of the radio button was now explicitly associated with the
    //             // use of <label>
    //             for(var i = 0; i < query.choices.length; i++)
    //                 $("#answers").append("<div class='options'><input type='radio' name='answers' id='radio" + i + "' value='answer" + i
    //                     + "'><label for='radio" + i + "'>" + query.choices[i] + "</label></div>");
    //             if(answers.length > number)
    //                 $("#radio" + answers[number]).prop("checked", true);
    //             if (number > 0)
    //                 $("#back").prop("disabled", false);
    //         });
    //         $("#content").fadeIn(500);
    //     }

    //     function checkAnswer() {
    //         // Make sure a radio button is checked before proceeding. If one is checked add it to answers, else if
    //         // the last radio button is reached and it is not checked alert the user that they must select an answer.
    //         for(var i = 0; i < $("input").length; i++) {
    //             if ($("#radio" + i).is(":checked")) {
    //                 answers[number] = i;
    //                 break;
    //             }
    //             else if ( i === $("input").length -1 && !$("#radio" +i).is(":checked")) {
    //                 $("#next").after("<p id='warning'>Please select an answer and then click next</p>");
    //                 return false;
    //             }
    //         }

    //         // Check to see if the current radio button checked is the correct answer. If correct increment the
    //         // score 10 points. This answer helped figure out if a radio box was checked and allowed you to use it in
    //         // an if statement http://stackoverflow.com/a/12932116
    //         var query = allQuestions[number];
    //         if($("#radio" + query.correctAnswer).is(":checked"))
    //             updateScore(10);
    //         number += 1;
    //         return true;
    //     }
        

    //     function updateScore(change) {
    //         total += change;
    //         $("#score").text("Score: " + total);
    //     }
    //     $("#back").hide();
    //     $("#next").hide();
    //     $("#startagain").hide();
    //     $("#score").hide();
    //     $("#bar10").hide();
    //     $("#result").hide();
    //     $("#resultbad").hide();
    //     // $("#start").on('click', function() {
    //     //     $("#start").hide();
    //     //     $('#h4Start').hide(1000);
    //     //      $("#next").show(1000);
    //     //     $("#bar").width('5%');
    //     //     newQuestionAnswers();
    //     //     updateScore(0);
    //     // });

    //     newQuestionAnswers();
    //     $("#next").show(1000);

    //     $("#startagain").on('click', function() {
    //     location.reload();
    //     });
        
    //     if (number > 0)
    //         $("#back").prop("disabled", false);
    //         $("#bar").width('00%');

    //     $("#next").on('click', function() {
    //         $("#back").show(100);
    //         $("#warning").remove();
    //         if(checkAnswer()) {
    //             if (number < totalQuestions)
    //                 newQuestionAnswers();
    //             // else
    //             //     finalScore(); 
    //         }
    //         // Enable the back button if past first question
    //         if (number > 0)
    //             $("#back").prop("disabled", false);
    //             $("#bar").width('20%');
            
    //         if (number > 1)
    //         $("#bar").width('40%');
    //         if (number > 2)
    //         $("#bar").width('60%');
    //         if (number > 3)
    //         $("#bar").width('80%');
    //         if (number > 4){
    //         $("#bar").width('100%');
    //         window.location.replace("http://localhost/vimal-oil-wordpress/oil-calendar/")
    //         }
    //     });

    //     console.log(allQuestions[4]);

    //     $("#next").on('click', function(){
    //         if(number == allQuestions[4]){
    //             window.location.replace("http://localhost/vimal-oil-wordpress/oil-calendar/")
    //         }
    //     })

    //     if(allQuestions[4])
        
    //     console.log(allQuestions[4]);

    //     $("#back").on('click', function() {
    //         if ( number === totalQuestions) {
    //             $("#score").hide();
    //             $("#question, #answers, #questCount, #next, #score").show(2500);
    //         }
            
    //         if (number > 0)
    //         $("#bar").width('0%');
    //         if (number > 1)
    //         $("#bar").width('20%');
    //         if (number > 2)
    //         $("#bar").width('40%');
    //         if (number > 3)
    //         $("#bar").width('60%');
    //         if (number > 4)
    //         $("#bar").width('80%');
    //         if (number > 5)
    //         $("#bar").width('100%');
            
    //         number -= 1;
    //         $("#back").prop("disabled", true);
    //         if (allQuestions[number].correctAnswer === answers[number])
    //             updateScore(-10);
    //         newQuestionAnswers();    
    //     });
    // });


$(document).ready(function(){
    setTimeout(function() {
        $(".oil-cans").addClass("aniactive");
      }, 250);
});

$(window).scroll(function() {    
    var scroll = $(window).scrollTop();
    
    if (scroll >= 20) {
        //clearHeader, not clearheader - caps H
        $(".oil-bottle-flow").addClass("rotate");
    }
    else{
        $(".oil-bottle-flow").removeClass("rotate");
    }

});

// scroll to section blue drop to nrt section
// $('#nrt-ills-section').scrollTo('#nrt-ills-section-1');



// oil-flow js 

if(window.location.href === "http://localhost/vimal-oil-wordpress/nrt/"){
    window.addEventListener('scroll', (e) => {
        document.querySelector('.oil-swirl').style.height = window.scrollY + 'px';
        document.querySelector('.oil-swirl').style.transitionDelay = "0.1s";
        document.querySelector('.oil-swirl').style.transitionTimingFunction = 'ease-in';
    }) 
}

// window.addEventListener('scroll', (e) => {
//     document.querySelector('.oil-swirl').style.height = window.scrollY + 'px';
//     document.querySelector('.oil-swirl').style.transitionDelay = "0.1s";
//     document.querySelector('.oil-swirl').style.transitionTimingFunction = 'ease-in';
// })



// tinder swipe effect 
// 'use strict';

// var tinderContainer = document.querySelector('.tinder');
// var allCards = document.querySelectorAll('.tinder--card');
// var nope = document.getElementById('dp-prev');
// var love = document.getElementById('dp-next');

// function initCards(card, index) {
//   var newCards = document.querySelectorAll('.tinder--card:not(.removed)');

//   newCards.forEach(function (card, index) {
//     card.style.zIndex = allCards.length - index;
//     card.style.transform = 'scale(' + (20 - index) / 20 + ') translateY(-' + 30 * index + 'px)';
//     // card.style.opacity = (10 - index) / 10;
//   });
  
//   tinderContainer.classList.add('loaded');
// }

// initCards();

// allCards.forEach(function (el) {
//   var hammertime = new Hammer(el);

//   hammertime.on('pan', function (event) {
//     el.classList.add('moving');
//   });

//   hammertime.on('pan', function (event) {
//     if (event.deltaX === 0) return;
//     if (event.center.x === 0 && event.center.y === 0) return;

//     tinderContainer.classList.toggle('tinder_love', event.deltaX > 0);
//     tinderContainer.classList.toggle('tinder_nope', event.deltaX < 0);

//     var xMulti = event.deltaX * 0.03;
//     var yMulti = event.deltaY / 80;
//     var rotate = xMulti * yMulti;

//     event.target.style.transform = 'translate(' + event.deltaX + 'px, ' + event.deltaY + 'px) rotate(' + rotate + 'deg)';
//   });

//   hammertime.on('panend', function (event) {
//     el.classList.remove('moving');
//     tinderContainer.classList.remove('tinder_love');
//     tinderContainer.classList.remove('tinder_nope');

//     var moveOutWidth = document.body.clientWidth;
//     var keep = Math.abs(event.deltaX) < 80 || Math.abs(event.velocityX) < 0.5;

//     event.target.classList.toggle('removed', !keep);

//     if (keep) {
//       event.target.style.transform = '';
//     } else {
//       var endX = Math.max(Math.abs(event.velocityX) * moveOutWidth, moveOutWidth);
//       var toX = event.deltaX > 0 ? endX : -endX;
//       var endY = Math.abs(event.velocityY) * moveOutWidth;
//       var toY = event.deltaY > 0 ? endY : -endY;
//       var xMulti = event.deltaX * 0.03;
//       var yMulti = event.deltaY / 80;
//       var rotate = xMulti * yMulti;

//       event.target.style.transform = 'translate(' + toX + 'px, ' + (toY + event.deltaY) + 'px) rotate(' + rotate + 'deg)';
//       initCards();
//     }
//   });
// });

// function createButtonListener(love) {
//   return function (event) {
//     var cards = document.querySelectorAll('.tinder--card:not(.removed)');
//     var moveOutWidth = document.body.clientWidth * 1.5;

//     if (!cards.length) return false;

//     var card = cards[0];

//     card.classList.add('removed');

//     if (love) {
//       card.style.transform = 'translate(' + moveOutWidth + 'px, -100px) rotate(-30deg)';
//     } else {
//       card.style.transform = 'translate(-' + moveOutWidth + 'px, -100px) rotate(30deg)';
//     }

//     initCards();

//     event.preventDefault();
//   };
// }

// var nopeListener = createButtonListener(false);
// var loveListener = createButtonListener(true);

// nope.addEventListener('click', nopeListener);

// love.addEventListener('click', loveListener);

// love.addEventListener('click', loveListener);



// autoscroll nrt section 
$("")