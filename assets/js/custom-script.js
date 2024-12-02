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
    jQuery(".customblog-slider ").slick("slickPrev"); // Default prev functionality
  });

  jQuery(".custom-navigation .next").on("click", function () {
    jQuery(".customblog-slider").slick("slickNext"); // Default next functionality
  });
});
jQuery(document).ready(function($){
  $('.st-images-first-tab, .st-images-second-tab, .st-images-third-tab, .st-product-gallery').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    speed: 300,
    infinite: true,
    autoplaySpeed: 5000,
    autoplay: false   
  });
  // Custom navigation buttons
  $(".second-tab-gallery-nav .prev").on("click", function () {
    $(".st-images-second-tab ").slick("slickPrev"); // Default prev functionality
  });

  $(".second-tab-gallery-nav .next").on("click", function () {
    $(".st-images-second-tab").slick("slickNext"); // Default next functionality
  });
    // Custom navigation buttons
    $(".first-tab-gallery-nav .prev").on("click", function () {
      $(".st-images-first-tab ").slick("slickPrev"); // Default prev functionality
    });
  
    $(".first-tab-gallery-nav .next").on("click", function () {
      $(".st-images-first-tab").slick("slickNext"); // Default next functionality
    });
    // Custom navigation buttons
    $(".third-tab-gallery-nav .prev").on("click", function () {
      $(".st-images-third-tab ").slick("slickPrev"); // Default prev functionality
    });
  
    $(".third-tab-gallery-nav .next").on("click", function () {
      $(".st-images-third-tab").slick("slickNext"); // Default next functionality
    });
    // Custom navigation buttons
    $(".product-gallery-icons .prev").on("click", function () {
      $(".st-product-gallery ").slick("slickPrev"); // Default prev functionality
    });
  
    $(".product-gallery-icons .next").on("click", function () {
      $(".st-product-gallery").slick("slickNext"); // Default next functionality
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

document.addEventListener('DOMContentLoaded', () => {
  const tabLinks = document.querySelectorAll('.tab-link');
  const tabContents = document.querySelectorAll('.custom-tab');

  // Activate the first tab and content by default
  if (tabLinks.length > 0 && tabContents.length > 0) {
    tabLinks[0].classList.add('active');
    tabContents[0].classList.add('active');
  }

  tabLinks.forEach((link, index) => {
    link.addEventListener('click', () => {
      // Close all tabs and remove 'active' class from all links and contents
      tabLinks.forEach((tabLink, i) => {
        tabLink.classList.remove('active');
        tabContents[i].classList.remove('active');
      });

      // Always add the 'active' class to the clicked tab and corresponding content
      link.classList.add('active');
      tabContents[index].classList.add('active');
    });
  });
});



document.addEventListener('DOMContentLoaded', () => {
  const accordionTitles = document.querySelectorAll('.accordion-title');

  accordionTitles.forEach(title => {
      const plusIcon = document.createElement('span');
      plusIcon.classList.add('st-plus');
      plusIcon.textContent = '+';
      
      const minusIcon = document.createElement('span');
      minusIcon.classList.add('st-minus');
      minusIcon.textContent = '-';
      minusIcon.style.display = 'none'; // Hide the "-" initially

      title.appendChild(plusIcon);
      title.appendChild(minusIcon);

      title.addEventListener('click', () => {
          const innerContent = title.nextElementSibling;

          // Close all other accordions
          document.querySelectorAll('.accordion-inner').forEach(inner => {
              if (inner !== innerContent) {
                  inner.style.display = 'none';
              }
          });

          document.querySelectorAll('.accordion-title').forEach(t => {
              if (t !== title) {
                  t.classList.remove('active');
                  t.querySelector('.st-plus').style.display = 'inline';
                  t.querySelector('.st-minus').style.display = 'none';
              }
          });

          // Toggle the clicked accordion
          if (innerContent.style.display === 'block') {
              innerContent.style.display = 'none';
              plusIcon.style.display = 'inline';
              minusIcon.style.display = 'none';
          } else {
              innerContent.style.display = 'block';
              plusIcon.style.display = 'none';
              minusIcon.style.display = 'inline';
          }
      });
  });
});


