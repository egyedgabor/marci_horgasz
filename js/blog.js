/*global $*/
$(function() {
  var posts = [
    {
      title: 'Joe Bloggs',
      subTitle: 'kacsa egy izgalmas napon',
      date: '25th May 2013',
      authorPicture: '/marci_horgasz/image/Image_7_mini.jpg',
      imageBigauth: '/marci_horgasz/image/Image_7.jpg',
      post: 'A walleye. I guess because it is summer and so hot and it was a shallow lake.' +
            ' It was very hard though for me. I had was not equipped with a cool head light' +
            ' like they had and stringing a worm was a little challenging in the dark! Wiggly' +
            ' little buggars!',
      miniImage1: '/marci_horgasz/image/image_10_mini.jpg',
      miniImage2: '/marci_horgasz/image/image_2_mini.jpg',
      miniImage3: '/marci_horgasz/image/image_3_mini.jpg',
      miniImage4: '/marci_horgasz/image/image_4_mini.jpg',
      miniImage5: '/marci_horgasz/image/image_6_mini.jpg',
      miniImage6: '/marci_horgasz/image/imgae_33_mini.jpg',
      imageBig1: '/marci_horgasz/image/image_10.jpg',
      imageBig2: '/marci_horgasz/image/image_2.jpg',
      imageBig3: '/marci_horgasz/image/image_3.jpg',
      imageBig4: '/marci_horgasz/image/image_4.jpg',
      imageBig5: '/marci_horgasz/image/image_6.jpg',
      imageBig6: '/marci_horgasz/image/image_33.jpg'
    },
    {
      title: 'Joe Bloggs 2',
      subTitle: 'kacsa egy izgalmas napon',
      date: '28th May 2013',
      authorPicture: '/marci_horgasz/image/image_28_mini.jpg',
      imageBigauth: '/marci_horgasz/image/image_28.jpg',
      post: 'A walleye. I guess because it is summer and so hot and it was a shallow lake.' +
            ' It was very hard though for me. I had was not equipped with a cool head light' +
            ' like they had and stringing a worm was a little challenging in the dark! Wiggly' +
            ' little buggars!',
      miniImage1: '/marci_horgasz/image/image_8_mini.jpg',
      miniImage2: '/marci_horgasz/image/image_24_mini.jpg',
      miniImage3: '/marci_horgasz/image/image_26_mini.jpg',
      miniImage4: '/marci_horgasz/image/image_12_mini.jpg',
      miniImage5: '/marci_horgasz/image/image_13_mini.jpg',
      miniImage6: '/marci_horgasz/image/image_14_mini.jpg',
      imageBig1: '/marci_horgasz/image/image_8.jpg',
      imageBig2: '/marci_horgasz/image/image_24.jpg',
      imageBig3: '/marci_horgasz/image/image_26.jpg',
      imageBig4: '/marci_horgasz/image/image_12.jpg',
      imageBig5: '/marci_horgasz/image/image_13.jpg',
      imageBig6: '/marci_horgasz/image/image_14.jpg'
    },
    {
      title: 'Joe Bloggs 2',
      subTitle: 'kacsa egy izgalmas napon',
      date: '28th May 2013',
      authorPicture: '/marci_horgasz/image/image_30_mini.jpg',
      imageBigauth: '/marci_horgasz/image/image_30.jpg',
      post: 'A walleye. I guess because it is summer and so hot and it was a shallow lake.' +
            ' It was very hard though for me. I had was not equipped with a cool head light' +
            ' like they had and stringing a worm was a little challenging in the dark! Wiggly' +
            ' little buggars!',
      miniImage1: '/marci_horgasz/image/image_11_mini.jpg',
      miniImage2: '/marci_horgasz/image/image_25_mini.jpg',
      miniImage3: '/marci_horgasz/image/image_31_mini.jpg',
      miniImage4: '/marci_horgasz/image/image_16_mini.jpg',
      miniImage5: '/marci_horgasz/image/image_27_mini.jpg',
      miniImage6: '/marci_horgasz/image/image_17_mini.jpg',
      imageBig1: '/marci_horgasz/image/image_11.jpg',
      imageBig2: '/marci_horgasz/image/image_25.jpg',
      imageBig3: '/marci_horgasz/image/image_31.jpg',
      imageBig4: '/marci_horgasz/image/image_16.jpg',
      imageBig5: '/marci_horgasz/image/image_27.jpg',
      imageBig6: '/marci_horgasz/image/image_17.jpg'

    }
  ]

  $(".simple-template-container").loadTemplate("template_parts/modules/blog.html", posts, {complete: function () {
    $(".image_mini" ).click(function(event) {
      $('#mymodal').modal('show');
      var original_url = $(event.target).data().original;
      $('#modal_image').attr('src',original_url);
    });
  }})
});

/*global $*/

