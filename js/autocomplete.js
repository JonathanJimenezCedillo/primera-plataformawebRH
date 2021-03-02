$(document).ready(function() {
  var prueba = "<?=json_encode($array); ?>";
  var items=prueba;
  $(".colonia input").autocomplete({
    source:items
  });
});
