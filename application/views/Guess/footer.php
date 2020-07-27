<!-- Footer -->
<footer class="page-footer font-small special-color-dark pt-4">

    <!-- Footer Elements -->
    <div class="container" id="admin">

        <!--Grid row-->
        <div class="row">

            <!--Grid column-->
            <div class="col-md mb-4 ">
                <H4><strong>LOGIN ADMIN</strong></H4>
            </div>
            <div class="col-md mb-4 ">

                <!-- Form -->
                <form class="form-inline col-sm">
                    <div class="row">
                        <input class="form-control col-sm-4 mr-2" type="text" placeholder="username" aria-label="Username">
                        <input class="form-control col-sm-4" type="password" placeholder="password" aria-label="Password">
                        <div class="input-group-append">
                            <a href="<?= base_url(); ?>" class="btn btn-sm btn-outline-white my-0" type="button">Sign up</a>
                        </div>
                    </div>
                    <!-- <i class="fas fa-search" aria-hidden="true"></i> -->
                </form>
                <!-- Form -->

            </div>
            <!--Grid column-->
            <!--Grid column-->

        </div>
        <!--Grid row-->

    </div>
    <!-- Footer Elements -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© <?= date('Y'); ?> Copyright:
        <a href="<?= base_url('Guess'); ?>"> Dispendik SBY.com</a>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->

<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="<?= base_url('assets/guess') ?>/js/jquery-3.4.1.min.js"></script>
<!--  Bootstrap tooltips  -->
<script type="text/javascript" src="<?= base_url('assets/guess') ?>/js/popper.min.js"></script>
<!--  Bootstrap core JavaScript  -->
<script type="text/javascript" src="<?= base_url('assets/guess') ?>/js/bootstrap.min.js"></script>
<!--  MDB core JavaScript  -->
<script type="text/javascript" src="<?= base_url('assets/guess') ?>/js/mdb.min.js"></script>

<!-- Your custom scripts (optional) -->
<script type="text/javascript">
    // Material Select Initialization
    $(document).ready(function() {
        $('.mdb-select').materialSelect();
        $('.select-wrapper.md-form.md-outline input.select-dropdown').bind('focus blur', function() {
            $(this).closest('.select-outline').find('label').toggleClass('active');
            $(this).closest('.select-outline').find('.caret').toggleClass('active');
        });
    });
</script>
</body>

</html>