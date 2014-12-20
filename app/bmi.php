<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Jame Carney Web Developer Portfolio Site">
    <meta name="author" content="James Carney">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" href="../../favicon.ico">

    <title>Lifestyle Strength and Fitness | App</title>

    <!-- Foundation core CSS -->
    <link rel="stylesheet" href="bower_components/foundation/css/foundation.css">

    <!-- Custom styles for this template -->     
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="bower_components/animate.css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <!-- Modernizr for older browsers -->
    <script src="bower_components/foundation/js/vendor/modernizr.js"></script>
  </head>
	<body>
	<div class="wrapper">
		<div class="off-canvas-wrap" data-offcanvas>
		  <div class="inner-wrap">
		    <nav class="tab-bar sticky">
		      <section class="left-small">
		        <a class="left-off-canvas-toggle menu-icon" href="#"><span></span></a>
		      </section>

		      <section class="middle tab-bar-section">
		        <h1 class="title">Lifestyle Strength and Fitness</h1>
		      </section>
		    </nav>

		    <aside class="left-off-canvas-menu">
		      <ul class="off-canvas-list">
		        <li><label>Admin</label></li>
		        <li><a href="index.html">Sign In Page</a></li>
		        <li><label>Assessments</label></li>
		        <li><a href="bmi.html">BMI</a></li>
		        <li><a href="#weight-tracker.html">Weight Tracker</a></li>
		        <li><a href="#fitness-tracker.html">Fitness Tracker</a></li>
		      </ul>
		    </aside>

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

