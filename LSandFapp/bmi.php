<?php include('header.php'); ?>
<div class="container wrapper">
  <div class="page-header">
    <div class="row">
      <div class="col-md-4">
        <img src="http://placehold.it/200x200" alt="">
      </div>
      <div class="col-md-8">
        <h1>Assessments</h1>
        <h1><small>BMI</small></h1>     
      </div>
    </div>
  </div>
  <div class="bmiForm">
   <div class="row">
    <form action="#">
     <div class="col-xs-4">
      <div class="form-group">
        <label for="heightFeet">Height (feet)</label>
         <select id="heightFeet">
          <option name="feet" value="4">4'</option>
          <option name="feet" value="5">5'</option>
          <option name="feet" value="6" selected>6'</option>
          <option name="feet" value="7">7'</option>
        </select>
      </div>
      </div>
      <div class="col-xs-4">
      <div class="form-group">
        <label for="heightInches">Height (inches)</label>
         <select id="heightInches">
          <option name="inches" value="1">1"</option>
          <option name="inches" value="2">2"</option>
          <option name="inches" value="3">3"</option>
          <option name="inches" value="4">4"</option>
          <option name="inches" value="5">5"</option>
          <option name="inches" value="6">6"</option>
          <option name="inches" value="7">7"</option>
          <option name="inches" value="8">8"</option>
          <option name="inches" value="9">9"</option>
          <option name="inches" value="10">10"</option>
          <option name="inches" value="11">11"</option>
        </select>
      </div>
      </div>
      <div class="clearfix"></div>
      <div class="col-md-8">
      <div class="form-group">
        <label for="weightInput">Weight</label>
        <input type="number" id="weight" placeholder="215 lbs" onChange="bmiCalc()">
      </div>
      </div>
    </form>
    </div>
  </div>
</div>

<?php include('footer.php'); ?>