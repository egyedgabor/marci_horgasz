var UglifyJS = require("uglify-js");
var fs = require('fs');
var $ = require('jquery')(require('node-jsdom').jsdom().parentWindow);

$(fs.readdirSync('../js')).each(function() {
  if (this.indexOf('min.js') === -1) {
      fs.writeFileSync(
      '../js_min/' + this.substring(0, this.length - 3) + '.min.js',
      UglifyJS.minify('../js/' + this).code
    );
  }
});
