<footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
        <b>One Movies</b> by:<span style="color:#dc3545">Younes Mahmoud</span>
    </div>
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="<?php echo HOST; ?>dashboard/includes/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo HOST; ?>dashboard/includes/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo HOST; ?>dashboard/includes/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo HOST; ?>dashboard/includes/dist/js/adminlte.js"></script>
<script type="text/javascript" src="<?php echo HOST; ?>dashboard/includes/plugins/toastr/toastr.min.js"></script>
<?php if (isset($_SESSION['action']) && $_SESSION['action'] == true) { ?>
    <script>
        toastr.options.closeButton = true;
        <?php echo 'toastr.'.$_SESSION['option'] . '("' . $_SESSION['message'] . '",{timeOut: 10000});'; ?>
    </script>

    <?php
    unset($_SESSION['action']);
    unset($_SESSION['message']);
    unset($_SESSION['option']);
}
if (isset($scripts)) {
    echo $scripts;
}; ?>

</body>

</html>

<?php

if (isset($con)) {
    $con->close();
}
?>