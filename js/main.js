//active menu
$(function (){
    $(".nav li a").each(function() {   
        if (this.href === window.location.href) {

            $(this).parent().addClass("active"); // set the menu-item to active

            // If the menu item was in the dropdown menu then make the dropdown to active too
            if (!$(this).parent().hasClass('menu-item')){
                $('.menu-item.dropdown').addClass('active')
            }
        }
    });
});

/* Examples
    $('nav li a[href="xxxx"]') --> select for an attribute
*/