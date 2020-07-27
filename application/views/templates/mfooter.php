<!-- Footer -->
<footer class="page-footer stylish-color-dark mt-4 pt-4">

  <!-- Footer Links -->
  <div class="container-fluid">
    <div class="row py-3 d-flex align-items-center">

      <!-- Grid column -->
      <div class="col-md-7 col-lg-8">

        <!-- Copyright -->
        <p class="text-center text-md-left grey-text">

          © 2019 Copyright: <a href="<?= base_url() ?>" target="_blank"> myUKS.crt

          </a>

        </p>
        <!-- Copyright -->

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-5 col-lg-4 ml-lg-0">

        <!-- Social buttons -->
        <div class="social-section text-center mr-auto text-md-left">

          <ul class="list-unstyled list-inline">

            <li class="list-inline-item">

              <a class="btn-floating btn-sm rgba-white-slight">

                <i class="fab fa-facebook-f"></i>

              </a>

            </li>

            <li class="list-inline-item">

              <a class="btn-floating btn-sm rgba-white-slight">

                <i class="fab fa-twitter"></i>

              </a>

            </li>

            <li class="list-inline-item">

              <a class="btn-floating btn-sm rgba-white-slight">

                <i class="fab fa-google-plus-g"></i>

              </a>

            </li>

            <li class="list-inline-item">

              <a class="btn-floating btn-sm rgba-white-slight">

                <i class="fab fa-linkedin-in"></i>

              </a>

            </li>

          </ul>

        </div>
        <!-- Social buttons -->

      </div>
      <!-- Grid column -->

    </div>

  </div>

</footer>
<!-- Footer -->

<!-- SCRIPTS -->
<!-- JQuery -->

<!-- Tooltips -->



<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.4.0/umd/popper.min.js"></script>
<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/js/mdb.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
<script type="text/javascript" src="<?= base_url() . 'assets/dropify/dist/js/dropify.min.js' ?>"></script>

<script type="text/javascript" src="<?= base_url(); ?>assets/js/script.js"></script>
<script>
  // SideNav Initialization
  $(".button-collapse").sideNav();

  var container = document.querySelector('.custom-scrollbar');
  var ps = new PerfectScrollbar(container, {
    wheelSpeed: 2,
    wheelPropagation: true,
    minScrollbarLength: 20
  });
  // Tooltips Initialization
  $(function() {
    $('[data-toggle="tooltip"]').tooltip()
  })
</script>
</body>

</html>