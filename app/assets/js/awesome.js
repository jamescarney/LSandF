/******************************************************************************
BMI FORM
******************************************************************************/



function welcomeMsg(promptMsg) {
		visitorName = prompt(promptMsg, '');
		alert("Welcome " + visitorName + "," + "\n\n" + "Your BMI is..." + "\n\n" + "Hey " + visitorName + ", don't forget to share this with your friends to see who has the best BMI!");
	}


function bmiResult(bmiWeight) {
	weight = prompt(bmiWeight, '');
	alert("Hey, your BMI is... " + weight);
}
/*

 window.alert("weight(height*height)/703");

*/

// for (var i=0; i<5; i++) {
//   console.log("Hello, %s. You've called me %d times.", "Bob", i+1);
// }