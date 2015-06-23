$('.modal-content').addClass('modalka');
$('.modal-content').addClass('row');
$('.modal-body').addClass('col-xs-7');
$('.modal-footer').children().removeClass();
$('.modal-footer').children().first().css("margin-left", "-663");
$('#image-gallery-caption').css("text-align","center");
$('.modal-footer').children().first().addClass('col-xs-1');
$('#image-gallery-caption').next().addClass("col-xs-12");
$('#image-gallery-caption').next().css("margin-left", "-453");
$('#image-gallery-caption').next().css("margin-top","-49");
$('.modal-footer').children().first().css("text-align","left");

$(window).scroll(function() {
  if ($(document).scrollTop() > 50) {
    $('.navbar-header').hide(1000);
    $('.sponsors').hide(1000);
    $('.navbar').addClass('shrink');
    $('.menu-item').hide();
    $('.active').show();
  } else {
    $('.navbar-header').show(1000);
    $('.navbar').removeClass('shrink');
    $('.sponsors').show(1000);
    $('.menu-item').show();
  }
});