var UglifyJS = require("uglify-js");
var fs = require('fs');
var $ = require('jquery')(require('node-jsdom').jsdom().parentWindow);

var fileList = [];
$(fs.readdirSync('../js')).each(function() {
  fileList.push('../js/' + this);
});

console.log(fileList);


fs.writeFileSync(
  '../js/build.min.js',
  UglifyJS.minify(fileList).code
);
