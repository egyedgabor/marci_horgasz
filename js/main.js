/*global $*/
$( ".image_mini" ).click(function(event) {
  $('#mymodal').modal('show');
  var original_url = $(event.target).data().original;
  $('#modal_image').attr('src',original_url);
});
