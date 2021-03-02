$(document).ready(function() {
  var items="<?=json_encode($array); ?>";
  $("#buscar").autocomplete({
    source:items
  });
});
