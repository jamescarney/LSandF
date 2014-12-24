<?php include('header.php'); ?>
  <div class="container wrapper">
    <div class="page-header">
      <div class="row">
        <div class="col-md-4">
          <img src="http://placehold.it/200x200" alt="">
        </div>
        <div class="col-md-8">
          <h1>Arm Workout</h1>
          <h1><small>Monday</small></h1>     
        </div>
      </div>
    </div>
    <!-- /pageheader -->
    <div class="workout">
      <div class="workoutForm">
        <form action="">
          <input type="text" id="workoutInput" placeholder="Workout Name"><br>
          <button type="button" class="btn btn-primary">Add Workout</button>
        </form>
      </div>
      <div class="workoutTable main-workout">
        <table id="workoutTable" class="table table-striped table-hover animated bounceInLeft">
          <caption class="text-center tableCaption"><span id="workoutTableCaption">Deadlift</span> <a href="#" onClick="addSet()"><span class="glyphicon glyphicon-plus"></span></a><a href="#" onClick="subtractSet()"><span class="glyphicon glyphicon-minus"></span></a></caption>
         <thead>
           <tr>
             <th>Set</th>
             <th>Reps</th>
             <th>Weight</th>
           </tr>
         </thead>
         <tbody id="tableOne">
            <tr>
              <td>1</td>
              <td><input type="number"></td>
              <td><input type="number"></td>
            </tr>
            <tr>
              <td>2</td>
              <td><input type="number"></td>
              <td><input type="number"></td>
            </tr>
            <tr id="lastRow">
              <td>3</td>
              <td><input type="number"></td>
              <td><input type="number"></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- /wrapper -->
<?php include('footer.php'); ?>