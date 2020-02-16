<?php
$styles ="<style>.account{margin:20px auto;}.account-btns{padding:10px 15px;background-color:#ff8d1b;color:white}.account-btns:hover,.account-btns.active{background-color:#212121;color:white}</style>";

include_once(__DIR__. '/../../dashboard/controllers/userController.php');
include_once(__DIR__. '/../includes/header.php');
?>
<div class="container">
    <div class="row account">  
     <div class="col-xs-12 col-sm-12 col-md-8">
         <a href="<?php echo HOST; ?>/users/pages/history.php" class="btn account-btns">History</a>
         <a href="<?php echo HOST; ?>/users/pages/favorite.php" class="btn account-btns active">Favorite</a> 
       
     </div> 
  
<?php include_once(__DIR__ . '/../includes/footer.php'); ?>