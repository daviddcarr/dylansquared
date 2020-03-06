$(function () {
  $('[data-toggle="tooltip"]').tooltip()
});

$(".slug-source").keyup(function(){
    var slug = $(this).val().replace(/\s+/g, '-').toLowerCase();
    $(".slug-output").val(slug);
});

