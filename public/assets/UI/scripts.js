window.addEventListener('scroll', function () {
    let title = document.querySelector('.title');
    let standardItems = document.querySelectorAll('.news-item.standard-item:nth-child(2)');
    let standardItems2 = document.querySelectorAll('.news-item.standard-item:nth-child(3)');
    let standardItems3 = document.querySelectorAll('.news-item.standard-item:nth-child(4)');
    let scrollPosition = window.scrollY;

    title.style.transform = 'translate(-50%, ' + scrollPosition * 0.65 + 'px)';

    standardItems.forEach(item => {
        item.style.transform = 'translateX(-' + scrollPosition * 0.35 + 'px)';
    });

    standardItems2.forEach(item => {
        item.style.transform = 'translateX(' + scrollPosition * 0.50 + 'px)';
    });

    // standardItems3.forEach(item => {
    //     item.style.transform = 'translateY(-' + scrollPosition * 0.09 + 'px)';
    // });
});
