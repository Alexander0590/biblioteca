function toggleSubmenu(submenuId) {
    const submenu = document.getElementById(submenuId);
    const arrow = document.getElementById("arrow" + submenuId.charAt(0).toUpperCase() + submenuId.slice(1));
    const isVisible = submenu.style.display === "block";
    submenu.style.display = isVisible ? "none" : "block";
    arrow.classList.toggle("down", !isVisible);
  }