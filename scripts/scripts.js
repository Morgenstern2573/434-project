document.addEventListener("DOMContentLoaded", function () {
  const sidebar = document.getElementById("sidebarMenu");
  const toggleButton = document.getElementById("sidebarToggle");

  if (toggleButton) {
    toggleButton.addEventListener("click", function () {
      sidebar.classList.toggle("collapse");
    });
  }

  // logout modal behavior
  const logoutModal = document.getElementById("logout-modal");
  const logoutModalTrigger = document.getElementById("logout-modal-trigger");

  if (logoutModal) {
    logoutModalTrigger.addEventListener("click", () => {
      logoutModal.style.display = "block";
    });

    for (let elem of document.getElementsByClassName("logout-modal-close")) {
      elem.addEventListener("click", () => {
        logoutModal.style.display = "none";
      });
    }
  }
});
