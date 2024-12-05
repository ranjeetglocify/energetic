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
    jQuery(".customblog-slider ").slick("slickPrev"); 
  });

  jQuery(".custom-navigation .next").on("click", function () {
    jQuery(".customblog-slider").slick("slickNext"); 
  });
});
jQuery(document).ready(function($){
  $('.st-images-first-tab, .st-images-second-tab, .st-images-third-tab, .st-product-gallery').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: true,
    speed: 300,
    infinite: true,
    autoplaySpeed: 5000,
    autoplay: false   
  });
  // Custom navigation buttons
  $(".second-tab-gallery-nav .prev").on("click", function () {
    $(".st-images-second-tab ").slick("slickPrev"); 
  });

  $(".second-tab-gallery-nav .next").on("click", function () {
    $(".st-images-second-tab").slick("slickNext"); 
  });
    // Custom navigation buttons
    $(".first-tab-gallery-nav .prev").on("click", function () {
      $(".st-images-first-tab ").slick("slickPrev"); 
    });
  
    $(".first-tab-gallery-nav .next").on("click", function () {
      $(".st-images-first-tab").slick("slickNext"); 
    });
    // Custom navigation buttons
    $(".third-tab-gallery-nav .prev").on("click", function () {
      $(".st-images-third-tab ").slick("slickPrev"); 
    });
  
    $(".third-tab-gallery-nav .next").on("click", function () {
      $(".st-images-third-tab").slick("slickNext"); 
    });
    // Custom navigation buttons
    $(".product-gallery-icons .prev").on("click", function () {
      $(".st-product-gallery ").slick("slickPrev"); 
    });
  
    $(".product-gallery-icons .next").on("click", function () {
      $(".st-product-gallery").slick("slickNext"); 
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
  const galleryParents = document.querySelectorAll('.st-gallery-parent');

  if (tabLinks.length > 0 && tabContents.length > 0) {
    tabLinks[0].classList.add('active');
    tabContents[0].classList.add('active');
    galleryParents[0].classList.add('active');
  }

  tabLinks.forEach((link, index) => {
    link.addEventListener('click', () => {
      tabLinks.forEach((tabLink, i) => {
        tabLink.classList.remove('active');
        tabContents[i].classList.remove('active');
        galleryParents[i].classList.remove('active'); 
      });

      link.classList.add('active');
      tabContents[index].classList.add('active');

      const galleryParent = galleryParents[index];
      galleryParents.forEach((gp, i) => {
        if (i === index) {
          gp.classList.add('active');
        } else {
          gp.classList.remove('active');
        }
      });
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
      minusIcon.style.display = 'none'; 

      title.appendChild(plusIcon);
      title.appendChild(minusIcon);

      title.addEventListener('click', () => {
          const innerContent = title.nextElementSibling;

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

// product order button
document.addEventListener('DOMContentLoaded', function() {
  const modal = document.getElementById('product-modal');
  const openBtn = document.getElementById('open-modal-btn');
  const closeBtn = document.getElementById('st-close-modal');
  const productNameElem = document.getElementById('modal-product-name');
  const productIdElem = document.getElementById('modal-product-id');

  openBtn.addEventListener('click', function() {
      const productName = modal.getAttribute('data-product-name');
      const productId = modal.getAttribute('data-product-id');

      productNameElem.textContent = "Enquiry for " + productName;

      const hiddenProductNameField = document.querySelector('[name="product_name"]');
      if (hiddenProductNameField) {
          hiddenProductNameField.value = productName;
      }

      const hiddenProductIdField = document.querySelector('[name="product_id"]');
      if (hiddenProductIdField) {
          hiddenProductIdField.value = productId; 
      }

      modal.style.display = 'block';
  });

  closeBtn.addEventListener('click', function() {
      modal.style.display = 'none';

      const hiddenProductNameField = document.querySelector('[name="product_name"]');
      const hiddenProductIdField = document.querySelector('[name="product_id"]');

      if (hiddenProductNameField) {
          hiddenProductNameField.value = ''; 
      }
      if (hiddenProductIdField) {
          hiddenProductIdField.value = ''; 
      }

      const form = modal.querySelector('form');
      if (form) {
          form.reset(); 
      }
  });

  window.addEventListener('click', function(event) {
      if (event.target === modal) {
          modal.style.display = 'none';

          const hiddenProductNameField = document.querySelector('[name="product_name"]');
          const hiddenProductIdField = document.querySelector('[name="product_id"]');

          if (hiddenProductNameField) {
              hiddenProductNameField.value = '';
          }
          if (hiddenProductIdField) {
              hiddenProductIdField.value = '';
          }

          const form = modal.querySelector('form');
          if (form) {
              form.reset(); 
          }
      }
  });
});