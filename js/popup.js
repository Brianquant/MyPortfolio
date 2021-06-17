const closeBtn = document.getElementById("close");
const popUp = document.querySelector(".pop-up-container");
var scrollPos =
  window.scrollY ||
  window.scrollTop ||
  document.getElementsByTagName("html")[0].scrollTop;
console.log("scrollY", scrollPos);

console.log("closeBtn", closeBtn);

closeBtn.addEventListener("click", () => {
  popUp.style.display = "none";
});
