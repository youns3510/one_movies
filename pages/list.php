<?php
$page_title = "List A-Z Movies";
$active_list_a_z ="active";
include('../partials/header.php');
require_once(__DIR__ . "/../dashboard/controllers/movieController.php");

?>

<div class="faq">
    <h4 class="latest-text w3_faq_latest_text w3_latest_text">Movies List</h4>
    <div class="container">
        <div class="agileits-news-top">
            <ol class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li class="active">List</li>
            </ol>
        </div>
        <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
            <ul id="myTab" class="nav nav-tabs" role="tablist">
                <?php
                // create active or not  for class  and true or false for aria of each char
                $ch = isset($_GET['char']) && !empty($_GET['char'])?$_GET['char']:'a';

                foreach (range('a', 'z') as $char) {
                    if($ch == $char){
                        ${"aria_".$char} = true;//create dynamice variable like $aria_a,$aria_b,$aria_c....
                        ${"active_".$char} ="active";
                    }else{
                        ${"aria_".$char} = false;
                        ${"active_".$char} ='';
                    }
//                    echo   ${"aria_".$char};
// echo "<br>". ${"active_".$char}. "<br>" ;
                    // $aria = ($char == 'a') ? true : false;
                    // $active = ($char == 'a') ? ' class="active"' : '';



                    echo '<li role="presentation"  class="' . ${"active_".$char}. '"><a href="#' . $char . '" role="tab" id="' . $char . '-tab" data-toggle="tab" aria-controls="' . $char . '" aria-expanded="' . ${"aria_".$char} . '">' . strtoupper($char) . '</a></li>';
                }
                ?>

            </ul>
            <div id="myTabContent" class="tab-content">
                <?php
                // get data for each char and determine if active or not
                foreach (range('a', 'z') as $char) {
                    get_data($char,${"active_".$char});
                }
                
                ?>

            </div>
        </div>
    </div>
</div>
<!-- //faq-banner -->
<?php include('../partials/footer.php'); ?>