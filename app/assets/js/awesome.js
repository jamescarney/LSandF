/******************************************************************************
BMI FORM
******************************************************************************/



/* 
	Works now for a pop up form, need to change:
	the location of where the result is outputed.
	from popup to using the form
	using parsInt to make sure nothing weird happens
 */


function bmiCalc(height, weight) {
	height = prompt("What is your height in inches?");
	weight = prompt("How much do you weigh in LBS?");

	var bmi = weight / ( height * height ) * 703;

	console.log("Your BMI is... " + bmi);
	alert("Your BMI is... " + bmi);
	document.write('Your BMI is... ' + bmi);
}

bmiCalc();