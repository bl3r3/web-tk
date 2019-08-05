// const nav = document.querySelector('nav:not(.navbar--index)');

// function manageScroll() {
//     if (window.pageYOffset > 100) {
//         nav.classList.add('scrolled');
//     } else {
//         nav.classList.remove('scrolled');
//     }
// }

// window.addEventListener('scroll', manageScroll);

// var prevScrollpos = window.pageYOffset;
// window.onscroll = function() {
//   var currentScrollPos = window.pageYOffset;
//   if (prevScrollpos > currentScrollPos) {
//     document.getElementById("navbar").style.top = "0";
//   } else {
//     document.getElementById("navbar").style.top = "-100px";
//   }
//   prevScrollpos = currentScrollPos;
// }

// var prevScrollpos = window.pageYOffset;
// window.onscroll = function () {
//   const navTop = document.getElementById("navbar").getBoundingClientRect().top;
//   const navBottom = document.getElementById("navbar").getBoundingClientRect().bottom;
//   var currentScrollPos = window.pageYOffset;
//   if (prevScrollpos > currentScrollPos) {
//     document.getElementById("navbar").style.top = "0";
//   } else {
//     document.getElementById("navbar").style.top = "-" + (navBottom - navTop) + "px";
//   }
//   prevScrollpos = currentScrollPos;
// }

let prevScrollpos = window.pageYOffset;
window.addEventListener('scroll', () => {
  const navTop = document.getElementById("navbar").getBoundingClientRect().top;
  const navBottom = document.getElementById("navbar").getBoundingClientRect().bottom;
  let currentScrollPos = window.pageYOffset;
  if (prevScrollpos < currentScrollPos) {
    document.getElementById("navbar").style.top = "-" + (navBottom - navTop) + "px";
  } else {
    document.getElementById("navbar").style.top = "0";
  }
  prevScrollpos = currentScrollPos;
}); 