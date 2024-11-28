jQuery(document).ready(function () {
  jQuery(".customblog-slider").slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    speed: 300,
    infinite: true,
    autoplaySpeed: 5000,
    autoplay: true,
    responsive: [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });

  // Custom navigation buttons
  jQuery(".custom-navigation .prev").on("click", function () {
    jQuery(".customblog-slider").slick("slickPrev"); // Default prev functionality
  });

  jQuery(".custom-navigation .next").on("click", function () {
    jQuery(".customblog-slider").slick("slickNext"); // Default next functionality
  });
});

// share popup button js

document.addEventListener('DOMContentLoaded', function() {
    const shareButtons = document.querySelectorAll('.share-popup');
    
    shareButtons.forEach(function(button) {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const url = this.getAttribute('data-href');
            const width = 600;
            const height = 400;
            const left = (window.innerWidth / 2) - (width / 2);
            const top = (window.innerHeight / 2) - (height / 2);

            window.open(
                url,
                'Share',
                `width=${width},height=${height},top=${top},left=${left}`
            );
        });
    });
});

