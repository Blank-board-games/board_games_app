sideBtns = document.querySelectorAll('.sidebar__tablinks');
tabContent = document.querySelectorAll('.tabcontent');

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