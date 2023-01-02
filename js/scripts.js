const hamburger = document.querySelector(".hamburger");
const menuItems = document.querySelector(".menu-items");
const expandBtn = document.querySelectorAll(".expand-btn");
const gear_icon = document.getElementById("options");
const sidebar = document.getElementById("sidebar");
const closeSidebar_icon = document.getElementById("close");
// Toggle
hamburger.addEventListener("click", toggleBurger);
function toggleBurger() {
  hamburger.classList.toggle("open");
  menuItems.classList.toggle("open");
}

expandBtn.forEach((btn) => {
  btn.addEventListener("click", () => {
    btn.classList.toggle("open");
  });
});

options.addEventListener("click", () => {
  sidebar.classList.toggle("active");
  closeSidebar_icon.addEventListener("click", () => {
    sidebar.classList.remove("active");
  });
});
