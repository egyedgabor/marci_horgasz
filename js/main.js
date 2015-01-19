//-aktive menu
$(function (){
    $(".nav li a").each(function() {   
        if (this.href === window.location.href) {
            $(this).parent().addClass("active");
        }
    });
});

/*
$(function (){
    $('nav li a[href="' + window.location.href.split('/').pop() + '"]').parent().addClass('active'); 
})*/
