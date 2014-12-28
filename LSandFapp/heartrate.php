<?php include('header.php'); ?>

<div class="wrapper container">
  <div class="row">
   <div class="col-md-8">
    <h1>Find your Heart Rate</h1>
    <h2>Steps</h2>
    <h3>1. Find your Pulse</h3>
    <div class="embed-responsive embed-responsive-16by9">
      <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/D2V8afuY9-g"></iframe>
    </div>
    <div class="timer" id="timer">
      <h3>2. Time It</h3>
      <div class="countdown">
       <p class="lead">Select Time:</p>
        <div class="selectTime">
          <select name="selectTimeDropdown" id="selectTime">
            <option value=""></option>
            <option value="30">30 Seconds</option>
            <option value="45">45 Secodns</option>
            <option value="60">1 Minute</option>
          </select>
        </div>
        <div class="counter">
          <span id="minCounter">00</span>:
          <span id="secCounter">00</span>
          <span>Seconds</span><br>
          <input type="button" value="Start" id="counterStart">
          <input type="button" value="Reset" id="counterReset">
        </div>
      </div>
    </div>
  </div>
  </div>
  
</div>

<?php include('footer.php'); ?>