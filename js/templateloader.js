$(function() {
            var posts = [
                {
                    author: 'Joe Bloggs',
                    date: '25th May 2013',
                    authorPicture: 'image/2.jpg',
                    post: 'This is the contents of my post'
                },
                {
                    author: 'Joe Bloggs 2',
                    date: '28th May 2013',
                    authorPicture: 'image/3.jpg',
                    post: 'This is the contents of my other post'
                }
            ]

        $.addTemplateFormatter({
            upperCaseFormatter : function(value, template) {
                    return value.toUpperCase();
                },
            lowerCaseFormatter : function(value, template) {
                    return value.toLowerCase();
                },
            sameCaseFormatter : function(value, template) {
                    if(template == "upper") {
                        return value.toUpperCase();
                    } else {
                        return value.toLowerCase();
                    }
                }
        });
        $(".simple-template-container").loadTemplate("template_parts/modules/blog.html", posts)
    });
