<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">
<!-- modalku -->
<script type="text/javascript" src="<?= base_url(); ?>assets/js/tinymce/js/tinymce/tinymce.min.js"></script>
<script>
  tinymce.init({
    selector: '#post_content',
    height: "300",
    plugins: "lists wordcount"
  });
</script>
<style>
  .datepicker {
    z-index: 1151;
  }
</style>




<!-- Central Modal Small -->
<div class="modal fade" id="modalEvent" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

  <!-- Change class .modal-sm to change the size of the modal -->
  <div class="modal-dialog modal-full-height modal-top" role="document">
    <div class="modal-content">
      <div class="modal-header">

        <div id="pesan"></div>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <script>
        //buka tutup
        $(function() {
          var buka_input = $('#buka').pickadate({
              format: 'dd mmm, yyyy',
              formatSubmit: 'dd/mm/yyyy',
              hiddenPrefix: 'prefix__',
              hiddenSuffix: '__suffix'
            }),
            buka_picker = buka_input.pickadate('picker')
          var tutup_inp = $('#tutup').pickadate({
              format: 'dd mmm, yyyy',
              formatSubmit: 'dd/mm/yyyy',
              hiddenPrefix: 'prefix__',
              hiddenSuffix: '__suffix'
            }),
            ttup_pick = tutup_inp.pickadate('picker')

          // Check if there’s a “from” or “to” date to start with and if so, set their appropriate properties.
          if (buka_picker.get('value')) {
            ttup_pick.set('min', buka_picker.get('select'))
          }
          if (ttup_pick.get('value')) {
            buka_picker.set('max', ttup_pick.get('select'))
          }

          // Apply event listeners in case of setting new “from” / “to” limits to have them update on the other end. If ‘clear’ button is pressed, reset the value.
          buka_picker.on('set', function(event) {
            if (event.select) {
              ttup_pick.set('min', buka_picker.get('select'))
            } else if ('clear' in event) {
              ttup_pick.set('min', false)
            }
          })
          ttup_pick.on('set', function(event) {
            if (event.select) {
              buka_picker.set('max', ttup_pick.get('select'))
            } else if ('clear' in event) {
              buka_picker.set('max', false)
            }
          })
        });

        //tutup mulai
        $(function() {
          var tutup = $('#tutup').pickadate({
              format: 'dd,mm,yyyy',
              formatSubmit: 'dd/mm/yyyy',
              hiddenPrefix: 'prefix__',
              hiddenSuffix: '__suffix'
            }),
            tutup_picker = tutup.pickadate('picker')
          var mulai_input = $('#mulai').pickadate({
              // format: 'dd/mm/yyyy',
              formatSubmit: 'dd/mm/yyyy',
              hiddenPrefix: 'prefix__',
              hiddenSuffix: '__suffix'
            }),
            mulai_pick = mulai_input.pickadate('picker')

          // Check if there’s a “from” or “to” date to start with and if so, set their appropriate properties.
          if (tutup_picker.get('value')) {
            mulai_pick.set('min', tutup_picker.get('select'))
          }
          if (mulai_pick.get('value')) {
            tutup_picker.set('max', mulai_pick.get('select'))
          }

          // Apply event listeners in case of setting new “from” / “to” limits to have them update on the other end. If ‘clear’ button is pressed, reset the value.
          tutup_picker.on('set', function(event) {
            if (event.select) {
              mulai_pick.set('min', tutup_picker.get('select'))
            } else if ('clear' in event) {
              mulai_pick.set('min', false)
            }
          })
          mulai_pick.on('set', function(event) {
            if (event.select) {
              tutup_picker.set('max', mulai_pick.get('select'))
            } else if ('clear' in event) {
              tutup_picker.set('max', false)
            }
          })
        });

        $(function() {
          var mulai = $('#mulai').pickadate({
              format: 'dd,mm,yyyy',
              formatSubmit: 'dd/mm/yyyy',
              hiddenPrefix: 'prefix__',
              hiddenSuffix: '__suffix'
            }),
            mulai_picker = mulai.pickadate('picker')
          var selesai = $('#selesai').pickadate({
              // format: 'dd/mm/yyyy',
              formatSubmit: 'dd/mm/yyyy',
              hiddenPrefix: 'prefix__',
              hiddenSuffix: '__suffix'
            }),
            mulai_pick = selesai.pickadate('picker')

          // Check if there’s a “from” or “to” date to start with and if so, set their appropriate properties.
          if (mulai_picker.get('value')) {
            mulai_pick.set('min', mulai_picker.get('select'))
          }
          if (mulai_pick.get('value')) {
            mulai_picker.set('max', mulai_pick.get('select'))
          }

          // Apply event listeners in case of setting new “from” / “to” limits to have them update on the other end. If ‘clear’ button is pressed, reset the value.
          mulai_picker.on('set', function(event) {
            if (event.select) {
              mulai_pick.set('min', mulai_picker.get('select'))
            } else if ('clear' in event) {
              mulai_pick.set('min', false)
            }
          })
          mulai_pick.on('set', function(event) {
            if (event.select) {
              mulai_picker.set('max', mulai_pick.get('select'))
            } else if ('clear' in event) {
              mulai_picker.set('max', false)
            }
          })
        });
      </script>

      <br><br><br>
      <div class="container-fluid">

        <form action="<?= base_url('Events/tambah'); ?>" method="POST" id="form_tambah_event" enctype="multipart/form-data">

          <div class="modal-body">
            <!-- Grid row -->
            <div class="row">
              <!-- Grid column -->
              <div class="col-lg-8">
                <div id="success_message"></div>
                <input type="hidden" id="idevent">
                <!-- First card -->
                <div class="card mb-4 post-title-panel">
                  <div class="card-body">
                    <div class="md-form mt-1 mb-0">
                      <input type="text" id="nama_event" name="nama_event" class="form-control">
                      <label class="form-check-label" for="nama_event" class="">Judul Event</label>
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
                        <textarea name="deskripsi" id="post_content"></textarea>
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

                        <!-- upload gambar -->
                        <div class="col-sm-12">
                          <input type="file" class="custom-file-input" data-min-height="825" data-min-width="2039" data-max-height="827" data-max-width="2041" data-allowed-file-extensions="jpg jpeg png" data-max-file-size="3080K" name="file_gambar" id="file_gambar">
                          <small class="grey-text text-monospace text-small font-italic">*Pastikan gambar berdimensi 2040 x 826 pixel</small>
                        </div>
                        <!-- upload gambar -->
                      </div>
                      <hr>
                      <div class="row">
                        <div class="input-group">
                          <div class="col-sm-6">
                            <input type="text" class="form-control custom-select custom-select-sm" name="buka" id="buka" placeholder="Tgl buka" autocomplete="off">
                            <small class="text-danger" id="buka_error"></small>
                          </div>

                          <div class="col-sm-6">
                            <input type="text" class="form-control custom-select custom-select-sm" name="tutup" id="tutup" placeholder="Tgl tutup" autocomplete="off">
                            <small class="text-danger" id="tutup_error"></small>
                          </div>
                        </div>

                        <div class="input-group mt-2">
                          <div class="col-sm-6">
                            <input type="text" class="form-control custom-select custom-select-sm datepicker" name="mulai" id="mulai" placeholder="Tgl Mulai" autocomplete="off">
                            <small class="text-danger" id="mulai_error"></small>
                          </div>

                          <div class="col-sm-6">
                            <input type="text" class="form-control custom-select custom-select-sm datepicker" name="selesai" id="selesai" placeholder="Tgl Selesai" autocomplete="off">
                            <small class="text-danger" id="selesai_error"></small>
                          </div>
                        </div>
                        <!--Dropdown primary-->
                      </div>


                      <hr>
                      <div class="row">
                        <div class="col-lg-12">
                          <input type="number" class="form-control col" id="kuota" name="kuota" placeholder="kuota">
                          <small class="text-danger" id="kuota_error"></small>
                        </div>

                        <br>
                        <!-- mdb -->
                        <div class="input-group mt-2">
                          <div class="col-lg-6">
                            <select class="custom-select custom-select-sm mr-2" name="jenis" id="jenis">
                              <option value="" selected>Kategori</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                            </select>
                            <small class="text-danger" id="jenis_error"></small>
                          </div>

                          <div class="col-lg-6">
                            <select class="custom-select custom-select-sm" name="status" id="status">
                              <option value="" selected>Status</option>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                            </select>
                            <small class="text-danger" id="status_error"></small>
                          </div>

                        </div>

                        <!--Dropdown primary-->
                      </div>

                    </div>
                    <div class="card-footer">
                      <div class="text-right">
                        <button type="reset" class="btn btn-sm btn-rounded peach-gradient waves-effect resetbtn"><strong>Reset</strong></button>
                        <button type="submit" class="btn blue-gradient btn-sm btn-rounded addbtn"><strong>Publish</strong></button>
                        <button type="button" class="btn purple-gradient btn-sm btn-rounded editbtn" onclick=""><strong>Simpan</strong></button>
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

      <script type="text/javascript">
        $("#file_gambar").addClass('dropify');
        $('.dropify').dropify({
          messages: {
            'default': '<font face="Tahoma"  size="4">Seret & Lepas Gambar disini</font>',
            'replace': 'Ganti',
            'remove': 'Hapus',
            'error': 'error'
          }
        });
      </script>
    </div>
  </div>
</div>
<!-- Central Modal Small -->