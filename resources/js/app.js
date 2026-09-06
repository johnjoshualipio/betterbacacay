document.querySelectorAll('.civic-mobile-menu nav a').forEach((link) => {
    link.addEventListener('click', () => {
        const menu = link.closest('details');

        if (menu) {
            menu.removeAttribute('open');
        }
    });
});
