(function(){function r(e,n,t){function o(i,f){if(!n[i]){if(!e[i]){var c="function"==typeof require&&require;if(!f&&c)return c(i,!0);if(u)return u(i,!0);var a=new Error("Cannot find module '"+i+"'");throw a.code="MODULE_NOT_FOUND",a}var p=n[i]={exports:{}};e[i][0].call(p.exports,function(r){var n=e[i][1][r];return o(n||r)},p,p.exports,r,e,n,t)}return n[i].exports}for(var u="function"==typeof require&&require,i=0;i<t.length;i++)o(t[i]);return o}return r})()({1:[function(require,module,exports){
/**
    Entry point
    Contains import
    Keep logic outside of this file as like as possible
*/
/**
    Nav bar on scroll
*/
window.onscroll = function () {
    stickyHeader();
};
function stickyHeader() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        document.querySelector("#nav").classList.add("nav-lg");
    }
    else {
        document.querySelector("#nav").classList.remove("nav-lg");
    }
}
/**
    Burger menu
*/
window.onclick = function () {
    burgermenu();
};
function burgermenu() {
    var element = document.getElementById("burger");
    if (element.checked) {
        document.querySelector("#nav").classList.add("nav-burger");
    }
    else {
        document.querySelector("#nav").classList.remove("nav-burger");
    }
}
/**
    Detect IE
*/
function msieversion() {
    var ua = window.navigator.userAgent;
    var msie = ua.indexOf("MSIE ");
    if (msie > -1 || !!navigator.userAgent.match(/Trident.*rv\:11\./)) // If Internet Explorer, return version number
     {
        // alert(parseInt(ua.substring(msie + 5, ua.indexOf(".", msie))));
        return true;
    }
    else // If another browser, return 0
     {
        return false;
    }
}
window.onload = function () {
    if (msieversion()) {
        document.querySelector("#IE-warning").classList.add("is_ie");
        document.querySelector("#nav").classList.add("nav_is_ie");
        //console.log('user us')
    }
    else {
        document.querySelector("#IE-warning").classList.remove("is_ie");
    }
};
/**
    Valid email
*/
//let button = <HTMLElement> document.getElementById("mc-embedded-subscribe");
//let form = document.querySelector("#mc-embedded-subscribe-form");
///console.log(button);
/* button.addEventListener("click", (e:Event) => {
    
}); */
/* form.addEventListener('submit', (e) => {

    e.preventDefault;
    let email = document.querySelector("#mce-EMAIL").nodeValue;
    console.log(email);
   
  });  */
/* console.log(email);
function emailIsValid (email) {
    return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)
  }
 */

},{}]},{},[1])
//# sourceMappingURL=index.js.map
