<!-- <?php include('./db/projectdb.php');?> -->


<!DOCTYPE html>
<html lang="en">

<?php
// import NavBar
$title= "attendance";
require('templates/nav.php'); 

require('./functions.php');
echo('<div class="container ">
<h1>Students Progress </h1>
');echo(showDashboard($students));
echo("</div>");
?>

<?php 
    require_once('templates/footer.php'); 
  ?>
</html>
