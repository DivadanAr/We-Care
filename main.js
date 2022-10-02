const toggleSidebar = document.querySelector("#toggle-sidebar");
const sidebar = document.querySelector(".sidebar");
const navbar = document.querySelector(".navbar");
const p = document.querySelector(".menutext");
const p2 = document.querySelector(".menutext2");
const p3 = document.querySelector(".menutext3");
const p4 = document.querySelector(".menutext4");
const p5 = document.querySelector(".menutext5");

toggleSidebar.addEventListener("click", () => {
  sidebar.classList.toggle("sidebar-open");
  navbar.classList.toggle("navbar-open");
  p.classList.toggle("menutext-open");
  p2.classList.toggle("menutext2-open");
  p3.classList.toggle("menutext3-open");
  p4.classList.toggle("menutext4-open");
  p5.classList.toggle("menutext5-open");
});