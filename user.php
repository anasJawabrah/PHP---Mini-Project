<!-- <?php include('./db/projectdb.php');?> -->


<!DOCTYPE html>
<html lang="en">

<?php
// import NavBar
$title= "student";
require('templates/nav.php'); 

// import functions to render student details 
require('./functions.php');
$userId = $_GET['user_id'];
$_GET['user_id'] = $userId;

$see_more = $_GET['see_more'];
$_GET['see_more'] = $see_more;


if (isset($_GET['see_more'])) {


    $newArr = ['user_id' => $userId];

    $show=showUserPage($newArr['user_id'],$students);
    echo($show);
    

} else {
    echo "Error 404";
}

?>

<?php 
    require_once('templates/footer.php'); 
  ?>
</html>
