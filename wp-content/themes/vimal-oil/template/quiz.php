<?php  
/* 
    Template Name: Quiz Template 
*/

echo get_header();
?>  

<!-- mudule-2 hero banner  -->
<div class="inner-banner default-section">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6 col-md-12 col-sm-12">
				<div class="inner-bnr-img">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/images/quiz-banner-image.png" alt="Quiz Banner image">
				</div>
			</div>
			<div class="col-lg-6 col-md-12 col-sm-12">
				<div class="text-aside">
					<div class="banner-right">
						<div class="h1-title">
							<h1 class="text-noeffect">Lorem ipsum</h1>
						</div>
						<div class="submit-button text-center">
                            <a href="#quiz-question" class="btn-effect" type="submit">
                                Start Quiz
                            </a>
                        </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!--module-2 hero banner html code  -->
<div class="default-section quiz-sec footer-before" id="quiz-question">
    <div class="container">
		<div id="div1">
			<div>
				<div class="panel panel-default">
					<div  class="panel-body">   
                            <!-- <div class="text-center">
							    <button id="start" class="btn-effect ">Start Quiz</button>
                            </div> -->
							<div id="content">
								<div class="panel-footer">
                                    <button class="no-btn" id="back" disabled>Back</button>
									<p id="questCount"></p>
									<div id="barra" class="progress">
                                        <div id="bar" class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100" style="width:0%">
                                        </div>       
									</div>
									<div id="question"></div>
									<div id="answers"></div>
									<br/>
                                    <div class="text-center mt-5">
									    <button class="btn-effect blue-back" id="next">Next</button>
                                    </div>
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>
	</div>
</div>
  
