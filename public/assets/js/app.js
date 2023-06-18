function sf() { document.login.username.focus(); }
"use strict";

// sliders

var slide = document.getElementById('slideImg');
let images = new Array(
  "assets/img/slide2.jpg",
  "assets/img/slide3.jpg",
  "assets/img/yonevas9.webp",
);
let len = images.length;
let i = 0
function slider() {
  if (i> len-1) {
    i = 0
  }
  slide.src = images[i]
  i++
  setTimeout('slider()', 10000);
}


function createCookie(cookieName, value, seconds) {
  var date    = new Date(Date.now() + (seconds * 1000)),
      expires = date.toGMTString(),
      path    = '/idp',
      cookie  = cookieName + '=' + value
              + ';expires=' + expires
              + (path.length > 0 ? '; path=' + path : '');

  document.cookie = cookie
  console.log('Created cookie: ' + cookie);
}

function eraseCookie(name) {
  console.log('Erasing cookie ' + name);
  createCookie(name, '', -31536000);
}

function readCookie(name) {
  var cookies = document.cookie.split(';');
  for (var i = 0; i < cookies.length; i++) {
    var cookieParts = cookies[i].split('=');
    if (cookieParts[0].replace(/ +/g,'') === name) {
      return cookieParts[1];
    }
  }
  return null;
}

function load(id, cookieName, reverse) {
  var checkbox = document.getElementById(id);

  reverse = (reverse === undefined) ? false : reverse;

  if (checkbox != null) {
    cookieName = cookieName || checkbox.name;
    var status = readCookie(cookieName);
    checkbox.checked = (status === (reverse ? 'false' : 'true'));
  }
}

function check(checkbox, cookieName, reverse) {
  cookieName = cookieName || checkbox.name;
  reverse = (reverse === undefined) ? false : reverse;

  if (checkbox.checked) {
    createCookie(cookieName, (reverse ? 'false' : 'true'), 31536000);
  } else {
    eraseCookie(cookieName);
  }
}

function loadRemember(rememberId, cookieName) {
  var checkbox = document.getElementById(rememberId);

  if (checkbox != null) {
    var status = readCookie(cookieName);
    checkbox.checked = (status !== '1' && status !== 'true');
  }
}

function checkRemember(checkbox, cookieName) {
  if (checkbox.checked) {
    console.log('Erasing cookie ' + cookieName);
    eraseCookie(cookieName);
  } else {
    console.log('Creating cookie ' + cookieName + '; 1; ' + 31536000);
  }
}
// slider
const productContainers = [...document.querySelectorAll('.product-container')];
const nxtBtn = [...document.querySelectorAll('.nxt-btn')];
const preBtn = [...document.querySelectorAll('.pre-btn')];

productContainers.forEach((item, i) => {
    let containerDimensions = item.getBoundingClientRect();
    let containerWidth = containerDimensions.width;

    nxtBtn[i].addEventListener('click', () => {
        item.scrollLeft += containerWidth;
    })

    preBtn[i].addEventListener('click', () => {
        item.scrollLeft -= containerWidth;
    })
})
// Referral
let referral = document.querySelector("#referral")
let referralClass = document.querySelector(".referral")
referral.addEventListener('change', () => {
    if (referral.checked) {
        referralClass.style.display = 'block'
    } else {
        referralClass.style.display = 'none'
    }
})
