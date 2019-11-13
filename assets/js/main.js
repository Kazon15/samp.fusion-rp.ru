const $ = require('jquery');
const wowjs = require('wowjs');

require('bootstrap');
require('popper.js');


$(document).ready(function()
{
    new wowjs.WOW().init();
});