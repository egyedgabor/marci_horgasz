var UglifyJS = require("uglify-js");
var UglifyCSS = require('uglifycss');
var fs = require('fs');
var $ = require('jquery')(require('node-jsdom').jsdom().parentWindow);
var path = require('path');

var mainDir = path.dirname(require.main.filename).split('node_packages/marci_modules')[0];

fs.mkdir(mainDir + 'js_min/', function () {
  $(fs.readdirSync(mainDir + 'js/')).each(function() {
    if (this.indexOf('min.js') === -1) {
      console.log('Processing: ' + mainDir + 'js/' + this);
      fs.writeFileSync(
        mainDir + 'js_min/' + this.substring(0, this.length - 3) + '.min.js',
        UglifyJS.minify(mainDir + 'js/' + this).code
      );
    }
  });
});

fs.mkdir(mainDir + 'css_min/', function () {
  $(fs.readdirSync(mainDir + 'css/')).each(function() {
  if (this.indexOf('min.css') === -1) {
    console.log('Processing: ' + mainDir + 'css/' + this);
    fs.writeFileSync(
      mainDir + 'css_min/' + this.substring(0, this.length - 4) + '.min.js',
      UglifyCSS.processFiles([mainDir + 'css/' + this]));
    }
  });
});