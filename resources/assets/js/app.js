
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});

/**
*Holds the navbar onscroll
*/
$(window).on("scroll", function() {
    var position = $("#begin").offset();

    if ($(window).scrollTop() > position.top - 58) {
        $("nav").addClass("active");
    } else {
        $("nav").removeClass("active");
    };
});

/**
fot the what we do page

*/
$(window).on(function() {
    var position = $("#begin-whatwedo").offset();
    $("nav").addClass("active");
    

    //if ($(window).scrollTop() > position.top - 58) {
       // $("nav").addClass("active");
   // } else {
      //  $("nav").removeClass("active");
   // };
});

let lastId;
let cur = [];

// This should probably be throttled.
// Especially because it triggers during smooth scrolling.
// https://lodash.com/docs/4.17.10#throttle
// You could do like...
// window.addEventListener("scroll", () => {
//    _.throttle(doThatStuff, 100);
// });
// Only not doing it here to keep this Pen dependency-free.

window.addEventListener("scroll", event => {
  let fromTop = window.scrollY;

  mainNavLinks.forEach(link => {
    let section = document.querySelector(link.hash);

    if (
      section.offsetTop <= fromTop &&
      section.offsetTop + section.offsetHeight > fromTop
    ) {
      link.classList.add("current");
    } else {
      link.classList.remove("current");
    }
  });
});
