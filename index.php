<!-- <?php include('./db/projectdb.php');?> -->


<!DOCTYPE html>
<html lang="en">

<?php
$title= "Home";
require('templates/nav.php');
?>


<div class="section no-pad-bot" id="index-banner">


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <?php 
        
        foreach ($students as $student) {
          echo('
          
          <form action="user.php" method="get">
            <div class="col s12 m4">
              <div class="card center-align">
              <div class="card-image waves-effect waves-block waves-light">
                <img class="activator" src="'.$student['image'].'">
              </div>
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">'.$student["name"].'</span>
              </div>
              <input type="hidden" name="user_id" value="'.$student["id"].'">

              <input style="margin-bottom:20px;" class="waves-effect #ffb74d orange lighten-2 btn" 
              type="submit" name="see_more" value="see more">
          
              </div>

            </div>
          </form>
        
        ');
        }
        ?>

      </div>

    </div>
    <br><br>
  </div>
  
  <?php 
    require_once('templates/footer.php'); 
  ?>

  


</html>
