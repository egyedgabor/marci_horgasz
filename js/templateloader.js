$(function() {
            var posts = [
                {
                    title: 'Joe Bloggs',
                    subTitle: 'kacsa egy izgalmas napon',
                    date: '25th May 2013',
                    authorPicture: 'http://placehold.it/580x300',
                    post: 'A walleye. I guess because it is summer and so hot and it was a shallow lake. It was very hard though for me. I had was not equipped with a cool head light like they had and stringing a worm was a little challenging in the dark! Wiggly little buggars!',
                    miniImage1: 'http://placehold.it/290x150',
                    miniImage2: 'http://placehold.it/290x150',
                    miniImage3: 'http://placehold.it/290x150',
                    miniImage4: 'http://placehold.it/290x150',
                },
                {
                    title: 'Joe Bloggs 2',
                    subTitle: 'kacsa egy izgalmas napon',
                    date: '28th May 2013',
                    authorPicture: 'http://placehold.it/580x300',
                    post: 'A walleye. I guess because it is summer and so hot and it was a shallow lake. It was very hard though for me. I had was not equipped with a cool head light like they had and stringing a worm was a little challenging in the dark! Wiggly little buggars!',
                    miniImage1: 'http://placehold.it/290x150',
                    miniImage2: 'http://placehold.it/290x150',
                    miniImage3: 'http://placehold.it/290x150',
                    miniImage4: 'http://placehold.it/290x150',
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
