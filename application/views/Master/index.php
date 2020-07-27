<style>
    .aedit {
        display: none;
    }

    .rowhover:hover .aedit {
        display: block;
    }
</style>

<!-- Main layout -->
<main>

    <div class="container-fluid">

        <!-- Magazine -->
        <div class="row">

            <!-- Main newsfeed -->
            <div class="col-xl-8 col-lg-8 col-md-12">

                <!-- Section: News -->
                <section>

                    <h5 class="dark-grey-text font-weight-bold">
                        <strong>DATA MASTER</strong>
                    </h5>
                    <br>
                    <div id="success_message"></div>
                    <div class="card card-cascade narrower z-depth-0 mt-3">

                        <div class="view view-cascade gradient-card-header blue-gradient narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center">

                            <form class=" mr-auto">
                                <div class="md-form form-inline my-0">
                                    <input class="form-control text-light" id="cari" type="text" placeholder="Search">
                                    <a href="#!" class="btn-floating  btn-sm blue-gradient" type="submit"><i class="fas fa-search"></i></a>
                                </div>
                            </form>

                            <div>
                                <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i class="fas fa-columns mt-0"></i></button>
                            </div>

                            <div>
                                <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i class="fas fa-eraser mt-0"></i></button>
                                <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2"><i class="fas fa-plus mt-0"></i></button>
                            </div>

                        </div>
                        <div class="px-12">
                            <div class="table-responsive container-fluid">

                                <!--Table-->
                                <table class="table table-hover mb-0">

                                    <!-- Table head -->
                                    <thead>
                                        <tr>
                                            <th class="th"><a>No</a></th>
                                            <th class="th-sm"><a>Nama</a></th>
                                            <th class="th-sm"><a>Email</a></th>
                                            <th class="th-sm"><a>Nama Sekolah</a></th>
                                            <th class="th-sm"><a>Alamat</a></th>
                                        </tr>
                                    </thead>
                                    <!-- Table head -->

                                    <!-- Table body -->
                                    <tbody id="tabel_master">

                                    </tbody>
                                    <!-- Table body -->

                                </table>
                                <!-- Table -->

                            </div>

                            <hr class="my-0">

                            <!-- Bottom Table UI -->
                            <div class="d-flex justify-content-center">
                                <!-- Pagination -->
                                <nav class="my-4" id="link_paginasi">
                                </nav>
                                <!-- Pagination -->

                            </div>
                            <!-- Bottom Table UI -->

                        </div>
                        <!-- Grid row -->
                    </div>


                </section>

            </div>
            <!-- Main newsfeed -->
        </div>
        <!-- Magazine -->

    </div>

</main>
<!-- Main layout -->
<div class="modal fade left" id="modaldetail" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-full-height modal-left" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="mt-3 text-center">
                <span class="btn btn-outline-info btn-rounded"><strong>Detail Peserta</strong></span>
            </div>

            <hr>
            <div class="divider">
                <a type="button" id="editm" data-toggle="modal" onclick="modalEdit()" data-target="modal_edit" class="btn btn-outline-info btn-rounded waves-effect"><i class="fas fa-map-marker-edit"></i></a></div>
            <!--Body-->
            <div class="modal-body">
                <div class="view view-cascade border-info card  mt-3 mb-3 z-depth-3">
                    <div class="card">
                        <div class="container-fluid mt-3 mb-3">
                            <figure>
                                <a href="" data-size="1440x720" data-toggle="modal" data-target="#modalfhoto">
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
                                <div class="col">
                                    <span class="badge badge-info z-depth-1">sekolah</span><br>
                                    <span class="title mb-0" style="font-size: 13px; text-decoration:underline;" id="mdsekolah">amsbjh</span>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-sm">
                                    <span class="badge badge-info z-depth-1">e-mail</span><br><span class="card-text" style="font-style: italic;" id="mdemail">akjhjkashjkn</span><br>
                                    <span class="badge badge-info z-depth-1">Alamat</span><br>
                                    <p id="mdalamat"></p>
                                </div>
                            </div>
                        </div>
                    </div>
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

