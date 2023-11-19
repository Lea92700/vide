// scripts.js
const modalContainer = document.getElementById("modal-container");
const modalTriggers = document.querySelectorAll(".modal-trigger");

modalTriggers.forEach(trigger => trigger.addEventListener("click", toggleModal))

function toggleModal(){
  modalContainer.classList.toggle("active")
}


const photos = [
  { "image": "nathalie-0.jpeg" },
  { "image": "nathalie-1.jpeg" },
  { "image": "nathalie-2.jpeg" },
  { "image": "nathalie-3.jpeg" },
  { "image": "nathalie-4.jpeg" },
  { "image": "nathalie-5.jpeg" },
  { "image": "nathalie-6.jpeg" },
  { "image": "nathalie-7.jpeg" },
  { "image": "nathalie-8.jpeg" },
  { "image": "nathalie-9.jpeg" },
  { "image": "nathalie-10.jpeg" },
  { "image": "nathalie-11.jpeg" },
  { "image": "nathalie-12.jpeg" },
  { "image": "nathalie-13.jpeg" },
  { "image": "nathalie-14.jpeg" },
  { "image": "nathalie-15.jpeg" },
];

document.addEventListener('DOMContentLoaded', function () {
  const banner = document.getElementById("banner");
  const bannerImg = banner.querySelector('.banner-img');
  const arrowLeft = document.querySelector('.arrow_left');
  const arrowRight = document.querySelector('.arrow_right');

  var totalPhotos = photos.length;
  var clickCount = 0;

  function updateCounter() {
    console.log(clickCount);
    if (clickCount < 0) {
      clickCount = totalPhotos - 1;
    } else if (clickCount >= totalPhotos) {
      clickCount = 0;
    }
  }

  arrowLeft.addEventListener('click', function () {
    clickCount--;
    updateCounter();
    console.log('Clic sur la flèche gauche');
    updateBannerContent();
  });

  arrowRight.addEventListener('click', function () {
    clickCount++;
    updateCounter();
    console.log('Clic sur la flèche droite');
    updateBannerContent();
  });

  function updateBannerContent() {
    bannerImg.src = "<?php echo get_template_directory_uri(); ?>/assets/" + photos[clickCount].image;
  }

  updateBannerContent();
});




