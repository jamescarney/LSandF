/******************************************************************************
Lets get it on
******************************************************************************/



var workoutName; //Name of workout when added to workout tracker
var heightFeet; //Height when put into BMI tracker or basic info tracker
var heightInches; //Height when put into BMI tracker or basic info tracker
var height; //Height in inches from
var weight; //Weight when put into BMI tracker or basic info tracker
var workoutCaption; //Name of workout when someone adds an exercise 


heightFeet = document.getElementById('heightFeet').value;
heightInches = document.getElementById('heightInches').value;

height = heightFeet * 12 + heightInches;
// workoutName = document.workoutFormName.value;


/******************************************************************************
BMI Calc
******************************************************************************/




function bmiCalc(height, weight) {

	// get the height and weight values from the form
	heightFeet = $('#heightFeet').val();
	heightInches = $('#heightInches').val();

	height = parseFloat(heightFeet) +  parseFloat(heightInches);
	weight = $('#weight').val();


	console.log("Your height is " + height + " inches. \nYour weight is " + weight + " lbs.");
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
/*
added table to workout.html after click
Need to change the caption to workoutName
Can get the caption, but it changing only the original table, not the one that
has been cloned
*/


function addWorkoutTable(workoutName) {

  console.log("Begin function");

  //Get name of workout from workoutform
  workoutName = $('#workoutInput').val();
  console.log(workoutName); //Works

  //Get the .main-workout to append the new table at the end of a table
  var mainWorkoutSection = $('#workoutTable');	
  console.log(mainWorkoutSection); //Works //This is the table I want to copy.
//  change the name beofre I append it maybe?

  //Declare where you want to put this new table
  var exerciseTable = $('#workoutTable');
  //Give new table a nother id so you can track it with a different id if you need to.
  
  exerciseTable.addClass( 'addedTable'); //Used to help identify later workouts
  mainWorkoutSection.clone().appendTo('.main-workout'); //works
  

  //Add a class to the cloned table and then use that new id/class to change thecaption






  //Get the name of the workout and change the caption of it.
  var workoutCaption = $("#workoutTableCaption").text();
  console.log(workoutCaption); //Need to append the workout name value to the caption
  $('#workoutTableCaption').text(workoutName); //Works, but on the first one only.
  //Need this to change the one that just dropped, not the original one.
  
  
  //Change the naming scheme where it will only change the name of the one beneath it.







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


function forLoop() {
  console.log("Begin Function");
  
for ( var x = 0; x < 10; x++) {
    console.log("workoutTable" + x);
  }
}

if (e > 0 ) {
  
}
  






// addWorkoutTable(this.form)














