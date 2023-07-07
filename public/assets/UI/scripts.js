window.addEventListener('scroll', function () {
    let logo = document.querySelector('.logo');
    let item = document.querySelectorAll('.news-item.standard-item:nth-child(2)');
    let item2 = document.querySelectorAll('.news-item.standard-item:nth-child(3)');
    let scrollPosition = window.scrollY;

    logo.style.transform = 'translate(-50%, ' + scrollPosition * 0.65 + 'px)';

    item.forEach(item => {
        item.style.transform = 'translateX(-' + scrollPosition * 0.35 + 'px)';
    });

    item2.forEach(item => {
        item.style.transform = 'translateX(' + scrollPosition * 0.50 + 'px)';
    });

});
