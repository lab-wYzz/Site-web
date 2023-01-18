const thead = document.querySelector('thead')

let lastScroll = 0

tableScroll.addEventListener('scroll', () => {

    if (tableScroll.scrollY < lastScroll) {
        thead.style.position = 'none'
    } else {
        thead.style.position = 'fixed'
    }
    tableScroll = lastScroll.scrollY;
})