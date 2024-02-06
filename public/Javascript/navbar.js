document.addEventListener('DOMContentLoaded', function () {
    let dropdownButton = document.getElementById('dropdownButton');
    let dropdownMenu = document.getElementById('dropdownMenu');
    let menuButton = document.getElementById('menuButton');
    let mobileMenu = document.getElementById('mobileMenu');

    if (dropdownButton && dropdownMenu) {
        dropdownButton.addEventListener('click', function () {
            console.log('click');
            dropdownMenu.classList.toggle('hidden');
        });
    }

    if (menuButton && mobileMenu) {
        menuButton.addEventListener('click', function () {
            console.log('click');
            mobileMenu.classList.toggle('hidden');
        });
    }
});