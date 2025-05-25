var swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: true,
    },
    pagination: {
      el: ".swiper-pagination",
    },
  });

  document.addEventListener('DOMContentLoaded', function() {
    function isInViewport(element) {
        const rect = element.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)
        );
    }


    function handleScroll() {
        const sections = document.querySelectorAll('.section-title');
        sections.forEach(section => {
            if (isInViewport(section)) {
                section.classList.add('visible');
            } else {
                section.classList.remove('visible'); 
            }
        });
    }

    window.addEventListener('scroll', handleScroll);

    handleScroll();
});


document.addEventListener('DOMContentLoaded', function() {
    const burgerBtn = document.getElementById('burger-btn');
    const burgerMenu = document.getElementById('burger-menu');
    const body = document.body;

    burgerBtn.addEventListener('click', () => {
        burgerMenu.classList.toggle('menu-active');
        burgerBtn.classList.toggle('burger-open');
        body.classList.toggle('menu-open');
    });

    const menuLinks = burgerMenu.querySelectorAll('a');
    menuLinks.forEach(link => {
        link.addEventListener('click', () => {
            burgerMenu.classList.remove('menu-active');
            burgerBtn.classList.remove('burger-open');
            body.classList.remove('menu-open');
        });
    });
});


  
  document.addEventListener('DOMContentLoaded', function() {
    const nuages = document.querySelector('.nuages');
    let currentPosition = 0; // Position initiale de l'image

    // Ajouter l'événement de défilement sur toute la page
    window.addEventListener('scroll', function() {
        const maxTranslation = 300; // Distance maximale de déplacement (300px)
        const scrollPosition = window.scrollY; // Récupère la position du défilement vertical

        // Calculer la nouvelle position en fonction du défilement de la page
        currentPosition = Math.min(scrollPosition * 0.1, maxTranslation); // Ajuste la vitesse avec 0.1

        // Appliquer la transformation pour déplacer l'image
        nuages.style.transform = `translateX(${-currentPosition}px)`;
    });
});

