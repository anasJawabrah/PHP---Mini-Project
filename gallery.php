<!-- <?php include('./db/projectdb.php');?> -->


<!DOCTYPE html>
<html lang="en">

<?php
// import NavBar
$title= "attendance";
require('templates/nav.php'); 

// https://source.unsplash.com/random
?>


<?php 
// for gallery display grid
echo('<div class="container ">
<h1>OCA Gallery</h1>


');
for ($i=1; $i <= 10; $i++) { 
    $gallery='
    <div class="row card">
        <div class="col s12 m6 l6">
        <img  height="500em" width="500em"  src="https://source.unsplash.com/random/'.$i.'">
        </div>
        <div class="col s1 m6 l6">
        <img height="500em" width="500em"     src="https://source.unsplash.com/random/'.($i+10).'">
        </div>
    </div>';
   
    echo($gallery);
}
echo('</div>');

// https://images.unsplash.com/photo-1609768760913-575ecb5cc586?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max

// https://images.unsplash.com/photo-1610439170853-aee8b29c521c?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max

?>

<?php 
    require_once('templates/footer.php'); 
  ?>
</html>
