var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function () {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
document.addEventListener("DOMContentLoaded", function () {
  var url = window.location.href;
  var fragmentIndex = url.indexOf("#otazka1");
  if (fragmentIndex !== -1) {
    var accordionButton = document.getElementById("otazka1");
    var accordionPanel = accordionButton.nextElementSibling;
    if (accordionButton && accordionPanel) {
      accordionPanel.style.display = "block"; // 
    }
  }
});
document.addEventListener("DOMContentLoaded", function () {
  var url = window.location.href;
  var fragmentIndex = url.indexOf("#otazka2");
  if (fragmentIndex !== -1) {
    var accordionButton = document.getElementById("otazka2");
    var accordionPanel = accordionButton.nextElementSibling;
    if (accordionButton && accordionPanel) {
      accordionPanel.style.display = "block"; // 
    }
  }
});
document.addEventListener("DOMContentLoaded", function () {
  var url = window.location.href;
  var fragmentIndex = url.indexOf("#otazka3");
  if (fragmentIndex !== -1) {
    var accordionButton = document.getElementById("otazka3");
    var accordionPanel = accordionButton.nextElementSibling;
    if (accordionButton && accordionPanel) {
      accordionPanel.style.display = "block"; // 
    }
  }
});
document.addEventListener("DOMContentLoaded", function () {
  var url = window.location.href;
  var fragmentIndex = url.indexOf("#otazka4");
  if (fragmentIndex !== -1) {
    var accordionButton = document.getElementById("otazka4");
    var accordionPanel = accordionButton.nextElementSibling;
    if (accordionButton && accordionPanel) {
      accordionPanel.style.display = "block"; // 
    }
  }
});
document.addEventListener("DOMContentLoaded", function () {
  var url = window.location.href;
  var fragmentIndex = url.indexOf("#otazka5");
  if (fragmentIndex !== -1) {
    var accordionButton = document.getElementById("otazka5");
    var accordionPanel = accordionButton.nextElementSibling;
    if (accordionButton && accordionPanel) {
      accordionPanel.style.display = "block"; // 
    }
  }
});
