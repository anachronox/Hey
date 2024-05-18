// Auto close details hamburger menu
const hamnav = document.querySelector(".hamnav");

document.addEventListener("click", function (e) {
  var insideHamnav = hamnav.contains(e.target);

  if (!insideHamnav) {
    hamnav.removeAttribute("open");
  }
});