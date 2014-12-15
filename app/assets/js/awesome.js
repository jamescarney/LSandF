/******************************************************************************
Lets get it on
******************************************************************************/



/* 
	Works now for a pop up form, need to change:
	the location of where the result is outputed.
	from popup to using the form
	using parsInt to make sure nothing weird happens
 */

var workoutName; //Name of workout when added to workout tracker
var height; //Height when put into BMI tracker or basic info tracker
var weight; //Weight when put into BMI tracker or basic info tracker


// workoutName = document.workoutFormName.value;




// function bmiCalc(height, weight) {
// 	height = prompt("What is your height in inches?");
// 	weight = prompt("How much do you weigh in LBS?");

// 	var bmi = weight / ( height * height ) * 703;

	
// 	alert("Your BMI is... " + bmi);
	
// }

// bmiCalc();


function addWorkout(form) {
	//add a new table as with workoutName as the caption
	          var TestVar = form.inputbox.value;
	// alert("Your workout is added");
	alert("Added " + TestVar + " to your workout!");

}

// addWorkout();



/**************************************
Add workout sets to a table
**************************************/

function addSet() {
	alert("Added another set!");
	console.log("Add another row to the table");
}

function subtractSet() {
	alert("Took off a set!");
	console.log("Take off a row from the table.");
}

