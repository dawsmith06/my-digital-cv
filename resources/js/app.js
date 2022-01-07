require('./bootstrap');

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

// require('./bootstrap');

window.Vue = require('vue').default;
const jsHelpers = require('dw-js-helpers');

jsHelpers.vueMix.bindInit();
jsHelpers.vueMix.setup();
// require('./vue-mix.js');