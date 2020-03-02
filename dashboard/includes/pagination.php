<?php
// require_once(__DIR__ . "/../dashboard/controllers/movieController.php");
// include(__DIR__ . "/config_paging.php");
// Simple pagination script By Younes Mahmoud (:
// $countAll = countAll($q);
// $total_pages = (int) ($countAll / $record_per_page);
// $page_url = "/pages/genres.php?g=".$genres."&";
// var_dump($_SERVER);
if (isset($char) && !empty($char)) {
  $total_pages = is_float(($countAll / $record_per_page)) ? ${'total_pages_' . $char} + 1 : ${'total_pages_' . $char};
  $page_url .= $char . '_page=';
} else {
  $total_pages = is_float(($countAll / $record_per_page)) ? $total_pages + 1 : $total_pages;
  $page_url = $page_url . 'page=';
}
// if total pages real number so there should we add 1 to total page 

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


<nav class="d-flex justify-content-center mt-5 mb-5">
  <ul class="pagination">
    <?php
    echo $pre != 0 ? '<li class="page-item"><a class="page-link"   href="' . $page_url   . $pre . '">Previous</a></li>' : "";
    echo $pre_2 != 0 ? '<li class="page-item"><a class="page-link"   href="' . $page_url   . $pre_2 . '">' . $pre_2 . '</a></li>' : "";
    echo $pre_1 != 0 ? '<li class="page-item"><a class="page-link"   href="' . $page_url   . $pre_1 . '">' . $pre_1 . '</a></li>' : '';

    echo '<li class="page-item active">  <a  class="page-link"   href="' . $page_url   . $page . '">' . $page . '<span class="sr-only">(current)</span></a></li>';

    echo $next_1 != 0 ? '<li class="page-item"><a class="page-link"  href="' . $page_url   . $next_1 . '">' . $next_1 . '</a></li>' : "";
    echo $next_2 != 0 ? '<li class="page-item"><a  class="page-link" href="' . $page_url   . $next_2 . '">' . $next_2 . '</a></li>' : '';
    echo $next != 0 ? '<li class="page-item">  <a  class="page-link" href="' . $page_url   . $next . '">Next</a></li>' : '';
    ?>
  </ul>
</nav>
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
