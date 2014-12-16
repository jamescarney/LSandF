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

function addWorkoutTable() {
	//Get string from workoutform
	workoutName = document.getElementById('workoutInput').value;
		
	//Test
	alert('Added your stuff ' + workoutName + '\n\n This is a first test');

	//Add new table with caption of workoutName
	var newTable = document.createElement("div"); 
	var newCaption = document.createTextNode(workoutName);

	//when added the table will slide into place
	var tableSlide = document.getElementById('workoutTable');

	tableSlide.className = tableSlide.className + " animated bounceInLeft";

	
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








/**************
Random Junk
**************/

//Stuff I test out to see if it works. Real basic. If it does, then I move it up the latter. If it doesn't... Well. Lets not talk about that.



function test() {
	console.log('Begin function');
	//Declare the node you want to clone
	var exerciseTable = document.getElementById('workoutTable');
	console.log('grab table');
	console.log(exerciseTable);

	var newExercise = exerciseTable.cloneNode(true);


	// Create a new paragraph element, and append it to the end of the document
	// var p = document.createElement("p");
	console.log('put table into page');
	document.body.appendChild(newExercise);
	



	return alert('complete');
}


// addWorkoutTable(this.form)














