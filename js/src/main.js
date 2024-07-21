import { initSlickCarousels } from "./slick-init";
import { toggleMenu, closeMenu } from "./menu-init";
import { openModal, closeModal } from "./modal-init";
import { countdownTimer } from "./countdown-init";

var target_date = new Date("March 8, 2025 15:00:00").getTime();
var current_date = new Date().getTime();
var seconds_left = (target_date - current_date) / 1000;

let Main = {
  init: async function () {
    document.addEventListener("DOMContentLoaded", () => {
      toggleMenu();
      closeMenu();
      openModal();
      closeModal();
      initSlickCarousels();
      countdownTimer(seconds_left);
    });
  },
};

Main.init();
