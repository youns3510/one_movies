<?php
// require_once(__DIR__ . "/../dashboard/controllers/movieController.php");

// Simple pagination script By Younes Mahmoud (:
// $countAll = countAll($q);
// $total_pages = (int) ($countAll / $record_per_page);
// $page_url = "/pages/genres.php?p=".$genres."&";
// var_dump($_SERVER);

// if total pages real number so there should we add 1 to total page 
$total_pages  = is_float(($countAll / $record_per_page)) ? $total_pages+1 : $total_pages;
// echo  'all'.countAll($q).'<br> per page'.$record_per_page.'<br>';
// echo  "total_pages = ".$total_pages ."<br> ".(countAll($q) / $record_per_page)."<br>";

$pre_2  = $page - 2 >= 1 ? $page - 2 : 0;
$pre_1  = $page - 1 >= 1 ? $page - 1 : 0;

$page   = $page;

$next_1 = $page + 1 <= $total_pages ? $page + 1 : 0;
$next_2 = $page + 2 <= $total_pages ? $page + 2 : 0;

$pre    = $pre_1;
$next   = $next_1;


// echo "pre_1  = ".$pre_1  ."<br>";
// echo "pre_2  = ".$pre_2  ."<br>";
// echo "page   = ".$page   ."<br>";
// echo "next_1 = ".$next_1 ."<br>";
// echo "next_2 = ".$next_2 ."<br>";
// echo "pre    = ".$pre   ."<br>"; 
// echo "next   = ".$next  ."<br>"; 

?>

<div class="blog-pagenat-wthree">
  <ul>

    <?php
    echo $pre != 0 ? '<li><a class="frist"    href="' . $page_url . 'page=' . $pre . '">Previous</a></li>' : "";
    echo $pre_2 != 0 ? '<li><a   href="' . $page_url . 'page=' . $pre_2 . '">' . $pre_2 . '</a></li>' : "";
    echo $pre_1 != 0 ? '<li><a   href="' . $page_url . 'page=' . $pre_1 . '">' . $pre_1 . '</a></li>' : '';

    echo '<li><a class="active"    href="' . $page_url . 'page=' . $page . '">' . $page . '</a></li>';

    echo $next_1 != 0 ? '<li><a  href="' . $page_url . 'page=' . $next_1 . '">' . $next_1 . '</a></li>' : "";
    echo $next_2 != 0 ? '<li><a  href="' . $page_url . 'page=' . $next_2 . '">' . $next_2 . '</a></li>' : '';
    echo $next != 0 ? '<li><a  class="last"  href="' . $page_url . 'page=' . $next . '">Next</a></li>' : '';
    ?>
  </ul>
</div>







<?php





// echo $total_pages;
// $display =3;
// // $next_page = $page < $total_pages ? $page ++ :0;
// // $pre_page = $page > 1 ? $page -- : 0;

// $total_pages= 20;
// for ($page0 = 1; $page0 <= $total_pages ; $page0++) { 


// $pre_2  = $page0 - 2 >= 1 ? $page0 - 2 : 0;
// $pre_1  = $page0 - 1 >= 1 ? $page0 - 1 : 0;
// $page0  = $page0;
// $next_1 = $page0 + 1 <= $total_pages  ? $page0 + 1:0;
// $next_2 = $page0 + 2 <= $total_pages ? $page0 + 2 :0;


// echo "
// pre_2  ={$pre_2 }<br>
// pre_1  ={$pre_1 }<br>
// page   ={$page  }<br>
// next_1 ={$next_1}<br>
// next_2 ={$next_2}<br>
// pre  ={$pre }<br>
// next ={$next}<br>

// ========================================<br>" ;

// }
