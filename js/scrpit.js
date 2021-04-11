/** @format */

const menuToogle = document.querySelector(".menu-toogle input");
const sideBar = document.querySelector(".side-bar ul");

menuToogle.addEventListener("click", function () {
  sideBar.classList.toggle("slide");
});

// Type Js
// new Typed("#typed", {
//   strings: ["Alief Aditya Nugraha", "a Developer"],
//   typeSpeed: 100,
//   delaySpeed: 100,
//   loop: true,
// });
const tutul = document.querySelector(".more");

tutul.onclick = function () {
  window.location.href = "submit.php";
  return false;
};
