$(document).ready(function() {

  $("#sol").hide();
  $(".custom-file").hide();
  $(".form-group").hide();

  $("#ima").click(function() {

    $("#sol").slideDown();
    $(".custom-file").slideDown();
    $(".form-group").slideDown();

  });

  $("#ima").dblclick(function() {

    $("#sol").slideToggle();
    $(".custom-file").slideToggle();
    $(".form-group").slideToggle();

  });
});
