$(function(){
    let textWrapper = document.querySelector('.ml1 .letters');
    let boxes = document.querySelectorAll('.ml11');
    let displayed = {};
    let whatPage = $('#what-page');
    let whatPageMobile = $('#what-page_mobile');
    let whatPageText = whatPage.text();
    let whatPageTextMobile = whatPageMobile.text();
    let whatPageElement = $('#' + whatPageText);
    let whatPageElementMobile = $('#' + whatPageTextMobile);
    let observer = new IntersectionObserver(scrollTracking, {
        threshold: [0, 0.1, 0.2, 0.3, 0.4, 0.5, 0.6, 0.7, 0.8, 0.9, 1.0]
    });

    textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");
    whatPageElement.addClass('main-menu__item--active');
    whatPageElementMobile.addClass('item--active');

    /*anim*/
    anime.timeline({loop: true})
        .add({
            targets: '.ml1 .letter',
            scale: [0.3, 1],
            opacity: [0, 1],
            translateZ: 0,
            easing: "easeOutExpo",
            duration: 600,
            delay: (el, i) => 70 * (i + 1)
        })
        .add({
            targets: '.ml1 .line',
            scaleX: [0, 1],
            opacity: [0.5, 1],
            easing: "easeOutExpo",
            duration: 700,
            offset: '-=875',
            delay: (el, i, l) => 80 * (l - i)
        })
        .add({
            targets: '.ml1',
            opacity: 0,
            duration: 1000,
            easing: "easeOutExpo",
            delay: 1000
        });
    /*anim*/

    function scrollTracking(entries) {
        for (let entry of entries) {
            displayed[entry.target.id] = entry.intersectionRatio >= 0.2;
            animateTitle(entry.target.id);
        }
    }



    boxes.forEach(element => observer.observe(element));

    /*anim*/
    function animateTitle(elem) {
        let textWrapper = document.querySelector('#' + elem + ' .letters');
        textWrapper.innerHTML = textWrapper.textContent.replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>");

        anime.timeline()
            .add({
                targets: '#' + elem + ' .line',
                scaleY: [0, 1],
                opacity: [0.5, 1],
                easing: "easeOutExpo",
                duration: 700
            })
            .add({
                targets: '#' + elem + ' .line',
                translateX: [0, document.querySelector('#' + elem + ' .letters').getBoundingClientRect().width + 10],
                easing: "easeOutExpo",
                duration: 70,
                delay: 100
            })
            .add({
                targets: '#' + elem + ' .letter',
                opacity: [0, 1],
                easing: "easeOutExpo",
                duration: 300,
                offset: '-=775',
                delay: (el, i) => 34 * (i + 1)
            })
            .add({
                targets: '#' + elem,
                opacity: [1, 1],
                duration: 1000,
                easing: "easeOutExpo",
                delay: 1000
            });
    }
    /*anim*/
})