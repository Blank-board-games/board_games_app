let menuBtn = document.getElementsByClassName('navigation__hamburger')[0];
let menuParentCatList = document.querySelectorAll('.menu-item.group a');

menuParentCatList.forEach(function(parentCat) {
  parentCat.onclick = function(e) {
    e.preventDefault();
    this.parentElement.classList.toggle("menu-item--open");
  }
});

menuBtn.onclick = function() {
  this.classList.toggle("navigation__hamburger--open");
}