/******************************************************************************
Lets get it on
******************************************************************************/



var workoutName; //Name of workout when added to workout tracker
var heightFeet; //Height when put into BMI tracker or basic info tracker
var heightInches; //Height when put into BMI tracker or basic info tracker
var height; //Height in inches from
var weight; //Weight when put into BMI tracker or basic info tracker
var workoutCaption; //Name of workout when someone adds an exercise 


heightFeet= document.getElementById('heightFeet').value;
heightInches = document.getElementById('heightInches').value;

height = heightFeet * 12 + heightInches;
// workoutName = document.workoutFormName.value;


/******************************************************************************
BMI Calc
******************************************************************************/




function bmiCalc(height, weight) {

	// get the height and weight values from the form
	heightFeet= $('#heightFeet').val();
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
//Need to change the caption to workoutName


// Use this to change the name of the caption
// //Get
// var bla = $('#txt_name').val();

// //Set
// $('#txt_name').val('bla');
// All I need to do is get the workoutName, and then change the value of the caption


function addWorkoutTable(workoutName) {

	console.log("Begin function");
	

	//Get name of workout from workoutform
	workoutName = $('#workoutInput').val();
	console.log(workoutName); //Works

	//Get the workout table and append it to #main-workout, then clone it beneath	
	//Get the .main-workout to append the new table at the end of a table
	var mainWorkoutSection = $('#workoutTable');	
	console.log(mainWorkoutSection); //Works //This is the table I want to copy.

	//Declare where you want to put this new table
	var exerciseTable = $('#workoutTable');
	mainWorkoutSection.clone().appendTo('.main-workout'); //works



	//Get the name of the workout and change the caption of it.
	var workoutCaption = $("#workoutTableCaption").val();
	console.log(workoutCaption); //Need to append the workout name value to the caption
	$('#workoutTableCaption').val(workoutName);








	//when added the table will slide into place
	var tableSlide = $('#workoutTable');

	//added animatino for when the new table is added
	tableSlide.className = tableSlide.className + " animated bounceInLeft";

}



/**************************************
Add workout sets to a table
**************************************/
//Not functional yet. Need to would on this later
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