<script>
	// Quiz JS
    // Create a function that will generate new question objects
    function newQuestion(params) {
        var temp = {
            question:  params[0],
            choices: params[1],
            correctAnswer: params[2]
        };
        return temp;
    }
    // Create the array allQuestions and generate all of the new questions
    var allQuestions = [
		<?php  
			$count = 1;
			if (have_rows('quiz_section')) {
				while (have_rows('quiz_section')) {
					the_row(); ?>
					["<p><?php echo $count; ?>. <?php echo the_sub_field('quiz_section_question'); ?><p/>", 
						["simply dummy text of the printing and typesetting industry. Lorem ", "simply dummy text of the printing and typesetting industry. Lorem ", "simply dummy text of the printing and typesetting industry. Lorem ", "simply dummy text of the printing and typesetting industry. Lorem "], 1],
				<?php $count++; }
			}	
		?>
        // ["<p>1. What kind of oil do you eat in winters?<p/>", ["simply dummy text of the printing and typesetting industry. Lorem ", "simply dummy text of the printing and typesetting industry. Lorem ", "simply dummy text of the printing and typesetting industry. Lorem ", "simply dummy text of the printing and typesetting industry. Lorem "], 1],
        // ["<p>2. What kind of oil do you eat in winters?<p/>", ["simply dummy text of the printing and typesetting industry. Lorem ", "simply dummy text of the printing and typesetting industry. Lorem ", "simply dummy text of the printing and typesetting industry. Lorem ", "simply dummy text of the printing and typesetting industry. Lorem "], 1],
        // ["<p>3. What kind of oil do you eat in winters?<p/>", ["simply dummy text of the printing and typesetting industry. Lorem ", "simply dummy text of the printing and typesetting industry. Lorem ", "simply dummy text of the printing and typesetting industry. Lorem ", "simply dummy text of the printing and typesetting industry. Lorem "], 1],
        // ["<p>4. What kind of oil do you eat in winters?<p/>", ["simply dummy text of the printing and typesetting industry. Lorem ", "simply dummy text of the printing and typesetting industry. Lorem ", "simply dummy text of the printing and typesetting industry. Lorem ", "simply dummy text of the printing and typesetting industry. Lorem "], 1],
        // ["<p>5. What kind of oil do you eat in winters?<p/>", ["simply dummy text of the printing and typesetting industry. Lorem ", "simply dummy text of the printing and typesetting industry. Lorem ", "simply dummy text of the printing and typesetting industry. Lorem ", "simply dummy text of the printing and typesetting industry. Lorem "], 1]
    ].map(newQuestion);
    // Create and initialize the total (to 0), number (to 0), and totalQuestions (to the length of allQuestions) variables
    var total = 0, number = 0, totalQuestions = allQuestions.length, answers = [];

    $(document).ready(function() {

        function newQuestionAnswers() {
            $("#content").fadeOut(500, function() {
                $("#answers").empty();
                if (number < totalQuestions)
                    $("#questCount").text("" + (number + 1) + "/5");
                var query = allQuestions[number];
                $("#question").html(query.question);

                // make sure to put in the name parameter and make sure that it's the same as the div that groups
                // the radio buttons together, otherwise they can all be checked at the same time, you'll never have
                // just one answer. The use of the html <label> element was discovered here:
                // http://stackoverflow.com/questions/5795499/changing-text-of-radio-button
                // Where it was explained that the text of the radio button was now explicitly associated with the
                // use of <label>
                for(var i = 0; i < query.choices.length; i++)
                    $("#answers").append("<div class='options'><input type='radio' name='answers' id='radio" + i + "' value='answer" + i
                        + "'><label for='radio" + i + "'>" + query.choices[i] + "</label></div>");
                if(answers.length > number)
                    $("#radio" + answers[number]).prop("checked", true);
                if (number > 0)
                    $("#back").prop("disabled", false);
            });
            $("#content").fadeIn(500);
        }

        function checkAnswer() {
            // Make sure a radio button is checked before proceeding. If one is checked add it to answers, else if
            // the last radio button is reached and it is not checked alert the user that they must select an answer.
            for(var i = 0; i < $("input").length; i++) {
                if ($("#radio" + i).is(":checked")) {
                    answers[number] = i;
                    break;
                }
                else if ( i === $("input").length -1 && !$("#radio" +i).is(":checked")) {
                    $("#next").after("<p id='warning'>Please select an answer and then click next</p>");
                    return false;
                }
            }

            // Check to see if the current radio button checked is the correct answer. If correct increment the
            // score 10 points. This answer helped figure out if a radio box was checked and allowed you to use it in
            // an if statement http://stackoverflow.com/a/12932116
            var query = allQuestions[number];
            if($("#radio" + query.correctAnswer).is(":checked"))
                updateScore(10);
            number += 1;
            return true;
        }
        

        function updateScore(change) {
            total += change;
            $("#score").text("Score: " + total);
        }
        $("#back").hide();
        $("#next").hide();
        $("#startagain").hide();
        $("#score").hide();
        $("#bar10").hide();
        $("#result").hide();
        $("#resultbad").hide();
        // $("#start").on('click', function() {
        //     $("#start").hide();
        //     $('#h4Start').hide(1000);
        //      $("#next").show(1000);
        //     $("#bar").width('5%');
        //     newQuestionAnswers();
        //     updateScore(0);
        // });

        newQuestionAnswers();
        $("#next").show(1000);

        $("#startagain").on('click', function() {
        location.reload();
        });
        
        if (number > 0)
            $("#back").prop("disabled", false);
            $("#bar").width('00%');

        $("#next").on('click', function() {
            $("#back").show(100);
            $("#warning").remove();
            if(checkAnswer()) {
                if (number < totalQuestions)
                    newQuestionAnswers();
                // else
                //     finalScore(); 
            }
            // Enable the back button if past first question
            if (number > 0)
                $("#back").prop("disabled", false);
                $("#bar").width('20%');
            
            if (number > 1)
            $("#bar").width('40%');
            if (number > 2)
            $("#bar").width('60%');
            if (number > 3)
            $("#bar").width('80%');
            if (number > 4){
            $("#bar").width('100%');
            window.location.replace("http://localhost/vimal-oil-wordpress/oil-calendar/")
            }
        });

        console.log(allQuestions[4]);

        $("#next").on('click', function(){
            if(number == allQuestions[4]){
                window.location.replace("http://localhost/vimal-oil-wordpress/oil-calendar/")
            }
        })

        if(allQuestions[4])
        
        console.log(allQuestions[4]);

        $("#back").on('click', function() {
            if ( number === totalQuestions) {
                $("#score").hide();
                $("#question, #answers, #questCount, #next, #score").show(2500);
            }
            
            if (number > 0)
            $("#bar").width('0%');
            if (number > 1)
            $("#bar").width('20%');
            if (number > 2)
            $("#bar").width('40%');
            if (number > 3)
            $("#bar").width('60%');
            if (number > 4)
            $("#bar").width('80%');
            if (number > 5)
            $("#bar").width('100%');
            
            number -= 1;
            $("#back").prop("disabled", true);
            if (allQuestions[number].correctAnswer === answers[number])
                updateScore(-10);
            newQuestionAnswers();    
        });
    });
</script>
<?php 
    echo get_footer();
?>