/******************************************************************************
Lets get it on
******************************************************************************/




var heightFeet; //Height when put into BMI tracker or basic info tracker
var heightInches; //Height when put into BMI tracker or basic info tracker
var height; //Height in inches from
var weight; //Weight when put into BMI tracker or basic info tracker
var workoutCaption; //Name of workout when someone adds an exercise 



// workoutName = document.workoutFormName.value;




/******************************************************************************
Profile Page
******************************************************************************/




$('.edit-btn').click(function(){
  console.log('Begin Function');
  var statList = $('.statList');
  console.log(statList);
  var statListBullets = $('ul.statList .stat');
  console.log(statListBullets);
  statListBullets.replaceWith('<input type="text">').toggle();
  
  console.log('End Function');  
});



/******************************************************************************
BMI Calc
******************************************************************************/



function bmiCalc(height, weight) {
  
  console.log("begin function");  



	// get the height and weight values from the form
	heightFeet = $('#heightFeet').val();
	heightInches = $('#heightInches').val();

	height = parseFloat(heightFeet) * 12 +  parseFloat(heightInches);
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
	
	console.log('end program');
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

$('#workoutInput').change(function(){
  console.log('Begin Function');
  
  //Get the name of the workout being called
  var workoutName = $('#workoutInput').val();
  if(workoutName === '') {
    alert("Input Something");
  } else {
  console.log(workoutName);
  //Add a new table
    //Append to end of the group of tables and make it have the workoutName in the caption
  var newTable = $('.main-workout').append('<table class="table table-striped table-hover animated bounceInLeft"><caption class="text-center tableCaption"><span id="workoutTableCaption">' + workoutName +'</span> <a href="#" class="addSet"><span class="glyphicon glyphicon-plus"></span></a><a href="#" onClick="subtractSet()"><span class="glyphicon glyphicon-minus"></span></a></caption><thead><tr><th>Set</th><th>Reps</th><th>Weight</th></tr></thead><tbody id="tableOne"><tr><td>1</td><td><input type="number"></td><td><input type="number"></td></tr><tr><td>2</td><td><input type="number"></td><td><input type="number"></td></tr><tr id="lastRow"><td>3</td><td><input type="number"></td><td><input type="number"></td></tr></tbody></table>');
  newTable.addClass('.table');
  
  console.log('End Function');
  }
});

//Works, but doesn't look like the classes are carrying over from the previous table. Classes for the plus and minus is what I am talking about.




/**************************************
Add workout sets to a table
**************************************/
//Not functional yet. Need to would on this later
$('.addSet').click(function() {
  console.log('begin');
//  get the amount of tr there are and then add one
  
  var setNumber = $('tbody').children().length + 1;
//  Add another set
  $('tbody').append('<tr id="lastRow"><td>' + setNumber + '</td><td><input type="number"></td><td><input type="number"></td></tr>');
//  Change the set number to the last one there
  console.log('end');
});

$('#subtractSet').click(function() {
  console.log('begin');
  
  //$('tbody').remove(//last tr);
  
  console.log('end');
});



/******************************************************************************
Timer
******************************************************************************/

//Select a time and then have the timer show that time
//When start is clicked, start the count down

$('#selectTime').change(function(){
  console.log('Begin Function');
  var minPlaceHolder = $('#minCounter').val();
  var secPlaceHolder = $('#secCounter');
  if($(this).val() == 30){
    console.log('30 was selected');
  } else if($(this).val() == 45 ){
    console.log('45 was selected');
  } else if($(this).val() == 60){
    console.log('1 min was selected');
  } else {
    console.error('Try again, nothing selected');
  }
  
  console.log('End Function');
});















