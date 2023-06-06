<?php  
/* 
    Template Name: Quiz Template 
*/

echo get_header();
?>  
    <!--module-2 hero banner html code  -->
<div class="default-section quiz-sec">
    <div class="container">
			<div id="div1">
				<div style="">
					<div class="panel panel-default">
						<div  class="panel-body">   
                            <div class="text-center">
							    <button id="start" class="btn-effect ">Start Quiz</button>
                            </div>
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
									    <button class="btn-effect" id="next">Next</button>
                                    </div>
									<h3><p id="score"></p></h3>
									<p id="result"><b>Congratulations! You made it!</b></p>
									<p id="resultbad"><b>Sorry, you need to score 70 points to pass</b></p>
									<button id="startagain">Start Again</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		
	</div>
</div>
    
<?php 
    echo get_footer();
?>