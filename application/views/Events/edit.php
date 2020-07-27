<script type="text/javascript" src="<?= base_url(); ?>assets/js/tinymce/js/tinymce/tinymce.min.js"></script>
<script>
  tinymce.init({
    selector: '#post_content',
    height: "300",
    plugins: "lists wordcount"
  });
</script>
<script type="text/javascript" src="<?php echo base_url() . 'assets/dropify/dist/js/dropify.min.js' ?>"></script>
<script>
  $(function() {
    $('.datepicker').pickadate({
      weekdaysShort: ['Ming', 'Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab'],
      showMonthsShort: true,
      formatSubmit: 'yyyy/mm/dd'
    });
    $('.datepicker').removeAttr('readonly');
  });
</script>
<br><br><br>
<div class="container-fluid">

  <form role="form" id="form_edit_event" enctype="multipart/form-data">

    <div class="modal-body">
      <!-- Grid row -->
      <div class="row">
        <!-- Grid column -->
        <div class="col-lg-8">
          <div id="success_message"></div>
          <!-- First card -->
          <div class="card mb-4 post-title-panel">
            <div class="card-body">
              <div class="md-form mt-1 mb-0">
                <input type="hidden" name="idevent" value="<?= $detail_event['id']; ?>">
                <input type="text" id="nama_event" name="nama_event" class="form-control" value="<?= $detail_event['nama']; ?>">
                <label class="form-check-label" for="nama" class="">Judul Event</label>
              </div>
              <small class="text-danger" id="judul_error"></small>
            </div>
          </div>
          <!-- First card -->
          <div class="mt-4">
            <!-- Second card -->
            <div class="card">
              <div class="container-fluid">
                <h5 class="text-center mt-3"><strong> Deskripsi Event</strong></h5>
                <div class="mb-3">
                  <textarea class="form-control" name="deskripsi" id="post_content"><?= $detail_event['deskripsi'] ?></textarea>
                  <small class="text-danger" id="deskripsi_error"></small>
                </div>
              </div>
            </div>

            <!-- Second card -->
          </div>


        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-lg-4">

          <!-- Card -->
          <div class="row">
            <div class="card card-cascade narrower mr-2">

              <!-- Card image -->
              <div class="view view-cascade gradient-card-header blue-gradient">
                <h4 class="font-weight-500 mb-0">Publish</h4>
              </div>
              <!-- Card image -->

              <!-- Card content -->
              <div class="card-body card-body-cascade">

                <div class="row">
                  <!-- mdb -->

                  <input type="hidden" name="old_img" value="<?= $detail_event['f']; ?>">
                  <!-- upload gambar -->
                  <div class="col-sm-12">
                    <input type="file" class="custom-file-input" data-min-height="825" data-min-width="2039" data-max-height="827" data-default-file="<?= base_url() . 'assets/fhoto/' . $detail_event['f'] ?>" data-max-width="2041" data-allowed-file-extensions="jpg jpeg png" data-max-file-size="3080K" name="file_gambar" id="file_gambar">
                    <small id="gkosong" class="grey-text text-monospace text-small font-italic">*Pastikan gambar berdimensi 2040 x 826 pixel</small>
                  </div>
                  <!-- upload gambar -->
                </div>
                <hr>
                <div class="row">
                  <div class="input-group">
                    <div class="col-sm-6">
                      <input type="text" class="form-control custom-select custom-select-sm datepicker" value="<?= $detail_event['tgl_buka_pendaftaran'] ?>" name="buka" id="buka" placeholder="Tgl buka" autocomplete="off">
                      <small class="text-danger" id="buka_error"></small>
                    </div>

                    <div class="col-sm-6">
                      <input type="text" class="form-control custom-select custom-select-sm datepicker" name="tutup" id="tutup" placeholder="Tgl tutup" value="<?= $detail_event['tgl_tutup_pendaftaran'] ?>" autocomplete="off">
                      <small class="text-danger" id="tutup_error"></small>
                    </div>
                  </div>

                  <div class="input-group mt-2">
                    <div class="col-sm-6">
                      <input type="text" class="form-control custom-select custom-select-sm datepicker" value="<?= $detail_event['tgl_mulai'] ?>" name="mulai" id="mulai" placeholder="Tgl Mulai" autocomplete="off">
                      <small class="text-danger" id="mulai_error"></small>
                    </div>

                    <div class="col-sm-6">
                      <input type="text" class="form-control custom-select custom-select-sm datepicker" name="selesai" id="selesai" value="<?= $detail_event['tgl_selesai'] ?>" placeholder="Tgl Selesai" autocomplete="off">
                      <small class="text-danger" id="selesai_error"></small>
                    </div>
                  </div>
                  <!--Dropdown primary-->
                </div>


                <hr>
                <div class="row">
                  <div class="col-lg-12">
                    <input type="number" class="form-control col" id="kuota" name="kuota" value="<?= $detail_event['kuota'] ?>" placeholder="kuota">
                    <small class="text-danger" id="kuota_error"></small>
                  </div>

                  <br>
                  <!-- mdb -->
                  <div class="input-group mt-2">
                    <div class="col-lg-6">
                      <select class="custom-select custom-select-sm mr-2" name="jenis" id="jenis">
                        <option value="" disabled>Kategori</option>
                        <?php foreach ($jenis as $j) : ?>
                          <?php if ($j['id'] == $detail_event['jenis']) : ?>
                            <option value="<?= $j['id']; ?>" selected><?= $j['jenis']; ?></option>
                          <?php else : ?>
                            <option value="<?= $j['id']; ?>"><?= $j['jenis']; ?></option>
                          <?php endif; ?>
                        <?php endforeach; ?>
                      </select>
                      <small class="text-danger" id="jenis_error"></small>
                    </div>

                    <div class="col-lg-6">
                      <select class="custom-select custom-select-sm" name="status" id="status">
                        <option value="" disabled>Status</option>
                        <?php foreach ($this->db->get('status')->result_array() as $s) : ?>
                          <?php if ($s['id'] == $detail_event['status']) : ?>
                            <option value="<?= $s['id']; ?>" selected><?= $s['status']; ?></option>
                          <?php else : ?>
                            <option value="<?= $s['id']; ?>"><?= $s['status']; ?></option>
                          <?php endif; ?>
                        <?php endforeach; ?>
                      </select>
                      <small class="text-danger" id="status_error"></small>
                    </div>

                  </div>

                  <!--Dropdown primary-->
                </div>

              </div>
              <div class="card-footer">
                <div class="text-right">
                  <a href="<?php echo base_url() . 'Events/hapus/' . $detail_event['id'] ?>" onclick="return confirm('yakin menghapus event?')" class="btn btn-sm btn-rounded btn-danger waves-effect"><strong>hapus</strong></a>
                  <button type="submit" id="editbtn" class="btn blue-gradient btn-sm btn-rounded"><strong>Simpan</strong></button>
                </div>
              </div>
              <!-- Card content -->

            </div>
            <!-- Card -->
          </div>


        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </form>
</div>

<script>
</script>
<script type="text/javascript">
  $("#file_gambar").addClass('dropify');
  $('.dropify').dropify({
    messages: {
      'default': '<font face="Tahoma" size="4">Seret & Lepas Gambar disini</font>',
      'replace': 'Ganti',
      'remove': 'Hapus',
      'error': 'error'
    }
  });
</script>
<script type="text/javascript">
  $('#form_edit_event').off('submit').on('submit', function(event) {
    tinyMCE.triggerSave();
    var form = $('#form_edit_event')[0];
    var data = new FormData(form);
    event.preventDefault();
    $.ajax({
      url: "<?= base_url('Events/update'); ?>",
      method: "POST",
      data: data,
      processData: false,
      contentType: false,
      cache: false,
      async: false,
      dataType: "json",
      // beforeSend: function() {
      //   $('#editbtn').attr('disabled', 'disabled');
      // },
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
          $('#editbtn').attr('disabled', false);
        }
      }
    })
  });
</script>