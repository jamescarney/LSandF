<?php include('header.php'); ?>

		    <section class="main-section">
			    <h1>BMI</h1> 
			    <p class="lead">The place where a number around 20-30 can convince you to get off your butt and excercise.</p>

			    <form oninput="result.value=parseInt(feet.value)+parseInt(inches.value)">
					<div class="row">
						<div class="small-6 columns">
							<label>Height (feet)
								<select id="heightFeet">
									<option name="feet" value="48">4'</option>
									<option name="feet" value="60">5'</option>
									<option name="feet" value="72" selected>6'</option>
									<option name="feet" value="84">7'</option>
								</select>
							</label>
						</div>
						<div class="small-6 columns">
							<label>Height (inches)
								<select id="heightInches">
									<option name = "inches" value="1">1"</option>
									<option name = "inches" value="2">2"</option>
									<option name = "inches" value="3" selected>3"</option>
									<option name = "inches" value="4">4"</option>
									<option name = "inches" value="5">5"</option>
									<option name = "inches" value="6">6"</option>
									<option name = "inches" value="7">7"</option>
									<option name = "inches" value="8">8"</option>
									<option name = "inches" value="9">9"</option>
									<option name = "inches" value="10">10"</option>
									<option name = "inches" value="11">11"</option>
								</select>
							</label>
						</div>
					</div>
					<div class="row">
						<div class="large-12 columns">
							<label>Weight (lbs)
								<input type="number" id="weight" value="215" />
							</label>
						</div>
					</div>
					<div class="row" id="bmiResults">
						<div class="large-12 columns">
							<a href="#"  type="button" onclick="bmiCalc();" class="button success expand radius">Calculate</a>
						</div>
					</div>
				</form>

				<!-- <form oninput="result.value=parseInt(a.value)+parseInt(b.value)">
				    <input type="number" name="b" value="50" />
				    <input type="number" name="a" value="10" /> =
				    <output name="result"></output>
				</form> -->
								
				<!-- JavaScript and HTML codes by Quackit.com -->
				
				<footer>
					<hr>
				    <div class="container text-center clearfix">
				      <p>
				        <a href="http://facebook.com/carnage91" target="_blank"><i class="fa fa-facebook-square fa-2x"></i></a>
				        <a href="http://twitter.com/cawney" target="_blank"><i class="fa fa-twitter-square fa-2x"></i></a>
				        <a href="http://youtube.com" target="_blank"><i class="fa fa-youtube-square fa-2x"></i></a>
				        <a href="mailto:james.carneydev@gmail.com"><i class="fa fa-envelope-square fa-2x"></i></a>
				      </p>
				    	<p>&copy; 2014 | James Carney</p>
						</div>
				  </footer>
		    </section>

		  <a class="exit-off-canvas"></a>
		  </div> <!-- inner wrap -->
		</div>
		<!-- /off-canvas-wrap -->

		</div><!-- /.wrapper -->

    <!-- JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bower_components/foundation/js/vendor/jquery.js"></script>
    <script src="bower_components/foundation/js/vendor/fastclick.js"></script>
    <script src="assets/js/min/awesome-min.js"></script>

    <!-- Core JS for Foundation -->
    <script src="bower_components/foundation/js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>

