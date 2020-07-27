<br><br>
<br><br>
<div class="mb-3"></div>
<main>
  <div class="container-fluid mt-5 mb-5">

    <!-- Grid row -->
    <div class="row" style="margin-top: -150px;">

      <!-- Grid column -->
      <div class="col-md-12">

        <!-- Card -->
        <div class="card hoverable pb-5 mx-md-3">

          <div class="card-body">

            <div class="container">
              <input type="hidden" id="evntid" value="<?= $detail_event['id']; ?>">
              <!-- Section heading -->
              <h1 class="text-center h1 pt-4 mb-3">
                <strong><?= strtoupper($detail_event['nama']); ?></strong>
              </h1>

              <figure>
                <a href="<?= base_url('assets/fhoto/') . $detail_event['f']; ?>" data-size="1600x1067">
                  <img class="img-fluid zoom" src="<?= base_url('assets/fhoto/') . $detail_event['f']; ?>" alt="uks dispendik kota surabaya" style="width:100%">
                </a>
              </figure>
            </div>

            <div class="row">

              <div class="col-md-12 col-xl-12 d-flex justify-content-center">

                <p class="font-small dark-grey-text mb-1">

                  <!-- <strong>Author:</strong> <i> UKS DISPENDIK SBY</p> -->

                  <p style="font-size: 16px;" class="font-small grey-text mb-0 ml-3">
                    <span class="badge badge-pill btn-fb">
                      <i class="far fa-clock-o dark-grey-text"></i> <?= longdate_indo($detail_event['tgl_mulai']); ?> - <?= longdate_indo($detail_event['tgl_selesai']); ?>
                    </span>
                  </p>

              </div>



            </div>

            <!-- Grid row -->
            <div class="row pt-5">

              <!-- Grid column -->
              <div class="col-md-12 col-xl-12">
                <div class="row">
                  <div class="col-lg-8">
                    <!-- Grid row -->
                    <div class="row mt-3">
                      <div class="container-fluid">
                        <?= $detail_event['deskripsi']; ?>
                      </div>
                    </div>
                  </div>
                  <!-- Grid row -->
                  <div class="col-lg-4">
                    <div class="view view-cascade card border-info mt-3">
                      <div class="card">
                        <div class="container-fluid mb-3 mt-3">
                          <div class="row">
                            <div class="col-sm-4 mb-2">
                              <span class="badge badge-pill z-depth-0 blue-gradient"><i class="fad fa-user-friends ml-2 mr-1 mt-1 mb-1" aria-hidden="true"></i><strong><?= $jml; ?></strong> <span class="mr-2"> Peserta</span></span>
                            </div>
                            <div class="col-sm-8">
                              <form class="form-inline active-cyan-4 justify-content-end">
                                <input class="form-control form-control-sm mr-3 w-75" id="capes" type="text" placeholder="Search" aria-label="Search">
                              </form>
                            </div>
                          </div>
                        </div>
                        <ul class="list-group list-group-flush overflow-auto" id="psrt">
                          <!-- <div class="" id=""> -->
                          <?= $psrt; ?>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>

                <hr>
                <!-- Grid row -->
                <div class="row">

                  <!-- Grid column -->
                  <div class="col-md-12 text-center">
                    <h4 class="text-center font-weight-bold dark-grey-text mt-3">
                      <strong>Share Event ini: </strong>
                    </h4>
                    <a href="https://www.facebook.com/share.php?title=&u=<?= urldecode(base_url('events/detail/')) . $detail_event['id'] ?>" type="button" class="btn btn-rounded btn-fb btn-sm">
                      <i class="fab fa-facebook-f left"></i> Facebook</a>
                  </div>
                  <!-- Grid column -->

                </div>
                <!-- Grid row -->

              </div>
              <!-- Grid column -->

            </div>
            <!-- Grid row -->

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </div>
      <!-- Card -->

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</main>
<!-- Main Layout -->


<!-- Central Modal Warning Demo-->
<div class="modal fade left" id="modaldetail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="false" aria-hidden="true">
  <div class="modal-dialog modal-notify modal-full-height modal-left" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      <div class="mt-3 text-center">
        <span class="btn btn-outline-info btn-rounded"><strong>Detail Peserta</strong></span>
      </div>
      <hr>
      <div class="divider"></div>

      <!--Body-->
      <div class="modal-body">

        <!-- <div class="card card-cascade narrower"> -->
        <div class="view view-cascade border-info card  mt-3 mb-3 z-depth-3">
          <div class="card">
            <div class="container-fluid mt-3 mb-3">
              <figure>
                <a id="aicon" href="" data-size="1440x720">
                  <img id="mdicon" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(1).jpg" alt="Peserta event uks" class="img-fluid hoverable rounded">
                </a>
              </figure>
              <div class="row">
                <div class="col mt-2">
                  <span class="title mb-0" id="mdnama">amsbjh</span>
                  <p style="font-size: 13px">Nisn : <i class="text-muted" id="mdnisn"></i></p>
                </div>
              </div>
              <div class="row">
                <div class="col-sm">
                  <span class="badge badge-info">e-mail</span><br><span class="card-text" style="font-style: italic;" id="mdemail">akjhjkashjkn</span><br>
                  <span class="badge badge-info">Alamat</span><br>
                  <p id="mdalamat"></p>
                </div>
              </div>
            </div>
          </div>
          <!-- </div> -->
        </div>
      </div>

      <!--Footer-->
      <div class="modal-footer justify-content-center">
        <a type="button" class="btn btn-outline-info btn-rounded waves-effect" data-dismiss="modal">Tutup</a>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- Central Modal Warning Demo-->


<script type="text/javascript">
  $(document).ready(function() {
    var id = $('#evntid').val();
    $("#capes").autocomplete({
      source: "<?= base_url('Events/search/') ?>" + id + "/",
      select: function(e, ui) {
        // alert("selected!" + ui.item.nisn);
        $('#modaldetail').modal('show');
        $('#mdnama').html(ui.item.value);
        $('#mdnisn').html(ui.item.nisn);
        $('#mdicon').attr("src", "<?= base_url('assets/fhoto/data_master/') ?>" + ui.item.fhoto);
        $('#aicon').attr("href", "<?= base_url('assets/fhoto/data_master/') ?>" + ui.item.fhoto);
        $('#mdemail').html(ui.item.email);
        $('#mdalamat').html(ui.item.alamat);
      },
    });
  });
</script>