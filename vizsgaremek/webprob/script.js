document.addEventListener("DOMContentLoaded", () => {
    const hero = document.querySelector(".hero");
    hero.style.opacity = 0;
    setTimeout(() => {
      hero.style.transition = "opacity 2s";
      hero.style.opacity = 1;
    }, 500);
  });