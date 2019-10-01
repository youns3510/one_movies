<!-- footer -->
<div class="footer">
    <div class="container">
        <div class="w3ls_footer_grid">
            <div class="col-md-6 w3ls_footer_grid_left">
                <div class="w3ls_footer_grid_left1">
                    <h2>Subscribe to us</h2>
                    <div class="w3ls_footer_grid_left1_pos">
                        <form action="#" method="post">
                            <input type="email" name="email" placeholder="Your email..." required="">
                            <input type="submit" value="Send">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6 w3ls_footer_grid_right">
                <a href="<?php echo $host; ?>"><h2>One<span>Movies</span></h2></a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="col-md-5 w3ls_footer_grid1_left">
            <p>&copy; 2016 One Movies. All rights reserved | Design by <a
                        href="<?php echo $host; ?>partials/http://w3layouts.com/">W3layouts</a></p>
        </div>
        <div class="col-md-7 w3ls_footer_grid1_right">
            <ul>
                <li>
                    <a href="<?php echo $host; ?>pages/genres.php">Movies</a>
                </li>
                <li>
                    <a href="<?php echo $host; ?>pages/faq.php">FAQ</a>
                </li>
                <li>
                    <a href="<?php echo $host; ?>pages/horror.php">Action</a>
                </li>
                <li>
                    <a href="<?php echo $host; ?>pages/genres.php">Adventure</a>
                </li>
                <li>
                    <a href="<?php echo $host; ?>pages/comedy.php">Comedy</a>
                </li>
                <li>
                    <a href="<?php echo $host; ?>pages/icons.php">Icons</a>
                </li>
                <li>
                    <a href="<?php echo $host; ?>pages/contact.php">Contact Us</a>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!-- //footer -->
<!-- Bootstrap Core JavaScript -->
<script src="<?php echo $host; ?>partials/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo $host; ?>dashboard/includes/plugins/toastr/toastr.min.js"></script>
<?php if (isset($_SESSION['action']) && $_SESSION['action'] == true) { ?>
    <script>
        toastr.options.closeButton = true;
        toastr.<?php echo $_SESSION['option'] . '("' . $_SESSION['message'] . '",{timeOut: 20000});'; ?>
    </script>

    <?php
    unset($_SESSION['action']);
    unset($_SESSION['message']);
    unset($_SESSION['option']);
}
?>
<!-- //toastr -->
<script>
    $(document).ready(function () {
        $(".dropdown").hover(
            function () {
                $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                $(this).toggleClass('open');
            },
            function () {
                $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                $(this).toggleClass('open');
            }
        );
    });
</script>
<!-- //Bootstrap Core JavaScript -->
<!-- here stars scrolling icon -->
<script type="text/javascript">
    $(document).ready(function () {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

        $().UItoTop({easingType: 'easeOutQuart'});

    });
</script>
<!-- //here ends scrolling icon -->
</body>
</html>