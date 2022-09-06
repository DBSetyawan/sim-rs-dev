const instagramNext = document.getElementById('instagramSlider__controls--next');
const instagramPrev = document.getElementById('instagramSlider__controls--prev');
const instagramSlider = document.getElementById('instagram-slides');

if (instagramNext != null) {
  instagramNext.addEventListener('click', () => {
    if (instagramSlider != null) {
      const instagramSlides = instagramSlider.children;
      if (instagramSlides != null) {
        const instaChild = instagramSlides[0];
        instagramSlider.removeChild(instaChild);
        instagramSlider.appendChild(instaChild);
      }
    }
  });
}

if (instagramPrev != null) {
  instagramPrev.addEventListener('click', () => {
    if (instagramSlider != null) {
      const instagramSlides = instagramSlider.children;
      if (instagramSlides != null) {
        const instaChild = instagramSlides[instagramSlides.length - 1];
        instagramSlider.removeChild(instaChild);
        instagramSlider.insertBefore(instaChild, instagramSlides[0]);
      }
    }
  });
}
