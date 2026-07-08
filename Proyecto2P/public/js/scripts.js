// Espera a que todo el HTML cargue antes de ejecutar el script
document.addEventListener("DOMContentLoaded", () => {

  // ============================
  // ELEMENTOS PRINCIPALES
  // ============================
  const body = document.body;
  const navToggle = document.getElementById("navToggle");
  const navMenu = document.getElementById("navMenu");
  const themeBtn = document.getElementById("themeBtn");

  // ============================
  // TEMA CLARO / OSCURO
  // ============================
  const savedTheme = localStorage.getItem("theme");

  if (savedTheme === "dark") {
    body.classList.add("dark");

    if (themeBtn) {
      themeBtn.textContent = "☀️";
    }
  }

  if (themeBtn) {
    themeBtn.addEventListener("click", () => {

      body.classList.toggle("dark");

      const darkMode = body.classList.contains("dark");

      themeBtn.textContent = darkMode ? "☀️" : "🌙";

      localStorage.setItem("theme", darkMode ? "dark" : "light");

    });
  }

  // ============================
  // MENÚ RESPONSIVO
  // ============================
  if (navToggle && navMenu) {

    navToggle.addEventListener("click", () => {

      const isOpen = navMenu.classList.toggle("open");

      navToggle.setAttribute("aria-expanded", String(isOpen));

    });

    navMenu.querySelectorAll("a").forEach(link => {

      link.addEventListener("click", () => {

        navMenu.classList.remove("open");

        navToggle.setAttribute("aria-expanded", "false");

      });

    });
  }

  // ============================
  // MARCAR MENÚ ACTIVO
  // ============================
  const currentParams = new URLSearchParams(window.location.search);
  const currentPage = currentParams.get("pagina") || "inicio";

  document.querySelectorAll(".nav__link").forEach(link => {

    const url = new URL(link.href);
    const page = url.searchParams.get("pagina") || "inicio";

    if (page === currentPage) {
      link.classList.add("active");
    } else {
      link.classList.remove("active");
    }

  });

  // ============================
  // SLIDESHOW / CARRUSEL
  // ============================
  const slides = Array.from(document.querySelectorAll(".slideshow__img"));
  const dots = Array.from(document.querySelectorAll(".dot"));
  const prevBtn = document.getElementById("prevSlide");
  const nextBtn = document.getElementById("nextSlide");

  let current = 0;
  let intervalId = null;

  function showSlide(index) {

    if (!slides.length) return;

    current = (index + slides.length) % slides.length;

    slides.forEach((slide, i) => {
      slide.classList.toggle("active", i === current);
    });

    dots.forEach((dot, i) => {
      dot.classList.toggle("active", i === current);
    });
  }

  function nextSlide() {
    showSlide(current + 1);
  }

  function startAutoplay() {

    if (!slides.length) return;

    intervalId = setInterval(nextSlide, 5000);
  }

  function restartAutoplay() {

    clearInterval(intervalId);

    startAutoplay();
  }

  if (slides.length) {

    if (prevBtn) {
      prevBtn.addEventListener("click", () => {
        showSlide(current - 1);
        restartAutoplay();
      });
    }

    if (nextBtn) {
      nextBtn.addEventListener("click", () => {
        showSlide(current + 1);
        restartAutoplay();
      });
    }

    dots.forEach(dot => {

      dot.addEventListener("click", () => {

        const idx = Number(dot.dataset.slide);

        showSlide(idx);

        restartAutoplay();

      });

    });

    showSlide(0);

    startAutoplay();
  }

  // ============================
  // ACORDEÓN DE PRECIOS
  // ============================
  document.querySelectorAll(".accordion__trigger").forEach(trigger => {

    trigger.addEventListener("click", () => {

      const item = trigger.parentElement;

      const isOpen = item.classList.contains("open");

      document.querySelectorAll(".accordion__item")
        .forEach(el => el.classList.remove("open"));

      if (!isOpen) {
        item.classList.add("open");
      }

    });

  });

});