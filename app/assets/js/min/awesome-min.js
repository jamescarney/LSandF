function bmiCalc(e,t){heightFeet=document.getElementById("heightFeet").value,heightInches=document.getElementById("heightInches").value,e=parseFloat(heightFeet)+parseFloat(heightInches),t=document.getElementById("weight").value,console.log("Your height is "+e+" inches. \n\n Your weight is "+t+" lbs.");var o=t/(e*e)*703;alert("Your BMI is... "+o);var n=document.createElement("div"),h=document.createTextNode("BMI: "+o);n.appendChild(h);var a=document.getElementById("bmiResults");return console.log("end program")}function addWorkoutTable(e){console.log("Begin function"),e=document.getElementById("workoutInput").value;var t=document.getElementById("workoutTable");console.log(t);var o=t.cloneNode(!0);document.body.appendChild(o);var n=document.getElementById("workoutTable");n.className=n.className+" animated bounceInLeft"}function addSet(){alert("Added another set!"),console.log("Add another row to the table")}function subtractSet(){alert("Took off a set!"),console.log("Take off a row from the table.")}var workoutName,heightFeet,heightInches,height,weight;heightFeet=document.getElementById("heightFeet").value,heightInches=document.getElementById("heightInches").value,height=12*heightFeet+heightInches;