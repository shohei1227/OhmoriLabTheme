console.log(' * header.js');


document.addEventListener('DOMContentLoaded', function () {
    const menuItems = document.querySelectorAll('.menu-item');

    menuItems.forEach(function (menuItem) {
        menuItem.addEventListener('mouseenter', function () {
            console.log('aaaa');
            const subMenu = menuItem.querySelector('.sub-menu');
            if (subMenu) {
                subMenu.classList.add('ohmorilab__visible');
            }
        });

        menuItem.addEventListener('mouseleave', function () {
            console.log('bbbb');
            const subMenu = menuItem.querySelector('.sub-menu');
            if (subMenu) {
                subMenu.classList.remove('ohmorilab__visible');
            }
        });
    });
});