<!-- modal fhoto -->

<!-- Central Modal Small -->
<div class="modal fade" id="modalfhoto" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <!-- Change class .modal-sm to change the size of the modal -->
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span class="badge badge-pill blue-gradient mt-2"><span aria-hidden="true">&times;</span></span>
            </button><br>
            <img id="mdfhoto" src="https://mdbootstrap.com/img/Photos/Slides/img%20(137).jpg" class="img-fluid z-depth-3" alt="Responsive image">
            <!-- </div> -->
        </div>
    </div>
</div>
<!-- Central Modal Small -->

<!-- modal edit -->

<!-- Central Modal Small -->
<div class="modal fade right" id="modal_edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <!-- Add class .modal-full-height and then add class .modal-right (or other classes from list above) to set a position to the modal -->
    <div class="modal-dialog modal-full-height modal-right" role="document">


        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title w-100" id="myModalLabel"><strong>Edit Data</strong></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="form_edit" enctype="multipart/form-data">
                <div class="modal-body">
                    <!-- Form -->
                    <div class="container-fluid">
                        <!-- Name -->
                        <div class="row">
                            <div class="col mb-lg-0 mb-4 text-center ">
                                <div class="md-form md-outline">
                                    <input type="text" name="nama" id="namaedit" class="form-control">
                                    <label for="namaedit">Name</label>
                                </div>
                                <small class="text-danger" id="nama_error"></small>
                                <input type="hidden" id="iddit" name="idedit">
                                <!-- E-mail -->
                                <div class="md-form md-outline">
                                    <input type="email" name="email" id="Emailedit" class="form-control">
                                    <label for="Emailedit">E-mail</label>
                                </div>
                                <small class="text-danger" id="email_error"></small>
                            </div>
                            <!-- Name -->
                            <div class="col mb-lg-0 mb-4 text-center">
                                <div class="md-form md-outline">
                                    <input type="text" name="nis" id="Nisedit" class="form-control">
                                    <label for="Nisedit">NISN</label>
                                </div>
                                <small class="text-danger" id="nis_error"></small>

                                <!-- E-mail -->
                                <div class="md-form md-outline">
                                    <input type="text" name="sekolah" id="Sekolahedit" class="form-control">
                                    <label for="Sekolahedit">Nama Sekolah</label>
                                </div>
                                <small class="text-danger" id="sekolah_error"></small>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-lg-0 mb-4 text-center">
                                <div class="md-form md-outline">
                                    <textarea id="Alamatedit" name="alamat" class="form-control md-textarea" rows="3"></textarea>
                                    <label for="Alamatedit">Alamat</label>
                                </div>
                                <small class="text-danger" id="alamat_error"></small>
                            </div>
                        </div>
                        <!--Message-->
                        <div class="row">
                            <div class="col-sm-12">
                                <input type="file" class="custom-file-input" data-min-height="825" data-min-width="2039" data-max-height="827" data-max-width="2041" data-allowed-file-extensions="jpg jpeg png" data-max-file-size="3080K" name="fhoto" id="fhoto" required>
                                <small class="grey-text text-monospace text-small font-italic">*Pastikan gambar berdimensi 2040 x 826 pixel</small>
                            </div>
                        </div>
                    </div>
                    <!-- Form -->
                </div>
                <div class="row justify-content-center">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-rounded btn-primary btn-sm">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Central Modal Small -->
