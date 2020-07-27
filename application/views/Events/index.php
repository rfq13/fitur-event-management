<main>

  <div class="container-fluid">

    <section class="mt-md-4 pt-md-2 mb-5 pb-4">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
          <div class="card card-cascade cascading-admin-card">
            <div class="admin-up">
              <i class="far fa-money-bill-alt primary-color mr-3 z-depth-2"></i>
              <div class="data">
                <p class="text-uppercase">sales</p>
                <h4 class="font-weight-bold dark-grey-text">2000$</h4>
              </div>
            </div>
            <div class="card-body card-body-cascade">
              <div class="progress mb-3">
                <div class="progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <p class="card-text">Better than last week (25%)</p>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- Section: Main panel -->
    <section class="mb-5">

      <!-- Card -->
      <div class="card card-cascade narrower">

        <!-- Section: Chart -->
        <section>

          <!-- Grid row -->
          <div class="row">

            <!-- Grid column -->
            <div class="col-xl-8 col-lg-12 mr-0 pb-2">
              <div class="view view-cascade card border-info mt-3 mb-3">
                <div class="card">
                  <div class="view view-cascade gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-end align-items-end mt-3"><a onclick="modal()" class="btn-floating btn-sm blue-gradient"><i class="fas fa-plus-circle"></i></a>
                  </div>
                  <div class="container-fluid mb-3">
                    <div id="calendar"></div>
                  </div>
                </div>
              </div>

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-xl-4 col-lg-12 mb-4 ">
              <!-- Chart -->
              <div class="view view-cascade card border-info mt-3">
                <div class="card">
                  <div class="container-fluid mb-3 mt-3">
                    <span class="badge badge-pill badge-primary"><small class="text-uppercase font-weight-bolder">On Coming</small><i class="fad fa-hourglass-half ml-2 mr-1 mt-1 mb-1" aria-hidden="true"></i></span>
                  </div>
                  <ul class="list-group list-group-flush overflow-auto" id="oncoming">
                    <li class="list-group-item">
                      <div class="d-flex w-100 justify-content-between">
                        Cras justo odio
                        <small>
                          3d ago
                          <i class="fab fa-angrycreative"></i>
                        </small>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="d-flex w-100 justify-content-between">
                        Cras justo odio
                        <small>
                          3d ago
                          <i class="fab fa-angrycreative"></i>
                        </small>
                      </div>
                    </li>
                    <li class="list-group-item">
                      <div class="d-flex w-100 justify-content-between">
                        Cras justo odio
                        <small>
                          3d ago
                          <i class="fab fa-angrycreative"></i>
                        </small>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row -->
        </section>
        <!-- Section: Chart -->

        <!-- Section: Card -->
        <section>
          <div class="card border-info mb-3 mr-3 ml-3">
            <div class="container-fluid">
              <div class="mb-3"></div>
              <div class="row" id="card_event">
                <div class="col-xl-3 col-lg-12 mb-4 ">
                  <!-- Chart -->
                  <!-- Card -->
                  <div class="card promoting-card">

                    <!-- Card content -->
                    <div class="card-body d-flex flex-row">

                      <!-- Avatar -->
                      <img src="https://mdbootstrap.com/img/Photos/Avatars/avatar-8.jpg" class="rounded-circle mr-3" height="50px" width="50px" alt="avatar">

                      <!-- Content -->
                      <div>

                        <!-- Title -->
                        <h4 class="card-title font-weight-bold mb-2">New spicy meals</h4>
                        <!-- Subtitle -->
                        <p class="card-text"><i class="far fa-clock pr-2"></i>07/24/2018</p>

                      </div>

                    </div>

                    <!-- Card image -->
                    <div class="view overlay">
                      <img class="card-img-top rounded-0" src="https://mdbootstrap.com/img/Photos/Horizontal/Food/full page/2.jpg" alt="Card image cap">
                      <a href="#!">
                        <div class="mask rgba-white-slight"></div>
                      </a>
                    </div>

                    <!-- Card content -->
                    <div class="card-body">

                      <div class="collapse-content">

                        <!-- Text -->
                        <p class="card-text collapse" id="collapseContent">Recently, we added several exotic new dishes to our restaurant menu. They come from countries such as Mexico, Argentina, and Spain. Come to us, have some delicious wine and enjoy our juicy meals from around the world.</p>
                        <!-- Button -->
                        <a class="btn btn-flat red-text p-1 my-1 mr-0 mml-1 collapsed" data-toggle="collapse" href="#collapseContent" aria-expanded="false" aria-controls="collapseContent"></a>
                        <i class="fas fa-share-alt text-muted float-right p-1 my-1"></i>
                        <i class="fas fa-heart text-muted float-right p-1 my-1 mr-3"></i>

                      </div>

                    </div>

                  </div>
                  <!-- Card -->

                </div>
              </div>


            </div>
            <div class="mt-3"></div>
          </div>

        </section>
        <!--Section: Table-->
        <div class="container">
          <div id="link_page"></div>
        </div>
      </div>
      <!-- Card -->

    </section>
    <!-- Section: Main panel -->

  </div>

