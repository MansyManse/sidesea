!function(){function n(r,e,o){function i(s,a){if(!e[s]){if(!r[s]){var u="function"==typeof require&&require;if(!a&&u)return u(s,!0);if(t)return t(s,!0);var c=new Error("Cannot find module '"+s+"'");throw c.code="MODULE_NOT_FOUND",c}var l=e[s]={exports:{}};r[s][0].call(l.exports,function(n){return i(r[s][1][n]||n)},l,l.exports,n,r,e,o)}return e[s].exports}for(var t="function"==typeof require&&require,s=0;s<o.length;s++)i(o[s]);return i}return n}()({1:[function(n,r,e){"use strict";n("./global")},{"./global":2}],2:[function(n,r,e){"use strict";jQuery(document).ready(function(n){n(document).foundation(),n(function(){n("body").removeClass("sticky-shrinknav-wrapper"),n(window).scroll(function(){if(window.innerWidth>640){n(window).scrollTop()>=30?n("body").addClass("sticky-shrinknav-wrapper"):n("body").removeClass("sticky-shrinknav-wrapper")}else n("body").removeClass("sticky-shrinknav-wrapper")}),n(window).resize(function(){window.innerWidth<640&&n("body").removeClass("sticky-shrinknav-wrapper")})}),n(".overlay-nav-menu-toggle, .overlay-nav-menu a").on("click",function(){n("#overlay-nav-menu").toggleClass("is-open")})}(jQuery))},{}]},{},[1]);
//# sourceMappingURL=bundle.js.map