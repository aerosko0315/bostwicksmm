const backToTop = () => {
    const backBtn = document.querySelector('.js-back-to-top');

    if(!backBtn) {
        return;
    }

    window.addEventListener('scroll', event => {
        if(document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            backBtn.classList.add('active');
        } else {
            backBtn.classList.remove('active');
        }
    });

    backBtn.addEventListener('click', e => {
        const topElem = document.documentElement;

        topElem.scrollIntoView({ behavior: 'smooth' });
    });
}

export default backToTop;