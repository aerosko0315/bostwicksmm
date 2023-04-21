const sideMenu = () => {
    const closeBtn = document.querySelector('.js-close-side-menu');
    const openBtn = document.querySelector('.js-open-side-menu');
    const menuDom = document.querySelector('.js-side-menu');

    if( !menuDom ) {
        return;
    }

    closeBtn.addEventListener('click', event => {
        menuDom.classList.remove('open');
    });

    openBtn.addEventListener('click', event => {
        menuDom.classList.add('open');
    });
}

export default sideMenu;