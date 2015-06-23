//active menu
$(function (){
    $(".nav li a").each(function() {   
        if (this.href === window.location.href) {

            $(this).parent().addClass("active"); // set the menu-item to active

            // If the menu item was in the dropdown menu then make the dropdown to active too
        }
    });
});

  jQuery(document).ready(function($) {
 
        $('#myCarousel').carousel({
                interval: 3000
        });
 
        $('#carousel-text').html($('#slide-content-0').html());
 
        //Handles the carousel thumbnails
       $('[id^=carousel-selector-]').click( function(){
            var id = this.id.substr(this.id.lastIndexOf("-") + 1);
            var id = parseInt(id);
            $('#myCarousel').carousel(id);
        });
 
 
        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid.bs.carousel', function (e) {
                 var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-'+id).html());
        });
});

$(function(){
    $('.hide-bullets li').mouseenter(function(){
        $(this).children().addClass('move');
    });
    $('.hide-bullets li').mouseleave(function(){
        $(this).children().removeClass('move');
    });
});
/* Examples
    $('nav li a[href="xxxx"]') --> select for an attribute
*/
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
    $('.menu-item').hide()
    $('.active').show()
  } else {
    $('.navbar-header').show(1000);
    $('.navbar').removeClass('shrink');
    $('.sponsors').show(1000);
    $('.menu-item').show()
  }
});