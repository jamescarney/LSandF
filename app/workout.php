<?php include('header.php'); ?>

					<section class="main-section">
						<form>
							<div class="row">
								<div class="large-12 columns workouts">
									<h1>Workout Tracker</h1>
									<h3>Monday</h3>
									<div class="row">
										<div class="medium-8 columns">
											<img src="http://placehold.it/200x200" alt="">
										</div>
										<div class="medium-4 columns">
											<FORM NAME="myform" ACTION="" METHOD="GET">Enter new exercise: <BR>
												<INPUT TYPE="text" NAME="inputbox" VALUE="" id="workoutInput" onChange="addWorkoutTable()">
												<INPUT TYPE="button" NAME="button" Value="Add" class="button success expand">
										 	</FORM>
										</div>
										<div class="main-workout large-12 columns" id="main-workout">
											<table class="workoutTable animated bounceInLeft" id="workoutTable">
												<caption><span id="workoutTableCaption">Deadlift</span> <a href="#" onclick="addSet()"><i class="fa fa-plus-circle"></i></a> <a href="#" onclick="subtractSet()"><i class="fa fa-minus-circle"></i></a></caption>
												<!-- The plus and minus will be used to add more sets onto the curent workout. If you hit the minus enough then that whole workout will go away -->
												<thead>
													<tr>
														<th id="setNumber">Sets</th>
														<th id="reps">Reps</th>
														<th id="weight">Weight</th>
														<th id="time-break">Time/Break</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td data-th="Set">1</td>
														<td data-th="Reps"><input type="number" name="" id=""></td>
														<td data-th="Weight"><input type="number" name="" id=""></td>
														<td data-th="Time/Break"><input type="text" name="" id=""></td>
													</tr>
													<tr>
														<td data-th="Set">2</td>
														<td data-th="Reps"><input type="number" name="" id=""></td>
														<td data-th="Weight"><input type="number" name="" id=""></td>
														<td data-th="Time/Break"><input type="text" name="" id=""></td>
													</tr>
													<tr>
														<td data-th="Set">3</td>
														<td data-th="Reps"><input type="number" name="" id=""></td>
														<td data-th="Weight"><input type="number" name="" id=""></td>
														<td data-th="Time/Break"><input type="text" name="" id=""></td>
													</tr>
												</tbody>
											</table>
											
										</div>
										<h3>Recap...</h3>
											<p class="lead">Your best set was (190 lbs) (5 times) for (deadlift) with a predicted max of (500 lbs). Nice job!</p>
									</div>
								</div>
							</div>
						</form> 
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
					<!-- /Keep everything in here -->

					<a class="exit-off-canvas"></a>
				</div> <!-- inner wrap -->
			</div>
			<!-- /off-canvas-wrap -->

		</div><!-- /.wrapper -->

		<!-- JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<!-- <script src="bower_components/foundation/js/vendor/jquery.js"></script> -->
		<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
		<script src="bower_components/foundation/js/vendor/fastclick.js"></script>
		<script src="assets/js/min/awesome-min.js"></script>

		<!-- Core JS for Foundation -->
		<script src="bower_components/foundation/js/foundation.min.js"></script>
		<script>
			$(document).foundation();
		</script>
	</body>
</html>