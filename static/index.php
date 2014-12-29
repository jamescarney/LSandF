<?php include('inc/header.php'); ?>
    
    <div class="jumbotron">
     <h1>Sign Up for latest Tricks and Tips</h1>
     <p>Get fitness tips, nutrition tips and a lot more. I'm just too tired to care right now.</p>
      <!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        <form action="">
          <label for="email"><input type="email" placeholder="Email">Email</label>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>
    </div><!-- /row -->

    <div class="wrapper">
      <div class="row featured" data-equalizer>
        <div class="featured-widget col-lg-4 column text-center" data-equalizer-watch>
          <img src="img/fat-baby.jpg" alt="Something about weight loss">
          <h2>Lose Weight</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod nihil culpa sed ipsum vitae odio at rerum. Debitis assumenda porro harum accusantium ratione neque cupiditate, quam magnam eum, animi quis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet magni </p>
          <a href="lose-weight.html" class="btn btn-success success">Find out more information here!</a>
        </div>
        <div class="featured-widget col-lg-4 column text-center" data-equalizer-watch>
          <img src="img/celebrating.jpg" alt="Something Else">
          <h2>Build Muscle</h2>
          <p>Have you ever been working out trying to build muscles, but for some reason those months of pain, sweat and tears haven't turned into rock hard muscles? Well good news! It isn't your fault, you've done the work but just the wrong type of work. Let us help by teaching you what to do and <em>why</em>!</p>
          <a href="lose-weight.html" class="btn btn-success success">Find out more information here!</a>
        </div>
        <div class="featured-widget col-lg-4 column text-center" data-equalizer-watch>
          <img src="img/omelet.jpg" alt="Something Else">
          <h2>Nutrition</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod nihil culpa sed ipsum vitae odio at rerum. Debitis assumenda porro harum accusantium ratione neque cupiditate, quam magnam eum, animi quis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet magni </p>
          <a href="lose-weight.html" class="btn btn-success success">Find out more information here!</a>
        </div> 
      </div>
      </div><!-- /.container -->

      <?php include('inc/footer.php'); ?>