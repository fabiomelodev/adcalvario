import Swiper, { Navigation, Pagination } from "swiper";
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";

new Swiper(".js-swiper-home-banner", {
  modules: [Navigation, Pagination],
  slidesPerView: 1,

  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".js-swiper-button-prev-banner",
  },

  pagination: {
    el: ".js-swiper-pagination-banner",
    type: "bullets",
  },

  breakpoints: {
    320: {
      slidesPerView: 1,
    },

    992: {
      slidesPerView: 1,
    },
  },
});

new Swiper(".js-swiper-about-gallery", {
  modules: [Navigation, Pagination],
  slidesPerView: 1,

  navigation: {
    nextEl: ".js-swiper-button-next-about-gallery",
    prevEl: ".js-swiper-button-prev-about-gallery",
  },

  // pagination: {
  //   el: ".js-swiper-pagination-banner",
  //   type: "bullets",
  // },

  breakpoints: {
    320: {
      slidesPerView: 1.25,
      spaceBetween: 16,
    },

    992: {
      slidesPerView: 1,
    },
  },
});

new Swiper(".js-swiper-events", {
  modules: [Navigation],
  slidesPerView: 1.2,
  spaceBetween: 15,

  navigation: {
    prevEl: ".js-swiper-button-prev-events",
    nextEl: ".js-swiper-button-next-events",
  },

  breakpoints: {
    320: {
      slidesPerView: 1.2,
      spaceBetween: 15,
    },

    992: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
  },
});

new Swiper(".js-swiper-categories", {
  modules: [Navigation],
  slidesPerView: 5,
  spaceBetween: 30,

  navigation: {
    prevEl: ".js-swiper-button-prev-categories",
    nextEl: ".js-swiper-button-next-categories",
  },

  breakpoints: {
    320: {
      slidesPerView: 1.5,
      spaceBetween: 30,
    },

    1280: {
      slidesPerView: 5,
      spaceBetween: 30,
    },
  },
});

const swiperEventsOtherOptions = {
  modules: [Navigation],
  allowTouchMove: false,

  navigation: {
    prevEl: ".js-swiper-button-prev-events-other",
    nextEl: ".js-swiper-button-next-events-other",
  },
};

new Swiper(".js-swiper-events-other", swiperEventsOtherOptions);

new Swiper(".js-swiper-events-other-thumbnail", swiperEventsOtherOptions);

new Swiper(".js-swiper-testimonials", {
  modules: [Navigation],
  allowTouchMove: false,

  navigation: {
    prevEl: ".js-swiper-button-prev-testimonials",
    nextEl: ".js-swiper-button-next-testimonials",
  },
});

if (document.querySelector(".js-modal-gallery")) {
  const galleryItems = document.querySelectorAll(".js-gallery-item");
  const modalGallery = document.querySelector(".js-modal-gallery");
  const galleryOverlay = document.querySelector(".js-modal-gallery-overlay");

  galleryItems.forEach((item) => {
    item.addEventListener("click", function () {
      modalGallery.classList.add("is-active");

      new Swiper(".js-swiper-photos", {
        modules: [Navigation],
        initialSlide: item.dataset.value,

        navigation: {
          prevEl: ".js-swiper-button-prev-gallery",
          nextEl: ".js-swiper-button-next-gallery",
        },
      });
    });
  });

  galleryOverlay.addEventListener("click", function () {
    modalGallery.classList.remove("is-active");
  });
}
