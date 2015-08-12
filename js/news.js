$(function() {
  var news = [
    {
      title: "Kacsa",
      date: "2015.07.24",
      text: "jsjdjadjdjadjajdsdjdsjsaofsjafjoffj fáfjdjafjádgdágágáadjfdas gájgdiodgjgdijaijgda",
      picture: "image/latestnews.png",
    },
    {
      title: "Kacsa",
      date: "2015.07.24",
      text: "jsjdjadjdjadjajdsdjdsjsaof sjafjoffjajfáfjdjafjádgdágágá adjfdasjdgájgdiojgdijaijgda",
      picture: "image/News-150x150.png",
    },

  ]

  $(".news").loadTemplate("template_parts/modules/news.html", news)
});
