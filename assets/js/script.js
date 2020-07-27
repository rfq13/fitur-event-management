$(document).ready(function () {


  load_peserta(1);

  function load_peserta(page) {
    $.ajax({
      url: "datamaster/load_peserta/" + page,
      method: 'GET',
      dataType: 'json',
      success: function (data) {
        $('#link_paginasi').html(data.link_paginasi);
        $('#tabel_master').html(data.tabel_master);
      }
    });
  }

  function slide() {
    $.ajax({
      url: "datamaster/load_peserta/" + page,
      method: 'GET',
      dataType: 'json',
      success: function (data) {
        $('#link_paginasi').html(data.link_paginasi);
        $('#tabel_master').html(data.tabel_master);
      }
    });
  }

  $(document).on("click", ".pagination li a", function (event) {
    event.preventDefault();
    var page = $(this).data("ci-pagination-page");
    load_peserta(page);
  });


  $(".mdb-select").materialSelect();


});