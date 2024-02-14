document.addEventListener('DOMContentLoaded', function() {
    var myCarousel = document.getElementById('carouselExampleIndicators');
    myCarousel.addEventListener('slid.bs.carousel', function () {
        var h1Element = document.querySelector('.carousel-item.active #anim-left-right-slide2');
        if (h1Element) {
            h1Element.classList.add('slide-in');
        }
        document.querySelectorAll('.right-left-p-text').forEach(function(text) {
            text.classList.remove('slide-in');
        });
        setTimeout(function() {
            document.querySelector('.carousel-item.active .right-left-p-text').classList.add('slide-in');
        }, 50);
    });
});