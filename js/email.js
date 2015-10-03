/*global $ bootbox window */
$('#email_button').on('click', function () {
  var email = $('#email').val();
  var name = $('#name').val();
  var subject = $('#subject').val();
  var message = $('#message').val();
  if (email != '' && name != '' && subject != '' && message != '') {
    $.post('/marci_horgasz/test_email.php', 
      {email: email, name: name, subject: subject, message: message}, function() {
      bootbox.alert('Köszönöm a megkeresést,<br></br>Az email-t hamarosan elolvasom és'+
      ' válaszolok!<br></br>Tisztelettel: Héjja Márton',function(){
        window.location.reload()
      });
    })
  } else {
    bootbox.alert('Kérlek minden mezőt tölts ki!')
  }
})

