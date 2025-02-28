document.addEventListener("scroll", function() {
    let header = document.querySelector('.header-transparent-scroll');
    if (window.scrollY > 20) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }
});