<!-- modal edit -->
<script type="text/javascript" src="<?= base_url() . 'assets/dropify/dist/js/dropify.min.js' ?>"></script>
<script type="text/javascript">
    $('#fhoto').dropify({
        messages: {
            'default': '<font face="Tahoma"  size="4">Seret & Lepas Gambar disini</font>',
            'replace': 'Ganti',
            'remove': 'Hapus',
            'error': 'error'
        }
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $("#cari").autocomplete({
            source: "<?= base_url('Datamaster/search') ?>",
            select: function(e, ui) {
                $('#modaldetail').modal('show');
                $('#mdnama').html(ui.item.value);
                $('#mdnisn').html(ui.item.nisn);
                $('#mdicon').attr("src", "<?= base_url('assets/fhoto/data_master/') ?>" + ui.item.fhoto);
                $('#mdfhoto').attr("src", "<?= base_url('assets/fhoto/data_master/') ?>" + ui.item.fhoto);
                $('#mdemail').html(ui.item.email);
                $('#mdalamat').html(ui.item.alamat);
                $('#mdsekolah').html(ui.item.sekolah);
                $('#iddit').val(ui.item.id);
                $("#namaedit").val(ui.item.value);
                $("#Emailedit").val(ui.item.email);
                $("#Alamatedit").val(ui.item.alamat);
                $("#Sekolahedit").val(ui.item.sekolah);
                $("#Nisedit").val(ui.item.nisn);
            },
        });

    });

    function modalEdit() {
        $("#modal_edit").modal('show');
    }

    function kliknama(id) {
        $('#modaldetail').modal('show');
        $.ajax({
            url: "<?= base_url('Datamaster/tampil') ?>",
            method: 'post',
            dataType: 'json',
            data: 'id=' + id,
            success: function(data) {
                $('#mdnama').html(data.nama);
                $('#iddit').val(data.id);
                $('#mdnisn').html(data.nisn);
                $('#mdicon').attr("src", "<?= base_url('assets/fhoto/data_master/') ?>" + data.fhoto);
                $('#mdfhoto').attr("src", "<?= base_url('assets/fhoto/data_master/') ?>" + data.fhoto);
                $('#mdemail').html(data.email);
                $('#mdalamat').html(data.alamat);
                $('#mdsekolah').html(data.nama_sekolah);
                $("#namaedit").val(data.nama);
                $("#Emailedit").val(data.email);
                $("#Alamatedit").val(data.alamat);
                $("#Sekolahedit").val(data.nama_sekolah);
                $("#Nisedit").val(data.nisn);
            }
        });
    }

    $("#form_edit").on("submit", function(e) {
        e.preventDefault();
        $.ajax({
            url: "<?= base_url('datamaster/update'); ?>",
            method: "POST",
            data: new FormData(this),
            processData: false,
            contentType: false,
            cache: false,
            async: false,
            dataType: "json",
            beforeSend: function() {
                $('#save').attr('disabled', 'disabled');
            },
            success: function(data) {
                if (data.error) {
                    if (data.nama_error != '') {
                        $('#nama_error').html(data.nama_error);
                    } else {
                        $('#nama_error').html('');
                    }
                    if (data.alamat_error != '') {
                        $('#alamat_error').html(data.alamat_error);
                    } else {
                        $('#alamat_error').html('');
                    }
                    if (data.email_error != '') {
                        $('#email_error').html(data.email_error);
                    } else {
                        $('#email_error').html('');
                    }
                    if (data.sekolah_error != '') {
                        $('#sekolah_error').html(data.sekolah_error);
                    } else {
                        $('#sekolah_error').html('');
                    }
                    if (data.nis_error != '') {
                        $('#nis_error').html(data.nis_error);
                    } else {
                        $('#nis_error').html('');
                    }
                    if (data.gambar_error != '') {
                        $('#gambar_error').html(data.gambar_error);
                    } else {
                        $('#gambar_error').html('');
                    }
                }
                if (data.success) {
                    $('#peserta').val(nama);
                    $('#modal_edit').modal("hide");
                    $('#modaldetail').modal("hide");
                    $('#success_message').html(data.success);
                    $('#nama_error').html('');
                    $('#email_error').html('');
                    $('#alamat_error').html('');
                    $('#sekolah_error').html('');
                    $('#nis_error').html('');
                    $(".dropify-clear").trigger("click");
                    $('#form_peserta')[0].reset();
                }
                $('#save').attr('disabled', false);

            }



        });
    })
</script>