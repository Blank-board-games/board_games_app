let menuBtn = document.getElementsByClassName('navigation__hamburger')[0];

menuBtn.onclick = function() {
  this.classList.toggle("open");
}