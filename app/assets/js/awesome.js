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
var heightFeet; //Height when put into BMI tracker or basic info tracker
var heightInches; //Height when put into BMI tracker or basic info tracker
var height; //Height in inches from
var weight; //Weight when put into BMI tracker or basic info tracker


heightFeet= document.getElementById('heightFeet').value;
heightInches = document.getElementById('heightInches').value;

height = heightFeet * 12 + heightInches;
// workoutName = document.workoutFormName.value;


/******************************************************************************
BMI Calc
******************************************************************************/




function bmiCalc(height, weight) {

	// get the height and weight values from the form
	heightFeet= document.getElementById('heightFeet').value;
	heightInches = document.getElementById('heightInches').value;

	height = parseFloat(heightFeet) +  parseFloat(heightInches);
	weight= document.getElementById('weight').value;


	console.log("Your height is " + height + " inches. \n\n Your weight is " + weight + " lbs." );
	// calc your BMI
	var bmi = weight / ( height * height ) * 703;

	
	alert("Your BMI is... " + bmi);


	 // create a new div element 
	  // and give it some content 
	  var newDiv = document.createElement("div"); 
	  var newContent = document.createTextNode("BMI: " + bmi); 
	  newDiv.appendChild(newContent); //add the text node to the newly created div. 

	  // add the newly created element and its content into the DOM 
	  var currentDiv = document.getElementById("bmiResults"); 
	  // document.body.insertBefore(newDiv, currentDiv); 
	
	return console.log('end program');
}








/******************************************************************************
Added table
******************************************************************************/
//added table to workout.html after click



function addWorkoutTable(workoutName) {

	console.log("Begin function");
	//Get string from workoutform
	workoutName = document.getElementById('workoutInput').value;
		
	//Declare node and make it show up in the table
	var exerciseTable = document.getElementById('workoutTable');
	console.log(exerciseTable); //Checking to see if I grabbed the node propperly
	var newExercise = exerciseTable.cloneNode(true);

	document.body.appendChild(newExercise);

	//when added the table will slide into place
	var tableSlide = document.getElementById('workoutTable');


	//added animatino for when the new table is added
	tableSlide.className = tableSlide.className + " animated bounceInLeft";

	
}



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






// addWorkoutTable(this.form)














