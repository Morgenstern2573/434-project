document.addEventListener('DOMContentLoaded', function() {
    const sidebar = document.getElementById('sidebarMenu');
    const toggleButton = document.getElementById('sidebarToggle');

    toggleButton.addEventListener('click', function() {
        sidebar.classList.toggle('collapse'); 
    });
});