</main>
<script>
  function modal() {

    $('#modalEvent').modal('show');
    $('#jenis').prop('selectedIndex', 0);
    $('#status').prop('selectedIndex', 0);
    $('.editbtn').hide();
    $('.addbtn').show();
    $('.resetbtn').show();
    $('#form_tambah_event')[0].reset();
    $('#form_tambah_event').off('submit').on('submit', function(event) {
      event.preventDefault();
      if (confirm('Tanggal Event : ' + $('#mulai').val() + ' >> ' + $('#selesai').val() + '\nPendaftaran : ' + $('#buka').val() + ' >> ' + $('#tutup').val() + '\nApakah data yang anda masukkan sudah sesuai?')) {


        $.ajax({
          url: "<?= base_url('Events/add'); ?>",
          method: "POST",
          data: new FormData(this),
          processData: false,
          contentType: false,
          cache: false,
          async: false,
          dataType: "json",
          beforeSend: function() {
            $('#publish').attr('disabled', 'disabled');
          },
          success: function(data) {
            if (data.error) {
              if (data.judul_error != '') {
                $('#judul_error').html(data.judul_error);
              } else {
                $('#judul_error').html('');
              }
              if (data.deskripsi_error != '') {
                $('#deskripsi_error').html(data.deskripsi_error);
              } else {
                $('#deskripsi_error').html('');
              }
              if (data.gambar_error != '') {
                $('#gambar_error').html(data.gambar_error);
              } else {
                $('#gambar_error').html('');
              }
              if (data.buka_error != '') {
                $('#buka_error').html(data.buka_error);
              } else {
                $('#buka_error').html('');
              }
              if (data.tutup_error != '') {
                $('#tutup_error').html(data.tutup_error);
              } else {
                $('#tutup_error').html('');
              }
              if (data.mulai_error != '') {
                $('#mulai_error').html(data.mulai_error);
              } else {
                $('#mulai_error').html('');
              }
              if (data.selesai_error != '') {
                $('#selesai_error').html(data.selesai_error);
              } else {
                $('#selesai_error').html('');
              }
              if (data.kuota_error != '') {
                $('#kuota_error').html(data.kuota_error);
              } else {
                $('#kuota_error').html('');
              }
              if (data.jenis_error != '') {
                $('#jenis_error').html(data.jenis_error);
              } else {
                $('#jenis_error').html('');
              }
              if (data.status_error != '') {
                $('#status_error').html(data.status_error);
              } else {
                $('#status_error').html('');
              }
            }
            if (data.success) {

              $('#success_message').html(data.success);
              $('#judul_error').html('');
              $('#deskripsi_error').html('');
              $('#buka_error').html('');
              $('#tutup_error').html('');
              $('#mulai_error').html('');
              $('#selesai_error').html('');
              $('#kuota_error').html('');
              $('#jenis_error').html('');
              $('#status_error').html('');
              $("#gambar_error").html('');
              $('#jenis').prop('selectedIndex', 0);
              $('#status').prop('selectedIndex', 0);
              $(".dropify-clear").trigger("click");

              calendar.fullCalendar('refetchEvents');
              oncoming();
              load_events(1);
              $('#form_tambah_event')[0].reset();
              $('#publish').attr('disabled', false);
            }

          },
          error: function(jqXHR, textStatus, errorThrown) {
            alert("Gagal memproses");
            return false;
          }
        });
      }
    });
  }

  $(document).ready(function() {

    var calendar = $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay'
      },
      events: "<?= base_url(); ?>fullcalendar/load",

      selectable: true,
      selectHelper: true,
      select: function(start, end, allDay) {
        if (start.isBefore(moment())) {
          $('#calendar').fullCalendar('unselect');
          return false;
        }
        $('#modalEvent').modal('show');
        $('#jenis').prop('selectedIndex', 0);
        $('#status').prop('selectedIndex', 0);
        $('.editbtn').hide();
        $('.addbtn').show();
        $('.resetbtn').show();
        $('#form_tambah_event')[0].reset();
        $('#mulai').val($.fullCalendar.formatDate(start, "Y-MM-DD"));
        $('#selesai').val($.fullCalendar.formatDate(end, "Y-MM-DD"));
        $('#form_tambah_event').off('submit').on('submit', function(event) {
          event.preventDefault();
          if (confirm('Tanggal Event : ' + $('#mulai').val() + ' >> ' + $('#selesai').val() + '\nPendaftaran : ' + $('#buka').val() + ' >> ' + $('#tutup').val() + '\nApakah data yang anda masukkan sudah sesuai?')) {


            $.ajax({
              url: "<?= base_url('Events/add'); ?>",
              method: "POST",
              data: new FormData(this),
              processData: false,
              contentType: false,
              cache: false,
              async: false,
              dataType: "json",
              beforeSend: function() {
                $('#publish').attr('disabled', 'disabled');
              },
              success: function(data) {
                if (data.error) {
                  if (data.judul_error != '') {
                    $('#judul_error').html(data.judul_error);
                  } else {
                    $('#judul_error').html('');
                  }
                  if (data.deskripsi_error != '') {
                    $('#deskripsi_error').html(data.deskripsi_error);
                  } else {
                    $('#deskripsi_error').html('');
                  }
                  if (data.gambar_error != '') {
                    $('#gambar_error').html(data.gambar_error);
                  } else {
                    $('#gambar_error').html('');
                  }
                  if (data.buka_error != '') {
                    $('#buka_error').html(data.buka_error);
                  } else {
                    $('#buka_error').html('');
                  }
                  if (data.tutup_error != '') {
                    $('#tutup_error').html(data.tutup_error);
                  } else {
                    $('#tutup_error').html('');
                  }
                  if (data.mulai_error != '') {
                    $('#mulai_error').html(data.mulai_error);
                  } else {
                    $('#mulai_error').html('');
                  }
                  if (data.selesai_error != '') {
                    $('#selesai_error').html(data.selesai_error);
                  } else {
                    $('#selesai_error').html('');
                  }
                  if (data.kuota_error != '') {
                    $('#kuota_error').html(data.kuota_error);
                  } else {
                    $('#kuota_error').html('');
                  }
                  if (data.jenis_error != '') {
                    $('#jenis_error').html(data.jenis_error);
                  } else {
                    $('#jenis_error').html('');
                  }
                  if (data.status_error != '') {
                    $('#status_error').html(data.status_error);
                  } else {
                    $('#status_error').html('');
                  }
                }
                if (data.success) {

                  $('#success_message').html(data.success);
                  $('#judul_error').html('');
                  $('#deskripsi_error').html('');
                  $('#buka_error').html('');
                  $('#tutup_error').html('');
                  $('#mulai_error').html('');
                  $('#selesai_error').html('');
                  $('#kuota_error').html('');
                  $('#jenis_error').html('');
                  $('#status_error').html('');
                  $("#gambar_error").html('');
                  $('#jenis').prop('selectedIndex', 0);
                  $('#status').prop('selectedIndex', 0);
                  $(".dropify-clear").trigger("click");

                  calendar.fullCalendar('refetchEvents');
                  load_events(1);
                  oncoming();
                  $('#form_tambah_event')[0].reset();
                }
                $('#publish').attr('disabled', false);

              },
              error: function(jqXHR, textStatus, errorThrown) {
                alert("Gagal memproses");
                return false;
              }
            });
          }
        });
      },
      // editable: true,
      eventLimit: true, // for all non-TimeGrid views
      views: {
        timeGrid: {
          eventLimit: 4 // adjust to 6 only for timeGridWeek/timeGridDay
        }
      },
      eventClick: function(event) {
        var id = event.id;
        location.href = "<?= base_url('events/edit/'); ?>" + id;
      }
    });


    oncoming();

    function oncoming() {
      $.get('<?= base_url(); ?>Events/oncoming', function(data) {
        $('#oncoming').html(data);
      })
    }

    load_events(1);

    function load_events(hal) {
      $.ajax({
        url: "events/load_events/" + hal,
        method: 'GET',
        dataType: 'json',
        success: function(data) {
          $('#card_event').html(data.card_event);
          $('#link_page').html(data.link_page_event);
        }
      });
    }

    $(document).on("click", ".pagination li a", function(event) {
      event.preventDefault();
      var page = $(this).data("ci-pagination-page");
      load_events(page);
    });

    $(".mdb-select").materialSelect();




  });
</script>