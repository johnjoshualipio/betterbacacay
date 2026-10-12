document.querySelectorAll('.civic-mobile-menu').forEach((menu) => {
    menu.querySelectorAll('nav a').forEach((link) => {
        link.addEventListener('click', () => {
            menu.removeAttribute('open');
        });
    });

    menu.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && menu.open) {
            menu.removeAttribute('open');
            menu.querySelector('summary').focus();
        }
    });

    document.addEventListener('click', (event) => {
        if (menu.open && !menu.contains(event.target)) {
            menu.removeAttribute('open');
        }
    });
});
