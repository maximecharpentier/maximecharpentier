/*
Variables
 */

var body          = document.querySelector('body');
var header        = document.querySelector('.header');
var brand         = document.querySelector('.brand');
var brandLink     = document.querySelector('.brand__link');
var brandLinkBold = document.querySelector('.brand__link__bold');
var headerButton  = document.querySelector('.header__button');
var modal         = document.querySelector('.modal');
var modalLink     = document.querySelectorAll('.modal__link');

/*
Allow burger menu to appear on click
 */

headerButton.addEventListener('click', function () {
    if (headerButton.classList.contains('header__button--active')) {
        headerButton.classList.remove('header__button--active');
        modal.classList.remove('modal--active');
    } else {
        headerButton.classList.add('header__button--active');
        modal.classList.add('modal--active');
    }
});

/*
Allow the header to stay on top of the body while scrolling
 */

window.addEventListener('scroll', function() {
    header.style.position = 'absolute';
    header.style.top = '0px';
    header.style.left = '0px';
});

/*
Brand hover
 */

brand.addEventListener('mouseover', function() {
    if (window.innerWidth > 1025) {
        brandLink.classList.add('brand__link--active');
        brandLinkBold.classList.add('brand__link__bold--active');
    }
});
brand.addEventListener('mouseout', function() {
    if (window.innerWidth > 1025) {
        brandLink.classList.remove('brand__link--active');
        brandLinkBold.classList.remove('brand__link__bold--active');
    }
});

/*
Change modal link active with the current pages
 */

for (var i = 0; i < modalLink.length; i++) {
    console.log(modalLink)
    if (body.classList.contains('body--projects')) {
        modalLink[1].classList.remove('modal__link--active');
        modalLink[0].classList.add('modal__link--active');
    }
    if (body.classList.contains('body--about')) {
        modalLink[0].classList.remove('modal__link--active');
        modalLink[1].classList.add('modal__link--active');
    }
}

