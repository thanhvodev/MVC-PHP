
$(document).ready(function () {
    $(".image-slider").slick({
        // centerMode: true,
        centerPadding: "40px",
        slidesToShow: 4,
        infinite: true,
        arrows: true,
        autoplay: true,
        autoplaySpeed: 2000,
        dots: true,
        nextArrow: `<button type='button' class='slick-next pull-left slick-arrow'><ion-icon name="arrow-forward-outline"></ion-icon></button>`,
        prevArrow: `<button type='button' class='slick-prev pull-right slick-arrow'><ion-icon name="arrow-back-outline"></ion-icon></button>`,
        responsive: [
            {
                breakpoint: 1100,
                settings: {
                    slidesToShow: 3,
                    centerMode: false,
                    arrows: false,
                },
            },
            {
                breakpoint: 900,
                settings: {
                    slidesToShow: 2,
                    centerMode: false,
                    arrows: false,
                },
            },
            {
                breakpoint: 650,
                settings: {
                    slidesToShow: 1,
                    arrows: false,
                    centerMode: false,
                },
            },
        ],
    });
});
