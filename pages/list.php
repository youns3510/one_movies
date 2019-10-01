<?php include('../partials/header.php'); ?>
    <div class="general_social_icons">
        <nav class="social">
            <ul>
                <li class="w3_twitter"><a href="#">Twitter <i class="fa fa-twitter"></i></a></li>
                <li class="w3_facebook"><a href="#">Facebook <i class="fa fa-facebook"></i></a></li>
                <li class="w3_dribbble"><a href="#">Dribbble <i class="fa fa-dribbble"></i></a></li>
                <li class="w3_g_plus"><a href="#">Google+ <i class="fa fa-google-plus"></i></a></li>
            </ul>
        </nav>
    </div>
    <!-- faq-banner -->
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
                    <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab"
                                                              aria-controls="home" aria-expanded="true">0 - 9</a></li>
                    <li role="presentation"><a href="#a" role="tab" id="a-tab" data-toggle="tab" aria-controls="a">A</a>
                    </li>
                    <li role="presentation"><a href="#b" role="tab" id="b-tab" data-toggle="tab" aria-controls="b">B</a>
                    </li>
                    <li role="presentation"><a href="#c" role="tab" id="c-tab" data-toggle="tab" aria-controls="c">C</a>
                    </li>
                    <li role="presentation"><a href="#d" role="tab" id="d-tab" data-toggle="tab" aria-controls="d">D</a>
                    </li>
                    <li role="presentation"><a href="#e" role="tab" id="e-tab" data-toggle="tab" aria-controls="e">E</a>
                    </li>
                    <li role="presentation"><a href="#f" role="tab" id="f-tab" data-toggle="tab" aria-controls="f">F</a>
                    </li>
                    <li role="presentation"><a href="#g" role="tab" id="g-tab" data-toggle="tab" aria-controls="g">G</a>
                    </li>
                    <li role="presentation"><a href="#h" role="tab" id="h-tab" data-toggle="tab" aria-controls="h">H</a>
                    </li>
                    <li role="presentation"><a href="#i" role="tab" id="i-tab" data-toggle="tab" aria-controls="i">I</a>
                    </li>
                    <li role="presentation"><a href="#j" role="tab" id="j-tab" data-toggle="tab" aria-controls="j">J</a>
                    </li>
                    <li role="presentation"><a href="#k" role="tab" id="k-tab" data-toggle="tab" aria-controls="k">K</a>
                    </li>
                    <li role="presentation"><a href="#l" role="tab" id="l-tab" data-toggle="tab" aria-controls="l">L</a>
                    </li>
                    <li role="presentation"><a href="#m" role="tab" id="m-tab" data-toggle="tab" aria-controls="m">M</a>
                    </li>
                    <li role="presentation"><a href="#n" role="tab" id="n-tab" data-toggle="tab" aria-controls="n">N</a>
                    </li>
                    <li role="presentation"><a href="#o" role="tab" id="o-tab" data-toggle="tab" aria-controls="o">O</a>
                    </li>
                    <li role="presentation"><a href="#p" role="tab" id="p-tab" data-toggle="tab" aria-controls="p">P</a>
                    </li>
                    <li role="presentation"><a href="#q" role="tab" id="q-tab" data-toggle="tab" aria-controls="q">Q</a>
                    </li>
                    <li role="presentation"><a href="#r" role="tab" id="r-tab" data-toggle="tab" aria-controls="r">R</a>
                    </li>
                    <li role="presentation"><a href="#s" role="tab" id="s-tab" data-toggle="tab" aria-controls="s">S</a>
                    </li>
                    <li role="presentation"><a href="#t" role="tab" id="t-tab" data-toggle="tab" aria-controls="t">T</a>
                    </li>
                    <li role="presentation"><a href="#u" role="tab" id="u-tab" data-toggle="tab" aria-controls="u">U</a>
                    </li>
                    <li role="presentation"><a href="#v" role="tab" id="v-tab" data-toggle="tab" aria-controls="v">V</a>
                    </li>
                    <li role="presentation"><a href="#w" role="tab" id="w-tab" data-toggle="tab" aria-controls="w">W</a>
                    </li>
                    <li role="presentation"><a href="#x" role="tab" id="x-tab" data-toggle="tab" aria-controls="x">X</a>
                    </li>
                    <li role="presentation"><a href="#y" role="tab" id="y-tab" data-toggle="tab" aria-controls="y">Y</a>
                    </li>
                    <li role="presentation"><a href="#z" role="tab" id="z-tab" data-toggle="tab" aria-controls="z">Z</a>
                    </li>
                </ul>
                <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                        <div class="agile-news-table">
                            <div class="w3ls-news-result">
                                <h4>Search Results : <span>25</span></h4>
                            </div>
                            <table id="table-breakpoint">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Movie Name</th>
                                    <th>Year</th>
                                    <th>Status</th>
                                    <th>Country</th>
                                    <th>Genre</th>
                                    <th>Rating</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n1.jpg" alt=""/> <span>01 Ben-Hur</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/comedy.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n2.jpg" alt=""/> <span>001 Southside with you</span></a>
                                    </td>
                                    <td>2011</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Korea</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Drama</a>
                                    </td>
                                    <td>7.5</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n11.jpg" alt=""/> <span>12 Bad Moms</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>SD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/comedy.php">Comedy</a>
                                    </td>
                                    <td>6.5</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n3.jpg" alt=""/> <span>2 Sausage Party</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/comedy.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n4.jpg" alt=""/> <span>2.0 Morgan</span></a>
                                    </td>
                                    <td>2014</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            States</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Action</a>
                                    </td>
                                    <td>7.1</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n5.jpg" alt=""/>
                                            <span>24</span></a></td>
                                    <td>2016</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">India</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Drama</a></td>
                                    <td>9.0</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n6.jpg" alt=""/> <span>001 The Secret Life of Pets</span></a>
                                    </td>
                                    <td>2012</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Euro,
                                            France</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Crime, Drama</a></td>
                                    <td>8.2</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n7.jpg" alt=""/> <span>12 Hell or High Water</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">China</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/comedy.php">Comedy</a>
                                    </td>
                                    <td>8.9</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n8.jpg" alt=""/> <span>2 Central Intelligence</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/comedy.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n9.jpg" alt=""/> <span>3 The Jungle Book</span></a>
                                    </td>
                                    <td>2014</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Japan</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Action</a>
                                    </td>
                                    <td>7.1</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n10.jpg" alt=""/> <span>01 Independence Day</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/comedy.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n1.jpg" alt=""/> <span>01 Ben-Hur</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/comedy.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n2.jpg" alt=""/> <span>001 Southside with you</span></a>
                                    </td>
                                    <td>2011</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Korea</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Drama</a>
                                    </td>
                                    <td>7.5</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n11.jpg" alt=""/> <span>12 Bad Moms</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>SD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/comedy.php">Comedy</a>
                                    </td>
                                    <td>6.5</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n3.jpg" alt=""/> <span>2 Sausage Party</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/comedy.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n4.jpg" alt=""/> <span>2.0 Morgan</span></a>
                                    </td>
                                    <td>2014</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            States</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/horror.php">Horror</a>
                                    </td>
                                    <td>7.1</td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n5.jpg" alt=""/>
                                            <span>24</span></a></td>
                                    <td>2016</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">India</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Drama</a></td>
                                    <td>9.0</td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n6.jpg" alt=""/> <span>001 The Secret Life of Pets</span></a>
                                    </td>
                                    <td>2012</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Euro,
                                            France</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Crime, Drama</a></td>
                                    <td>8.2</td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n7.jpg" alt=""/> <span>12 Hell or High Water</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">China</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/comedy.php">Comedy</a>
                                    </td>
                                    <td>8.9</td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n8.jpg" alt=""/> <span>2 Central Intelligence</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/comedy.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>21</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n9.jpg" alt=""/> <span>3 The Jungle Book</span></a>
                                    </td>
                                    <td>2014</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Japan</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Action</a>
                                    </td>
                                    <td>7.1</td>
                                </tr>
                                <tr>
                                    <td>22</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n10.jpg" alt=""/> <span>01 Independence Day</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/comedy.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>23</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n1.jpg" alt=""/> <span>01 Ben-Hur</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/comedy.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>24</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n2.jpg" alt=""/> <span>001 Southside with you</span></a>
                                    </td>
                                    <td>2011</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Korea</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Drama</a>
                                    </td>
                                    <td>7.5</td>
                                </tr>
                                <tr>
                                    <td>25</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n11.jpg" alt=""/> <span>12 Bad Moms</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>SD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/comedy.php">Comedy</a>
                                    </td>
                                    <td>6.5</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="a" aria-labelledby="a-tab">
                        <div class="agile-news-table">
                            <div class="w3ls-news-result">
                                <h4>Search Results : <span>17</span></h4>
                            </div>
                            <table id="table-breakpoint1">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Movie Name</th>
                                    <th>Year</th>
                                    <th>Status</th>
                                    <th>Country</th>
                                    <th>Genre</th>
                                    <th>Rating</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n3.jpg" alt=""/> <span>2 Sausage Party</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n4.jpg" alt=""/> <span>2.0 Morgan</span></a>
                                    </td>
                                    <td>2014</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            States</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Action</a>
                                    </td>
                                    <td>7.1</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n5.jpg" alt=""/>
                                            <span>24</span></a></td>
                                    <td>2016</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">India</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Drama</a></td>
                                    <td>9.0</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n6.jpg" alt=""/> <span>001 The Secret Life of Pets</span></a>
                                    </td>
                                    <td>2012</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Euro,
                                            France</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Crime, Drama</a></td>
                                    <td>8.2</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n7.jpg" alt=""/> <span>12 Hell or High Water</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">China</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>8.9</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n8.jpg" alt=""/> <span>2 Central Intelligence</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n9.jpg" alt=""/> <span>3 The Jungle Book</span></a>
                                    </td>
                                    <td>2014</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Japan</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Action</a>
                                    </td>
                                    <td>7.1</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n10.jpg" alt=""/> <span>01 Independence Day</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n1.jpg" alt=""/> <span>01 Ben-Hur</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n2.jpg" alt=""/> <span>001 Southside with you</span></a>
                                    </td>
                                    <td>2011</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Korea</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Drama</a>
                                    </td>
                                    <td>7.5</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n11.jpg" alt=""/> <span>12 Bad Moms</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>SD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>6.5</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n3.jpg" alt=""/> <span>2 Sausage Party</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n4.jpg" alt=""/> <span>2.0 Morgan</span></a>
                                    </td>
                                    <td>2014</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            States</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Action</a>
                                    </td>
                                    <td>7.1</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n5.jpg" alt=""/>
                                            <span>24</span></a></td>
                                    <td>2016</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">India</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Drama</a></td>
                                    <td>9.0</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n6.jpg" alt=""/> <span>001 The Secret Life of Pets</span></a>
                                    </td>
                                    <td>2012</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Euro,
                                            France</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Crime, Drama</a></td>
                                    <td>8.2</td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n7.jpg" alt=""/> <span>12 Hell or High Water</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">China</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>8.9</td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n8.jpg" alt=""/> <span>2 Central Intelligence</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="b" aria-labelledby="b-tab">
                        <div class="agile-news-table">
                            <div class="w3ls-news-result">
                                <h4>Search Results : <span>12</span></h4>
                            </div>
                            <table id="table-breakpoint2">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Movie Name</th>
                                    <th>Year</th>
                                    <th>Status</th>
                                    <th>Country</th>
                                    <th>Genre</th>
                                    <th>Rating</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n1.jpg" alt=""/> <span>01 Ben-Hur</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n2.jpg" alt=""/> <span>001 Southside with you</span></a>
                                    </td>
                                    <td>2011</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Korea</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Drama</a>
                                    </td>
                                    <td>7.5</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n11.jpg" alt=""/> <span>12 Bad Moms</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>SD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>6.5</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n3.jpg" alt=""/> <span>2 Sausage Party</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n4.jpg" alt=""/> <span>2.0 Morgan</span></a>
                                    </td>
                                    <td>2014</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            States</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Action</a>
                                    </td>
                                    <td>7.1</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n5.jpg" alt=""/>
                                            <span>24</span></a></td>
                                    <td>2016</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">India</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Drama</a></td>
                                    <td>9.0</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n6.jpg" alt=""/> <span>001 The Secret Life of Pets</span></a>
                                    </td>
                                    <td>2012</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Euro,
                                            France</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Crime, Drama</a></td>
                                    <td>8.2</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n7.jpg" alt=""/> <span>12 Hell or High Water</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">China</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>8.9</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n8.jpg" alt=""/> <span>2 Central Intelligence</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n9.jpg" alt=""/> <span>3 The Jungle Book</span></a>
                                    </td>
                                    <td>2014</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Japan</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Action</a>
                                    </td>
                                    <td>7.1</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n10.jpg" alt=""/> <span>01 Independence Day</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n1.jpg" alt=""/> <span>01 Ben-Hur</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="c" aria-labelledby="c-tab">
                        <div class="agile-news-table">
                            <div class="w3ls-news-result">
                                <h4>Search Results : <span>15</span></h4>
                            </div>
                            <table id="table-breakpoint3">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Movie Name</th>
                                    <th>Year</th>
                                    <th>Status</th>
                                    <th>Country</th>
                                    <th>Genre</th>
                                    <th>Rating</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n10.jpg" alt=""/> <span>01 Independence Day</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n1.jpg" alt=""/> <span>01 Ben-Hur</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n2.jpg" alt=""/> <span>001 Southside with you</span></a>
                                    </td>
                                    <td>2011</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Korea</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Drama</a>
                                    </td>
                                    <td>7.5</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n11.jpg" alt=""/> <span>12 Bad Moms</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>SD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>6.5</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n3.jpg" alt=""/> <span>2 Sausage Party</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n4.jpg" alt=""/> <span>2.0 Morgan</span></a>
                                    </td>
                                    <td>2014</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            States</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Action</a>
                                    </td>
                                    <td>7.1</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n5.jpg" alt=""/>
                                            <span>24</span></a></td>
                                    <td>2016</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">India</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Drama</a></td>
                                    <td>9.0</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n6.jpg" alt=""/> <span>001 The Secret Life of Pets</span></a>
                                    </td>
                                    <td>2012</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Euro,
                                            France</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Crime, Drama</a></td>
                                    <td>8.2</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n7.jpg" alt=""/> <span>12 Hell or High Water</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">China</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>8.9</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n8.jpg" alt=""/> <span>2 Central Intelligence</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n9.jpg" alt=""/> <span>3 The Jungle Book</span></a>
                                    </td>
                                    <td>2014</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Japan</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Action</a>
                                    </td>
                                    <td>7.1</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n10.jpg" alt=""/> <span>01 Independence Day</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n1.jpg" alt=""/> <span>01 Ben-Hur</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n2.jpg" alt=""/> <span>001 Southside with you</span></a>
                                    </td>
                                    <td>2011</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Korea</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Drama</a>
                                    </td>
                                    <td>7.5</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n11.jpg" alt=""/> <span>12 Bad Moms</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>SD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>6.5</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="d" aria-labelledby="d-tab">
                        <div class="agile-news-table">
                            <div class="w3ls-news-result">
                                <h4>Search Results : <span>16</span></h4>
                            </div>
                            <table id="table-breakpoint4">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Movie Name</th>
                                    <th>Year</th>
                                    <th>Status</th>
                                    <th>Country</th>
                                    <th>Genre</th>
                                    <th>Rating</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n11.jpg" alt=""/> <span>12 Bad Moms</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>SD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>6.5</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n3.jpg" alt=""/> <span>2 Sausage Party</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n4.jpg" alt=""/> <span>2.0 Morgan</span></a>
                                    </td>
                                    <td>2014</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            States</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Action</a>
                                    </td>
                                    <td>7.1</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n5.jpg" alt=""/>
                                            <span>24</span></a></td>
                                    <td>2016</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">India</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Drama</a></td>
                                    <td>9.0</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n6.jpg" alt=""/> <span>001 The Secret Life of Pets</span></a>
                                    </td>
                                    <td>2012</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Euro,
                                            France</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Crime, Drama</a></td>
                                    <td>8.2</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n7.jpg" alt=""/> <span>12 Hell or High Water</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">China</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>8.9</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n8.jpg" alt=""/> <span>2 Central Intelligence</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n9.jpg" alt=""/> <span>3 The Jungle Book</span></a>
                                    </td>
                                    <td>2014</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Japan</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Action</a>
                                    </td>
                                    <td>7.1</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n10.jpg" alt=""/> <span>01 Independence Day</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n1.jpg" alt=""/> <span>01 Ben-Hur</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n2.jpg" alt=""/> <span>001 Southside with you</span></a>
                                    </td>
                                    <td>2011</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Korea</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Drama</a>
                                    </td>
                                    <td>7.5</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n11.jpg" alt=""/> <span>12 Bad Moms</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>SD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>6.5</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n3.jpg" alt=""/> <span>2 Sausage Party</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n4.jpg" alt=""/> <span>2.0 Morgan</span></a>
                                    </td>
                                    <td>2014</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            States</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Action</a>
                                    </td>
                                    <td>7.1</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n5.jpg" alt=""/>
                                            <span>24</span></a></td>
                                    <td>2016</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">India</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Drama</a></td>
                                    <td>9.0</td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n6.jpg" alt=""/> <span>001 The Secret Life of Pets</span></a>
                                    </td>
                                    <td>2012</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Euro,
                                            France</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Crime, Drama</a></td>
                                    <td>8.2</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="e" aria-labelledby="e-tab">
                        <div class="agile-news-table">
                            <div class="w3ls-news-result">
                                <h4>Search Results : <span>9</span></h4>
                            </div>
                            <table id="table-breakpoint5">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Movie Name</th>
                                    <th>Year</th>
                                    <th>Status</th>
                                    <th>Country</th>
                                    <th>Genre</th>
                                    <th>Rating</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n1.jpg" alt=""/> <span>01 Ben-Hur</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n2.jpg" alt=""/> <span>001 Southside with you</span></a>
                                    </td>
                                    <td>2011</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Korea</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Drama</a>
                                    </td>
                                    <td>7.5</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n11.jpg" alt=""/> <span>12 Bad Moms</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>SD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>6.5</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n3.jpg" alt=""/> <span>2 Sausage Party</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n4.jpg" alt=""/> <span>2.0 Morgan</span></a>
                                    </td>
                                    <td>2014</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            States</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Action</a>
                                    </td>
                                    <td>7.1</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n5.jpg" alt=""/>
                                            <span>24</span></a></td>
                                    <td>2016</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">India</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Drama</a></td>
                                    <td>9.0</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n6.jpg" alt=""/> <span>001 The Secret Life of Pets</span></a>
                                    </td>
                                    <td>2012</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Euro,
                                            France</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Crime, Drama</a></td>
                                    <td>8.2</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n7.jpg" alt=""/> <span>12 Hell or High Water</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">China</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>8.9</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n8.jpg" alt=""/> <span>2 Central Intelligence</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="f" aria-labelledby="f-tab">
                        <div class="agile-news-table">
                            <div class="w3ls-news-result">
                                <h4>Search Results : <span>14</span></h4>
                            </div>
                            <table id="table-breakpoint6">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Movie Name</th>
                                    <th>Year</th>
                                    <th>Status</th>
                                    <th>Country</th>
                                    <th>Genre</th>
                                    <th>Rating</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n6.jpg" alt=""/> <span>001 The Secret Life of Pets</span></a>
                                    </td>
                                    <td>2012</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Euro,
                                            France</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Crime, Drama</a></td>
                                    <td>8.2</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n7.jpg" alt=""/> <span>12 Hell or High Water</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">China</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>8.9</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n8.jpg" alt=""/> <span>2 Central Intelligence</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n9.jpg" alt=""/> <span>3 The Jungle Book</span></a>
                                    </td>
                                    <td>2014</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Japan</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Action</a>
                                    </td>
                                    <td>7.1</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n10.jpg" alt=""/> <span>01 Independence Day</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n1.jpg" alt=""/> <span>01 Ben-Hur</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n2.jpg" alt=""/> <span>001 Southside with you</span></a>
                                    </td>
                                    <td>2011</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Korea</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Drama</a>
                                    </td>
                                    <td>7.5</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n11.jpg" alt=""/> <span>12 Bad Moms</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>SD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>6.5</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n3.jpg" alt=""/> <span>2 Sausage Party</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n4.jpg" alt=""/> <span>2.0 Morgan</span></a>
                                    </td>
                                    <td>2014</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            States</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Action</a>
                                    </td>
                                    <td>7.1</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n5.jpg" alt=""/>
                                            <span>24</span></a></td>
                                    <td>2016</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">India</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Drama</a></td>
                                    <td>9.0</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n10.jpg" alt=""/> <span>01 Independence Day</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n6.jpg" alt=""/> <span>001 The Secret Life of Pets</span></a>
                                    </td>
                                    <td>2012</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Euro,
                                            France</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Crime, Drama</a></td>
                                    <td>8.2</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n7.jpg" alt=""/> <span>12 Hell or High Water</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">China</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>8.9</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="g" aria-labelledby="g-tab">
                        <div class="agile-news-table">
                            <div class="w3ls-news-result">
                                <h4>Search Results : <span>25</span></h4>
                            </div>
                            <table id="table-breakpoint7">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Movie Name</th>
                                    <th>Year</th>
                                    <th>Status</th>
                                    <th>Country</th>
                                    <th>Genre</th>
                                    <th>Rating</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n1.jpg" alt=""/> <span>01 Ben-Hur</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n2.jpg" alt=""/> <span>001 Southside with you</span></a>
                                    </td>
                                    <td>2011</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Korea</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Drama</a>
                                    </td>
                                    <td>7.5</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n11.jpg" alt=""/> <span>12 Bad Moms</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>SD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>6.5</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n3.jpg" alt=""/> <span>2 Sausage Party</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n4.jpg" alt=""/> <span>2.0 Morgan</span></a>
                                    </td>
                                    <td>2014</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            States</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Action</a>
                                    </td>
                                    <td>7.1</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n5.jpg" alt=""/>
                                            <span>24</span></a></td>
                                    <td>2016</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">India</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Drama</a></td>
                                    <td>9.0</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n6.jpg" alt=""/> <span>001 The Secret Life of Pets</span></a>
                                    </td>
                                    <td>2012</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Euro,
                                            France</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Crime, Drama</a></td>
                                    <td>8.2</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n7.jpg" alt=""/> <span>12 Hell or High Water</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">China</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>8.9</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n8.jpg" alt=""/> <span>2 Central Intelligence</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n9.jpg" alt=""/> <span>3 The Jungle Book</span></a>
                                    </td>
                                    <td>2014</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Japan</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Action</a>
                                    </td>
                                    <td>7.1</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n10.jpg" alt=""/> <span>01 Independence Day</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n1.jpg" alt=""/> <span>01 Ben-Hur</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n2.jpg" alt=""/> <span>001 Southside with you</span></a>
                                    </td>
                                    <td>2011</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Korea</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Drama</a>
                                    </td>
                                    <td>7.5</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n11.jpg" alt=""/> <span>12 Bad Moms</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>SD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>6.5</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n3.jpg" alt=""/> <span>2 Sausage Party</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n4.jpg" alt=""/> <span>2.0 Morgan</span></a>
                                    </td>
                                    <td>2014</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            States</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Action</a>
                                    </td>
                                    <td>7.1</td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n5.jpg" alt=""/>
                                            <span>24</span></a></td>
                                    <td>2016</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">India</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Drama</a></td>
                                    <td>9.0</td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n6.jpg" alt=""/> <span>001 The Secret Life of Pets</span></a>
                                    </td>
                                    <td>2012</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Euro,
                                            France</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Crime, Drama</a></td>
                                    <td>8.2</td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n7.jpg" alt=""/> <span>12 Hell or High Water</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">China</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>8.9</td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n8.jpg" alt=""/> <span>2 Central Intelligence</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>21</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n9.jpg" alt=""/> <span>3 The Jungle Book</span></a>
                                    </td>
                                    <td>2014</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Japan</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Action</a>
                                    </td>
                                    <td>7.1</td>
                                </tr>
                                <tr>
                                    <td>22</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n10.jpg" alt=""/> <span>01 Independence Day</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>23</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n1.jpg" alt=""/> <span>01 Ben-Hur</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>24</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n2.jpg" alt=""/> <span>001 Southside with you</span></a>
                                    </td>
                                    <td>2011</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Korea</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Drama</a>
                                    </td>
                                    <td>7.5</td>
                                </tr>
                                <tr>
                                    <td>25</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n11.jpg" alt=""/> <span>12 Bad Moms</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>SD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>6.5</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="h" aria-labelledby="h-tab">
                        <div class="agile-news-table">
                            <div class="w3ls-news-result">
                                <h4>Search Results : <span>17</span></h4>
                            </div>
                            <table id="table-breakpoint8">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Movie Name</th>
                                    <th>Year</th>
                                    <th>Status</th>
                                    <th>Country</th>
                                    <th>Genre</th>
                                    <th>Rating</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n3.jpg" alt=""/> <span>2 Sausage Party</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n4.jpg" alt=""/> <span>2.0 Morgan</span></a>
                                    </td>
                                    <td>2014</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            States</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Action</a>
                                    </td>
                                    <td>7.1</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n5.jpg" alt=""/>
                                            <span>24</span></a></td>
                                    <td>2016</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">India</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Drama</a></td>
                                    <td>9.0</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n6.jpg" alt=""/> <span>001 The Secret Life of Pets</span></a>
                                    </td>
                                    <td>2012</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Euro,
                                            France</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Crime, Drama</a></td>
                                    <td>8.2</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n7.jpg" alt=""/> <span>12 Hell or High Water</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">China</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>8.9</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n8.jpg" alt=""/> <span>2 Central Intelligence</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n9.jpg" alt=""/> <span>3 The Jungle Book</span></a>
                                    </td>
                                    <td>2014</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Japan</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Action</a>
                                    </td>
                                    <td>7.1</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n10.jpg" alt=""/> <span>01 Independence Day</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n1.jpg" alt=""/> <span>01 Ben-Hur</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n2.jpg" alt=""/> <span>001 Southside with you</span></a>
                                    </td>
                                    <td>2011</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Korea</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Drama</a>
                                    </td>
                                    <td>7.5</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n11.jpg" alt=""/> <span>12 Bad Moms</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>SD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>6.5</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n3.jpg" alt=""/> <span>2 Sausage Party</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n4.jpg" alt=""/> <span>2.0 Morgan</span></a>
                                    </td>
                                    <td>2014</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            States</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Action</a>
                                    </td>
                                    <td>7.1</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n5.jpg" alt=""/>
                                            <span>24</span></a></td>
                                    <td>2016</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">India</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Drama</a></td>
                                    <td>9.0</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n6.jpg" alt=""/> <span>001 The Secret Life of Pets</span></a>
                                    </td>
                                    <td>2012</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Euro,
                                            France</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Crime, Drama</a></td>
                                    <td>8.2</td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n7.jpg" alt=""/> <span>12 Hell or High Water</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">China</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>8.9</td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n8.jpg" alt=""/> <span>2 Central Intelligence</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="i" aria-labelledby="i-tab">
                        <div class="agile-news-table">
                            <div class="w3ls-news-result">
                                <h4>Search Results : <span>12</span></h4>
                            </div>
                            <table id="table-breakpoint9">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Movie Name</th>
                                    <th>Year</th>
                                    <th>Status</th>
                                    <th>Country</th>
                                    <th>Genre</th>
                                    <th>Rating</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n1.jpg" alt=""/> <span>01 Ben-Hur</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n2.jpg" alt=""/> <span>001 Southside with you</span></a>
                                    </td>
                                    <td>2011</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Korea</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Drama</a>
                                    </td>
                                    <td>7.5</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n11.jpg" alt=""/> <span>12 Bad Moms</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>SD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>6.5</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n3.jpg" alt=""/> <span>2 Sausage Party</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n4.jpg" alt=""/> <span>2.0 Morgan</span></a>
                                    </td>
                                    <td>2014</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            States</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Action</a>
                                    </td>
                                    <td>7.1</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n5.jpg" alt=""/>
                                            <span>24</span></a></td>
                                    <td>2016</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">India</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Drama</a></td>
                                    <td>9.0</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n6.jpg" alt=""/> <span>001 The Secret Life of Pets</span></a>
                                    </td>
                                    <td>2012</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Euro,
                                            France</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Crime, Drama</a></td>
                                    <td>8.2</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n7.jpg" alt=""/> <span>12 Hell or High Water</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">China</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>8.9</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n8.jpg" alt=""/> <span>2 Central Intelligence</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n9.jpg" alt=""/> <span>3 The Jungle Book</span></a>
                                    </td>
                                    <td>2014</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Japan</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Action</a>
                                    </td>
                                    <td>7.1</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n10.jpg" alt=""/> <span>01 Independence Day</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n1.jpg" alt=""/> <span>01 Ben-Hur</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="j" aria-labelledby="j-tab">
                        <div class="agile-news-table">
                            <div class="w3ls-news-result">
                                <h4>Search Results : <span>15</span></h4>
                            </div>
                            <table id="table-breakpoint10">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Movie Name</th>
                                    <th>Year</th>
                                    <th>Status</th>
                                    <th>Country</th>
                                    <th>Genre</th>
                                    <th>Rating</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n10.jpg" alt=""/> <span>01 Independence Day</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n1.jpg" alt=""/> <span>01 Ben-Hur</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n2.jpg" alt=""/> <span>001 Southside with you</span></a>
                                    </td>
                                    <td>2011</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Korea</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Drama</a>
                                    </td>
                                    <td>7.5</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n11.jpg" alt=""/> <span>12 Bad Moms</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>SD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>6.5</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n3.jpg" alt=""/> <span>2 Sausage Party</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n4.jpg" alt=""/> <span>2.0 Morgan</span></a>
                                    </td>
                                    <td>2014</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            States</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Action</a>
                                    </td>
                                    <td>7.1</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n5.jpg" alt=""/>
                                            <span>24</span></a></td>
                                    <td>2016</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">India</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Drama</a></td>
                                    <td>9.0</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n6.jpg" alt=""/> <span>001 The Secret Life of Pets</span></a>
                                    </td>
                                    <td>2012</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Euro,
                                            France</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Crime, Drama</a></td>
                                    <td>8.2</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n7.jpg" alt=""/> <span>12 Hell or High Water</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">China</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>8.9</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n8.jpg" alt=""/> <span>2 Central Intelligence</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n9.jpg" alt=""/> <span>3 The Jungle Book</span></a>
                                    </td>
                                    <td>2014</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Japan</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Action</a>
                                    </td>
                                    <td>7.1</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n10.jpg" alt=""/> <span>01 Independence Day</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n1.jpg" alt=""/> <span>01 Ben-Hur</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n2.jpg" alt=""/> <span>001 Southside with you</span></a>
                                    </td>
                                    <td>2011</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Korea</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Drama</a>
                                    </td>
                                    <td>7.5</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n11.jpg" alt=""/> <span>12 Bad Moms</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>SD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>6.5</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="k" aria-labelledby="k-tab">
                        <div class="agile-news-table">
                            <div class="w3ls-news-result">
                                <h4>Search Results : <span>16</span></h4>
                            </div>
                            <table id="table-breakpoint11">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Movie Name</th>
                                    <th>Year</th>
                                    <th>Status</th>
                                    <th>Country</th>
                                    <th>Genre</th>
                                    <th>Rating</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n11.jpg" alt=""/> <span>12 Bad Moms</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>SD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>6.5</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n3.jpg" alt=""/> <span>2 Sausage Party</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n4.jpg" alt=""/> <span>2.0 Morgan</span></a>
                                    </td>
                                    <td>2014</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            States</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Action</a>
                                    </td>
                                    <td>7.1</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n5.jpg" alt=""/>
                                            <span>24</span></a></td>
                                    <td>2016</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">India</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Drama</a></td>
                                    <td>9.0</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n6.jpg" alt=""/> <span>001 The Secret Life of Pets</span></a>
                                    </td>
                                    <td>2012</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Euro,
                                            France</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Crime, Drama</a></td>
                                    <td>8.2</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n7.jpg" alt=""/> <span>12 Hell or High Water</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">China</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>8.9</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n8.jpg" alt=""/> <span>2 Central Intelligence</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n9.jpg" alt=""/> <span>3 The Jungle Book</span></a>
                                    </td>
                                    <td>2014</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Japan</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Action</a>
                                    </td>
                                    <td>7.1</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n10.jpg" alt=""/> <span>01 Independence Day</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n1.jpg" alt=""/> <span>01 Ben-Hur</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n2.jpg" alt=""/> <span>001 Southside with you</span></a>
                                    </td>
                                    <td>2011</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Korea</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Drama</a>
                                    </td>
                                    <td>7.5</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n11.jpg" alt=""/> <span>12 Bad Moms</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>SD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>6.5</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n3.jpg" alt=""/> <span>2 Sausage Party</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n4.jpg" alt=""/> <span>2.0 Morgan</span></a>
                                    </td>
                                    <td>2014</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            States</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Action</a>
                                    </td>
                                    <td>7.1</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n5.jpg" alt=""/>
                                            <span>24</span></a></td>
                                    <td>2016</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">India</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Drama</a></td>
                                    <td>9.0</td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n6.jpg" alt=""/> <span>001 The Secret Life of Pets</span></a>
                                    </td>
                                    <td>2012</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Euro,
                                            France</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Crime, Drama</a></td>
                                    <td>8.2</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="l" aria-labelledby="l-tab">
                        <div class="agile-news-table">
                            <div class="w3ls-news-result">
                                <h4>Search Results : <span>14</span></h4>
                            </div>
                            <table id="table-breakpoint12">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Movie Name</th>
                                    <th>Year</th>
                                    <th>Status</th>
                                    <th>Country</th>
                                    <th>Genre</th>
                                    <th>Rating</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n6.jpg" alt=""/> <span>001 The Secret Life of Pets</span></a>
                                    </td>
                                    <td>2012</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Euro,
                                            France</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Crime, Drama</a></td>
                                    <td>8.2</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n7.jpg" alt=""/> <span>12 Hell or High Water</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">China</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>8.9</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n8.jpg" alt=""/> <span>2 Central Intelligence</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n9.jpg" alt=""/> <span>3 The Jungle Book</span></a>
                                    </td>
                                    <td>2014</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Japan</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Action</a>
                                    </td>
                                    <td>7.1</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n10.jpg" alt=""/> <span>01 Independence Day</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n1.jpg" alt=""/> <span>01 Ben-Hur</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n2.jpg" alt=""/> <span>001 Southside with you</span></a>
                                    </td>
                                    <td>2011</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Korea</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Drama</a>
                                    </td>
                                    <td>7.5</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n11.jpg" alt=""/> <span>12 Bad Moms</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>SD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>6.5</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n3.jpg" alt=""/> <span>2 Sausage Party</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n4.jpg" alt=""/> <span>2.0 Morgan</span></a>
                                    </td>
                                    <td>2014</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            States</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Action</a>
                                    </td>
                                    <td>7.1</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n5.jpg" alt=""/>
                                            <span>24</span></a></td>
                                    <td>2016</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">India</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Drama</a></td>
                                    <td>9.0</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n10.jpg" alt=""/> <span>01 Independence Day</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n6.jpg" alt=""/> <span>001 The Secret Life of Pets</span></a>
                                    </td>
                                    <td>2012</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Euro,
                                            France</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Crime, Drama</a></td>
                                    <td>8.2</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n7.jpg" alt=""/> <span>12 Hell or High Water</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">China</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>8.9</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="m" aria-labelledby="m-tab">
                        <div class="agile-news-table">
                            <div class="w3ls-news-result">
                                <h4>Search Results : <span>25</span></h4>
                            </div>
                            <table id="table-breakpoint13">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Movie Name</th>
                                    <th>Year</th>
                                    <th>Status</th>
                                    <th>Country</th>
                                    <th>Genre</th>
                                    <th>Rating</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n1.jpg" alt=""/> <span>01 Ben-Hur</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n2.jpg" alt=""/> <span>001 Southside with you</span></a>
                                    </td>
                                    <td>2011</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Korea</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Drama</a>
                                    </td>
                                    <td>7.5</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n11.jpg" alt=""/> <span>12 Bad Moms</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>SD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>6.5</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n3.jpg" alt=""/> <span>2 Sausage Party</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n4.jpg" alt=""/> <span>2.0 Morgan</span></a>
                                    </td>
                                    <td>2014</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            States</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Action</a>
                                    </td>
                                    <td>7.1</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n5.jpg" alt=""/>
                                            <span>24</span></a></td>
                                    <td>2016</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">India</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Drama</a></td>
                                    <td>9.0</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n6.jpg" alt=""/> <span>001 The Secret Life of Pets</span></a>
                                    </td>
                                    <td>2012</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Euro,
                                            France</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Crime, Drama</a></td>
                                    <td>8.2</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n7.jpg" alt=""/> <span>12 Hell or High Water</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">China</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>8.9</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n8.jpg" alt=""/> <span>2 Central Intelligence</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n9.jpg" alt=""/> <span>3 The Jungle Book</span></a>
                                    </td>
                                    <td>2014</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Japan</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Action</a>
                                    </td>
                                    <td>7.1</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n10.jpg" alt=""/> <span>01 Independence Day</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n1.jpg" alt=""/> <span>01 Ben-Hur</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n2.jpg" alt=""/> <span>001 Southside with you</span></a>
                                    </td>
                                    <td>2011</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Korea</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Drama</a>
                                    </td>
                                    <td>7.5</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n11.jpg" alt=""/> <span>12 Bad Moms</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>SD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>6.5</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n3.jpg" alt=""/> <span>2 Sausage Party</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n4.jpg" alt=""/> <span>2.0 Morgan</span></a>
                                    </td>
                                    <td>2014</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            States</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Action</a>
                                    </td>
                                    <td>7.1</td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n5.jpg" alt=""/>
                                            <span>24</span></a></td>
                                    <td>2016</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">India</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Drama</a></td>
                                    <td>9.0</td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n6.jpg" alt=""/> <span>001 The Secret Life of Pets</span></a>
                                    </td>
                                    <td>2012</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Euro,
                                            France</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Crime, Drama</a></td>
                                    <td>8.2</td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n7.jpg" alt=""/> <span>12 Hell or High Water</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">China</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>8.9</td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n8.jpg" alt=""/> <span>2 Central Intelligence</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>21</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n9.jpg" alt=""/> <span>3 The Jungle Book</span></a>
                                    </td>
                                    <td>2014</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Japan</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Action</a>
                                    </td>
                                    <td>7.1</td>
                                </tr>
                                <tr>
                                    <td>22</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n10.jpg" alt=""/> <span>01 Independence Day</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>23</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n1.jpg" alt=""/> <span>01 Ben-Hur</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>24</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n2.jpg" alt=""/> <span>001 Southside with you</span></a>
                                    </td>
                                    <td>2011</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Korea</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Drama</a>
                                    </td>
                                    <td>7.5</td>
                                </tr>
                                <tr>
                                    <td>25</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n11.jpg" alt=""/> <span>12 Bad Moms</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>SD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>6.5</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="n" aria-labelledby="n-tab">
                        <div class="agile-news-table">
                            <div class="w3ls-news-result">
                                <h4>Search Results : <span>17</span></h4>
                            </div>
                            <table id="table-breakpoint14">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Movie Name</th>
                                    <th>Year</th>
                                    <th>Status</th>
                                    <th>Country</th>
                                    <th>Genre</th>
                                    <th>Rating</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n3.jpg" alt=""/> <span>2 Sausage Party</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n4.jpg" alt=""/> <span>2.0 Morgan</span></a>
                                    </td>
                                    <td>2014</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            States</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Action</a>
                                    </td>
                                    <td>7.1</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n5.jpg" alt=""/>
                                            <span>24</span></a></td>
                                    <td>2016</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">India</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Drama</a></td>
                                    <td>9.0</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n6.jpg" alt=""/> <span>001 The Secret Life of Pets</span></a>
                                    </td>
                                    <td>2012</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Euro,
                                            France</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Crime, Drama</a></td>
                                    <td>8.2</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n7.jpg" alt=""/> <span>12 Hell or High Water</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">China</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>8.9</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n8.jpg" alt=""/> <span>2 Central Intelligence</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n9.jpg" alt=""/> <span>3 The Jungle Book</span></a>
                                    </td>
                                    <td>2014</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Japan</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Action</a>
                                    </td>
                                    <td>7.1</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n10.jpg" alt=""/> <span>01 Independence Day</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n1.jpg" alt=""/> <span>01 Ben-Hur</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n2.jpg" alt=""/> <span>001 Southside with you</span></a>
                                    </td>
                                    <td>2011</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Korea</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Drama</a>
                                    </td>
                                    <td>7.5</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n11.jpg" alt=""/> <span>12 Bad Moms</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>SD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>6.5</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n3.jpg" alt=""/> <span>2 Sausage Party</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n4.jpg" alt=""/> <span>2.0 Morgan</span></a>
                                    </td>
                                    <td>2014</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            States</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Action</a>
                                    </td>
                                    <td>7.1</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n5.jpg" alt=""/>
                                            <span>24</span></a></td>
                                    <td>2016</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">India</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Drama</a></td>
                                    <td>9.0</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n6.jpg" alt=""/> <span>001 The Secret Life of Pets</span></a>
                                    </td>
                                    <td>2012</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Euro,
                                            France</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Crime, Drama</a></td>
                                    <td>8.2</td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n7.jpg" alt=""/> <span>12 Hell or High Water</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">China</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>8.9</td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n8.jpg" alt=""/> <span>2 Central Intelligence</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="o" aria-labelledby="o-tab">
                        <div class="agile-news-table">
                            <div class="w3ls-news-result">
                                <h4>Search Results : <span>12</span></h4>
                            </div>
                            <table id="table-breakpoint15">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Movie Name</th>
                                    <th>Year</th>
                                    <th>Status</th>
                                    <th>Country</th>
                                    <th>Genre</th>
                                    <th>Rating</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n1.jpg" alt=""/> <span>01 Ben-Hur</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n2.jpg" alt=""/> <span>001 Southside with you</span></a>
                                    </td>
                                    <td>2011</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Korea</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Drama</a>
                                    </td>
                                    <td>7.5</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n11.jpg" alt=""/> <span>12 Bad Moms</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>SD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>6.5</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n3.jpg" alt=""/> <span>2 Sausage Party</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n4.jpg" alt=""/> <span>2.0 Morgan</span></a>
                                    </td>
                                    <td>2014</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            States</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Action</a>
                                    </td>
                                    <td>7.1</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n5.jpg" alt=""/>
                                            <span>24</span></a></td>
                                    <td>2016</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">India</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Drama</a></td>
                                    <td>9.0</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n6.jpg" alt=""/> <span>001 The Secret Life of Pets</span></a>
                                    </td>
                                    <td>2012</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Euro,
                                            France</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Crime, Drama</a></td>
                                    <td>8.2</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n7.jpg" alt=""/> <span>12 Hell or High Water</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">China</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>8.9</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n8.jpg" alt=""/> <span>2 Central Intelligence</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n9.jpg" alt=""/> <span>3 The Jungle Book</span></a>
                                    </td>
                                    <td>2014</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Japan</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Action</a>
                                    </td>
                                    <td>7.1</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n10.jpg" alt=""/> <span>01 Independence Day</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n1.jpg" alt=""/> <span>01 Ben-Hur</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="p" aria-labelledby="p-tab">
                        <div class="agile-news-table">
                            <div class="w3ls-news-result">
                                <h4>Search Results : <span>16</span></h4>
                            </div>
                            <table id="table-breakpoint16">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Movie Name</th>
                                    <th>Year</th>
                                    <th>Status</th>
                                    <th>Country</th>
                                    <th>Genre</th>
                                    <th>Rating</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n11.jpg" alt=""/> <span>12 Bad Moms</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>SD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>6.5</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n3.jpg" alt=""/> <span>2 Sausage Party</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n4.jpg" alt=""/> <span>2.0 Morgan</span></a>
                                    </td>
                                    <td>2014</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            States</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Action</a>
                                    </td>
                                    <td>7.1</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n5.jpg" alt=""/>
                                            <span>24</span></a></td>
                                    <td>2016</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">India</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Drama</a></td>
                                    <td>9.0</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n6.jpg" alt=""/> <span>001 The Secret Life of Pets</span></a>
                                    </td>
                                    <td>2012</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Euro,
                                            France</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Crime, Drama</a></td>
                                    <td>8.2</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n7.jpg" alt=""/> <span>12 Hell or High Water</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">China</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>8.9</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n8.jpg" alt=""/> <span>2 Central Intelligence</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n9.jpg" alt=""/> <span>3 The Jungle Book</span></a>
                                    </td>
                                    <td>2014</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Japan</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Action</a>
                                    </td>
                                    <td>7.1</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n10.jpg" alt=""/> <span>01 Independence Day</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n1.jpg" alt=""/> <span>01 Ben-Hur</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n2.jpg" alt=""/> <span>001 Southside with you</span></a>
                                    </td>
                                    <td>2011</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Korea</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Drama</a>
                                    </td>
                                    <td>7.5</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n11.jpg" alt=""/> <span>12 Bad Moms</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>SD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>6.5</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n3.jpg" alt=""/> <span>2 Sausage Party</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n4.jpg" alt=""/> <span>2.0 Morgan</span></a>
                                    </td>
                                    <td>2014</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            States</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Action</a>
                                    </td>
                                    <td>7.1</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n5.jpg" alt=""/>
                                            <span>24</span></a></td>
                                    <td>2016</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">India</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Drama</a></td>
                                    <td>9.0</td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n6.jpg" alt=""/> <span>001 The Secret Life of Pets</span></a>
                                    </td>
                                    <td>2012</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Euro,
                                            France</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Crime, Drama</a></td>
                                    <td>8.2</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="q" aria-labelledby="q-tab">
                        <div class="agile-news-table">
                            <div class="w3ls-news-result">
                                <h4>Search Results : <span>09</span></h4>
                            </div>
                            <table id="table-breakpoint17">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Movie Name</th>
                                    <th>Year</th>
                                    <th>Status</th>
                                    <th>Country</th>
                                    <th>Genre</th>
                                    <th>Rating</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n1.jpg" alt=""/> <span>01 Ben-Hur</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n2.jpg" alt=""/> <span>001 Southside with you</span></a>
                                    </td>
                                    <td>2011</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Korea</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Drama</a>
                                    </td>
                                    <td>7.5</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n11.jpg" alt=""/> <span>12 Bad Moms</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>SD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>6.5</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n3.jpg" alt=""/> <span>2 Sausage Party</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n4.jpg" alt=""/> <span>2.0 Morgan</span></a>
                                    </td>
                                    <td>2014</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            States</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Action</a>
                                    </td>
                                    <td>7.1</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n5.jpg" alt=""/>
                                            <span>24</span></a></td>
                                    <td>2016</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">India</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Drama</a></td>
                                    <td>9.0</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n6.jpg" alt=""/> <span>001 The Secret Life of Pets</span></a>
                                    </td>
                                    <td>2012</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Euro,
                                            France</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Crime, Drama</a></td>
                                    <td>8.2</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n7.jpg" alt=""/> <span>12 Hell or High Water</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">China</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>8.9</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n8.jpg" alt=""/> <span>2 Central Intelligence</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="r" aria-labelledby="r-tab">
                        <div class="agile-news-table">
                            <div class="w3ls-news-result">
                                <h4>Search Results : <span>14</span></h4>
                            </div>
                            <table id="table-breakpoint18">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Movie Name</th>
                                    <th>Year</th>
                                    <th>Status</th>
                                    <th>Country</th>
                                    <th>Genre</th>
                                    <th>Rating</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n6.jpg" alt=""/> <span>001 The Secret Life of Pets</span></a>
                                    </td>
                                    <td>2012</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Euro,
                                            France</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Crime, Drama</a></td>
                                    <td>8.2</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n7.jpg" alt=""/> <span>12 Hell or High Water</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">China</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>8.9</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n8.jpg" alt=""/> <span>2 Central Intelligence</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n9.jpg" alt=""/> <span>3 The Jungle Book</span></a>
                                    </td>
                                    <td>2014</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Japan</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Action</a>
                                    </td>
                                    <td>7.1</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n10.jpg" alt=""/> <span>01 Independence Day</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n1.jpg" alt=""/> <span>01 Ben-Hur</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n2.jpg" alt=""/> <span>001 Southside with you</span></a>
                                    </td>
                                    <td>2011</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Korea</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Drama</a>
                                    </td>
                                    <td>7.5</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n11.jpg" alt=""/> <span>12 Bad Moms</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>SD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>6.5</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n3.jpg" alt=""/> <span>2 Sausage Party</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n4.jpg" alt=""/> <span>2.0 Morgan</span></a>
                                    </td>
                                    <td>2014</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            States</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Action</a>
                                    </td>
                                    <td>7.1</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n5.jpg" alt=""/>
                                            <span>24</span></a></td>
                                    <td>2016</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">India</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Drama</a></td>
                                    <td>9.0</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n10.jpg" alt=""/> <span>01 Independence Day</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n6.jpg" alt=""/> <span>001 The Secret Life of Pets</span></a>
                                    </td>
                                    <td>2012</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Euro,
                                            France</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Crime, Drama</a></td>
                                    <td>8.2</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n7.jpg" alt=""/> <span>12 Hell or High Water</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">China</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>8.9</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="s" aria-labelledby="s-tab">
                        <div class="agile-news-table">
                            <div class="w3ls-news-result">
                                <h4>Search Results : <span>17</span></h4>
                            </div>
                            <table id="table-breakpoint19">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Movie Name</th>
                                    <th>Year</th>
                                    <th>Status</th>
                                    <th>Country</th>
                                    <th>Genre</th>
                                    <th>Rating</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n3.jpg" alt=""/> <span>2 Sausage Party</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n4.jpg" alt=""/> <span>2.0 Morgan</span></a>
                                    </td>
                                    <td>2014</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            States</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Action</a>
                                    </td>
                                    <td>7.1</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n5.jpg" alt=""/>
                                            <span>24</span></a></td>
                                    <td>2016</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">India</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Drama</a></td>
                                    <td>9.0</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n6.jpg" alt=""/> <span>001 The Secret Life of Pets</span></a>
                                    </td>
                                    <td>2012</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Euro,
                                            France</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Crime, Drama</a></td>
                                    <td>8.2</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n7.jpg" alt=""/> <span>12 Hell or High Water</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">China</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>8.9</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n8.jpg" alt=""/> <span>2 Central Intelligence</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n9.jpg" alt=""/> <span>3 The Jungle Book</span></a>
                                    </td>
                                    <td>2014</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Japan</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Action</a>
                                    </td>
                                    <td>7.1</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n10.jpg" alt=""/> <span>01 Independence Day</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n1.jpg" alt=""/> <span>01 Ben-Hur</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n2.jpg" alt=""/> <span>001 Southside with you</span></a>
                                    </td>
                                    <td>2011</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Korea</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Drama</a>
                                    </td>
                                    <td>7.5</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n11.jpg" alt=""/> <span>12 Bad Moms</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>SD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>6.5</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n3.jpg" alt=""/> <span>2 Sausage Party</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n4.jpg" alt=""/> <span>2.0 Morgan</span></a>
                                    </td>
                                    <td>2014</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            States</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Action</a>
                                    </td>
                                    <td>7.1</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n5.jpg" alt=""/>
                                            <span>24</span></a></td>
                                    <td>2016</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">India</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Drama</a></td>
                                    <td>9.0</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n6.jpg" alt=""/> <span>001 The Secret Life of Pets</span></a>
                                    </td>
                                    <td>2012</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Euro,
                                            France</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Crime, Drama</a></td>
                                    <td>8.2</td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n7.jpg" alt=""/> <span>12 Hell or High Water</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">China</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>8.9</td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n8.jpg" alt=""/> <span>2 Central Intelligence</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="t" aria-labelledby="t-tab">
                        <div class="agile-news-table">
                            <div class="w3ls-news-result">
                                <h4>Search Results : <span>17</span></h4>
                            </div>
                            <table id="table-breakpoint20">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Movie Name</th>
                                    <th>Year</th>
                                    <th>Status</th>
                                    <th>Country</th>
                                    <th>Genre</th>
                                    <th>Rating</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n3.jpg" alt=""/> <span>2 Sausage Party</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n4.jpg" alt=""/> <span>2.0 Morgan</span></a>
                                    </td>
                                    <td>2014</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            States</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Action</a>
                                    </td>
                                    <td>7.1</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n5.jpg" alt=""/>
                                            <span>24</span></a></td>
                                    <td>2016</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">India</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Drama</a></td>
                                    <td>9.0</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n6.jpg" alt=""/> <span>001 The Secret Life of Pets</span></a>
                                    </td>
                                    <td>2012</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Euro,
                                            France</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Crime, Drama</a></td>
                                    <td>8.2</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n7.jpg" alt=""/> <span>12 Hell or High Water</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">China</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>8.9</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n8.jpg" alt=""/> <span>2 Central Intelligence</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n9.jpg" alt=""/> <span>3 The Jungle Book</span></a>
                                    </td>
                                    <td>2014</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Japan</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Action</a>
                                    </td>
                                    <td>7.1</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n10.jpg" alt=""/> <span>01 Independence Day</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n1.jpg" alt=""/> <span>01 Ben-Hur</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n2.jpg" alt=""/> <span>001 Southside with you</span></a>
                                    </td>
                                    <td>2011</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Korea</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Drama</a>
                                    </td>
                                    <td>7.5</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n11.jpg" alt=""/> <span>12 Bad Moms</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>SD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>6.5</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n3.jpg" alt=""/> <span>2 Sausage Party</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n4.jpg" alt=""/> <span>2.0 Morgan</span></a>
                                    </td>
                                    <td>2014</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            States</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Action</a>
                                    </td>
                                    <td>7.1</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n5.jpg" alt=""/>
                                            <span>24</span></a></td>
                                    <td>2016</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">India</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Drama</a></td>
                                    <td>9.0</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n6.jpg" alt=""/> <span>001 The Secret Life of Pets</span></a>
                                    </td>
                                    <td>2012</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Euro,
                                            France</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Crime, Drama</a></td>
                                    <td>8.2</td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n7.jpg" alt=""/> <span>12 Hell or High Water</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">China</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>8.9</td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n8.jpg" alt=""/> <span>2 Central Intelligence</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="u" aria-labelledby="u-tab">
                        <div class="agile-news-table">
                            <div class="w3ls-news-result">
                                <h4>Search Results : <span>12</span></h4>
                            </div>
                            <table id="table-breakpoint21">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Movie Name</th>
                                    <th>Year</th>
                                    <th>Status</th>
                                    <th>Country</th>
                                    <th>Genre</th>
                                    <th>Rating</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n1.jpg" alt=""/> <span>01 Ben-Hur</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n2.jpg" alt=""/> <span>001 Southside with you</span></a>
                                    </td>
                                    <td>2011</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Korea</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Drama</a>
                                    </td>
                                    <td>7.5</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n11.jpg" alt=""/> <span>12 Bad Moms</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>SD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>6.5</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n3.jpg" alt=""/> <span>2 Sausage Party</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n4.jpg" alt=""/> <span>2.0 Morgan</span></a>
                                    </td>
                                    <td>2014</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            States</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Action</a>
                                    </td>
                                    <td>7.1</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n5.jpg" alt=""/>
                                            <span>24</span></a></td>
                                    <td>2016</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">India</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Drama</a></td>
                                    <td>9.0</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n6.jpg" alt=""/> <span>001 The Secret Life of Pets</span></a>
                                    </td>
                                    <td>2012</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Euro,
                                            France</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Crime, Drama</a></td>
                                    <td>8.2</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n7.jpg" alt=""/> <span>12 Hell or High Water</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">China</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>8.9</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n8.jpg" alt=""/> <span>2 Central Intelligence</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n9.jpg" alt=""/> <span>3 The Jungle Book</span></a>
                                    </td>
                                    <td>2014</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Japan</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Action</a>
                                    </td>
                                    <td>7.1</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n10.jpg" alt=""/> <span>01 Independence Day</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n1.jpg" alt=""/> <span>01 Ben-Hur</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="v" aria-labelledby="v-tab">
                        <div class="agile-news-table">
                            <div class="w3ls-news-result">
                                <h4>Search Results : <span>16</span></h4>
                            </div>
                            <table id="table-breakpoint22">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Movie Name</th>
                                    <th>Year</th>
                                    <th>Status</th>
                                    <th>Country</th>
                                    <th>Genre</th>
                                    <th>Rating</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n11.jpg" alt=""/> <span>12 Bad Moms</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>SD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>6.5</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n3.jpg" alt=""/> <span>2 Sausage Party</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n4.jpg" alt=""/> <span>2.0 Morgan</span></a>
                                    </td>
                                    <td>2014</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            States</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Action</a>
                                    </td>
                                    <td>7.1</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n5.jpg" alt=""/>
                                            <span>24</span></a></td>
                                    <td>2016</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">India</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Drama</a></td>
                                    <td>9.0</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n6.jpg" alt=""/> <span>001 The Secret Life of Pets</span></a>
                                    </td>
                                    <td>2012</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Euro,
                                            France</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Crime, Drama</a></td>
                                    <td>8.2</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n7.jpg" alt=""/> <span>12 Hell or High Water</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">China</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>8.9</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n8.jpg" alt=""/> <span>2 Central Intelligence</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n9.jpg" alt=""/> <span>3 The Jungle Book</span></a>
                                    </td>
                                    <td>2014</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Japan</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Action</a>
                                    </td>
                                    <td>7.1</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n10.jpg" alt=""/> <span>01 Independence Day</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n1.jpg" alt=""/> <span>01 Ben-Hur</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n2.jpg" alt=""/> <span>001 Southside with you</span></a>
                                    </td>
                                    <td>2011</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Korea</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Drama</a>
                                    </td>
                                    <td>7.5</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n11.jpg" alt=""/> <span>12 Bad Moms</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>SD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>6.5</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n3.jpg" alt=""/> <span>2 Sausage Party</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n4.jpg" alt=""/> <span>2.0 Morgan</span></a>
                                    </td>
                                    <td>2014</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            States</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Action</a>
                                    </td>
                                    <td>7.1</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n5.jpg" alt=""/>
                                            <span>24</span></a></td>
                                    <td>2016</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">India</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Drama</a></td>
                                    <td>9.0</td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n6.jpg" alt=""/> <span>001 The Secret Life of Pets</span></a>
                                    </td>
                                    <td>2012</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Euro,
                                            France</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Crime, Drama</a></td>
                                    <td>8.2</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="w" aria-labelledby="w-tab">
                        <div class="agile-news-table">
                            <div class="w3ls-news-result">
                                <h4>Search Results : <span>09</span></h4>
                            </div>
                            <table id="table-breakpoint23">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Movie Name</th>
                                    <th>Year</th>
                                    <th>Status</th>
                                    <th>Country</th>
                                    <th>Genre</th>
                                    <th>Rating</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n1.jpg" alt=""/> <span>01 Ben-Hur</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n2.jpg" alt=""/> <span>001 Southside with you</span></a>
                                    </td>
                                    <td>2011</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Korea</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Drama</a>
                                    </td>
                                    <td>7.5</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n11.jpg" alt=""/> <span>12 Bad Moms</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>SD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>6.5</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n3.jpg" alt=""/> <span>2 Sausage Party</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n4.jpg" alt=""/> <span>2.0 Morgan</span></a>
                                    </td>
                                    <td>2014</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            States</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Action</a>
                                    </td>
                                    <td>7.1</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n5.jpg" alt=""/>
                                            <span>24</span></a></td>
                                    <td>2016</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">India</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Drama</a></td>
                                    <td>9.0</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n6.jpg" alt=""/> <span>001 The Secret Life of Pets</span></a>
                                    </td>
                                    <td>2012</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Euro,
                                            France</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Crime, Drama</a></td>
                                    <td>8.2</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n7.jpg" alt=""/> <span>12 Hell or High Water</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">China</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>8.9</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n8.jpg" alt=""/> <span>2 Central Intelligence</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="x" aria-labelledby="x-tab">
                        <div class="agile-news-table">
                            <div class="w3ls-news-result">
                                <h4>Search Results : <span>14</span></h4>
                            </div>
                            <table id="table-breakpoint24">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Movie Name</th>
                                    <th>Year</th>
                                    <th>Status</th>
                                    <th>Country</th>
                                    <th>Genre</th>
                                    <th>Rating</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n6.jpg" alt=""/> <span>001 The Secret Life of Pets</span></a>
                                    </td>
                                    <td>2012</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Euro,
                                            France</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Crime, Drama</a></td>
                                    <td>8.2</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n7.jpg" alt=""/> <span>12 Hell or High Water</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">China</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>8.9</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n8.jpg" alt=""/> <span>2 Central Intelligence</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n9.jpg" alt=""/> <span>3 The Jungle Book</span></a>
                                    </td>
                                    <td>2014</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Japan</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Action</a>
                                    </td>
                                    <td>7.1</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n10.jpg" alt=""/> <span>01 Independence Day</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n1.jpg" alt=""/> <span>01 Ben-Hur</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n2.jpg" alt=""/> <span>001 Southside with you</span></a>
                                    </td>
                                    <td>2011</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Korea</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Drama</a>
                                    </td>
                                    <td>7.5</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n11.jpg" alt=""/> <span>12 Bad Moms</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>SD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>6.5</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n3.jpg" alt=""/> <span>2 Sausage Party</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n4.jpg" alt=""/> <span>2.0 Morgan</span></a>
                                    </td>
                                    <td>2014</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            States</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Action</a>
                                    </td>
                                    <td>7.1</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n5.jpg" alt=""/>
                                            <span>24</span></a></td>
                                    <td>2016</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">India</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Drama</a></td>
                                    <td>9.0</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n10.jpg" alt=""/> <span>01 Independence Day</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n6.jpg" alt=""/> <span>001 The Secret Life of Pets</span></a>
                                    </td>
                                    <td>2012</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Euro,
                                            France</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Crime, Drama</a></td>
                                    <td>8.2</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n7.jpg" alt=""/> <span>12 Hell or High Water</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">China</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>8.9</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="y" aria-labelledby="y-tab">
                        <div class="agile-news-table">
                            <div class="w3ls-news-result">
                                <h4>Search Results : <span>17</span></h4>
                            </div>
                            <table id="table-breakpoint25">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Movie Name</th>
                                    <th>Year</th>
                                    <th>Status</th>
                                    <th>Country</th>
                                    <th>Genre</th>
                                    <th>Rating</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n3.jpg" alt=""/> <span>2 Sausage Party</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n4.jpg" alt=""/> <span>2.0 Morgan</span></a>
                                    </td>
                                    <td>2014</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            States</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Action</a>
                                    </td>
                                    <td>7.1</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n5.jpg" alt=""/>
                                            <span>24</span></a></td>
                                    <td>2016</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">India</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Drama</a></td>
                                    <td>9.0</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n6.jpg" alt=""/> <span>001 The Secret Life of Pets</span></a>
                                    </td>
                                    <td>2012</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Euro,
                                            France</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Crime, Drama</a></td>
                                    <td>8.2</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n7.jpg" alt=""/> <span>12 Hell or High Water</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">China</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>8.9</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n8.jpg" alt=""/> <span>2 Central Intelligence</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n9.jpg" alt=""/> <span>3 The Jungle Book</span></a>
                                    </td>
                                    <td>2014</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Japan</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Action</a>
                                    </td>
                                    <td>7.1</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n10.jpg" alt=""/> <span>01 Independence Day</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n1.jpg" alt=""/> <span>01 Ben-Hur</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n2.jpg" alt=""/> <span>001 Southside with you</span></a>
                                    </td>
                                    <td>2011</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Korea</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Drama</a>
                                    </td>
                                    <td>7.5</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n11.jpg" alt=""/> <span>12 Bad Moms</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>SD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>6.5</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n3.jpg" alt=""/> <span>2 Sausage Party</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n4.jpg" alt=""/> <span>2.0 Morgan</span></a>
                                    </td>
                                    <td>2014</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            States</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Action</a>
                                    </td>
                                    <td>7.1</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n5.jpg" alt=""/>
                                            <span>24</span></a></td>
                                    <td>2016</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">India</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Drama</a></td>
                                    <td>9.0</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n6.jpg" alt=""/> <span>001 The Secret Life of Pets</span></a>
                                    </td>
                                    <td>2012</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Euro,
                                            France</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Crime, Drama</a></td>
                                    <td>8.2</td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n7.jpg" alt=""/> <span>12 Hell or High Water</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">China</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>8.9</td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n8.jpg" alt=""/> <span>2 Central Intelligence</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="z" aria-labelledby="z-tab">
                        <div class="agile-news-table">
                            <div class="w3ls-news-result">
                                <h4>Search Results : <span>12</span></h4>
                            </div>
                            <table id="table-breakpoint26">
                                <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Movie Name</th>
                                    <th>Year</th>
                                    <th>Status</th>
                                    <th>Country</th>
                                    <th>Genre</th>
                                    <th>Rating</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n1.jpg" alt=""/> <span>01 Ben-Hur</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n2.jpg" alt=""/> <span>001 Southside with you</span></a>
                                    </td>
                                    <td>2011</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Korea</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Drama</a>
                                    </td>
                                    <td>7.5</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n11.jpg" alt=""/> <span>12 Bad Moms</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>SD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>6.5</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n3.jpg" alt=""/> <span>2 Sausage Party</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n4.jpg" alt=""/> <span>2.0 Morgan</span></a>
                                    </td>
                                    <td>2014</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            States</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Action</a>
                                    </td>
                                    <td>7.1</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n5.jpg" alt=""/>
                                            <span>24</span></a></td>
                                    <td>2016</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">India</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Drama</a></td>
                                    <td>9.0</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n6.jpg" alt=""/> <span>001 The Secret Life of Pets</span></a>
                                    </td>
                                    <td>2012</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Euro,
                                            France</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Thriller,
                                            Crime, Drama</a></td>
                                    <td>8.2</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n7.jpg" alt=""/> <span>12 Hell or High Water</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">China</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy</a>
                                    </td>
                                    <td>8.9</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n8.jpg" alt=""/> <span>2 Central Intelligence</span></a>
                                    </td>
                                    <td>2010</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n9.jpg" alt=""/> <span>3 The Jungle Book</span></a>
                                    </td>
                                    <td>2014</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Japan</a>
                                    </td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Action</a>
                                    </td>
                                    <td>7.1</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n10.jpg" alt=""/> <span>01 Independence Day</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td class="w3-list-img"><a href="<?php echo $host; ?>pages/single.php"><img
                                                    src="<?php echo $host; ?>partials/images/n1.jpg" alt=""/> <span>01 Ben-Hur</span></a>
                                    </td>
                                    <td>2013</td>
                                    <td>HD</td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">United
                                            Kingdom</a></td>
                                    <td class="w3-list-info"><a href="<?php echo $host; ?>pages/genres.php">Comedy,
                                            Drama</a></td>
                                    <td>7.0</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //faq-banner -->
<?php include('../partials/footer.php'); ?>