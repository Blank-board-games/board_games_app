let menuBtn = document.getElementsByClassName('navigation__hamburger')[0];
let menuParentCatList = document.querySelectorAll('.menu-item.group > a');
let submenuList = document.querySelectorAll('.submenu');

menuBtn.onclick = function() {
  this.classList.toggle("navigation__hamburger--open");
}

//Navigation -> open submenu of menu-item group
menuParentCatList.forEach(function(parentCat) {
  parentCat.onclick = function(e) {
    e.preventDefault();
    e.stopPropagation();
    this.parentElement.classList.toggle("menu-item--open");
  }
});

//Close submenu on click event outside the container
submenuList.forEach(function(submenu) {
  submenu.onclick = function(e) {
    e.stopPropagation();
  }
});

document.documentElement.onclick = function() {
  menuParentCatList.forEach(function(parentCat) {
    parentCat.parentElement.classList.remove("menu-item--open");
  });
}