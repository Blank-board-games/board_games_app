let redirect = document.getElementById('redirect');
let sideBtns = document.querySelectorAll('.sidebar__tablinks');
let tabContent = document.querySelectorAll('.tabcontent');
let activeTab;
let activeBlock;

if(redirect) {
  let source = redirect.dataset.source;
  activeTab = document.querySelector('.sidebar__tablinks[data-target="' + source + '"]');
  activeBlock = document.getElementById(source)
} else {
  activeTab = document.querySelector('.sidebar__tablinks:first-child');
  activeBlock = document.querySelector('.tabcontent:first-child');
}

activeTab.classList.add("active");
activeBlock.style.display = "block";

sideBtns.forEach(function(tab) {
  tab.onclick = function(e) {
    // Get all elements with class="tabcontent" and hide them
    for (let i = 0; i < tabContent.length; i++) {
      tabContent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    sideBtns.forEach(function(btn) {
      btn.classList.remove("active");
    });

    let tabName = this.dataset.target;

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(tabName).style.display = "block";
    e.currentTarget.classList.add("active");
    }
});