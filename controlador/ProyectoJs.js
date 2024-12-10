document.addEventListener('DOMContentLoaded', () => {
    const carouselImages = document.getElementById('carouselImages');
    let currentIndex = 0;

    function startCarousel() {
        const images = carouselImages.children;
        const totalImages = images.length;

        setInterval(() => {
            currentIndex++;
            if (currentIndex >= totalImages) {
                currentIndex = 0;
            }
            // Usamos translateX para mover el carrusel y mostrar solo una imagen a la vez.
            carouselImages.style.transition = 'transform 0.5s ease-in-out'; // Transición suave
            carouselImages.style.transform = `translateX(-${currentIndex * 100}%)`; // Desplazar el carrusel al índice correspondiente
        }, 5000); // Cambiar cada 5 segundos
    }

    startCarousel();

    const offerButtons = document.querySelectorAll('.highlighted-product .btn');
    offerButtons.forEach(button => {
        button.addEventListener('click', (e) => {
            e.preventDefault();
            window.location.href = 'productos.html';
        });
    });

    const carouselLinks = document.querySelectorAll('.carousel-images a img');
    carouselLinks.forEach(img => {
        img.addEventListener('mouseover', () => {
            img.style.opacity = '0.8';
        });
        img.addEventListener('mouseout', () => {
            img.style.opacity = '1';
        });
    });
});
document.addEventListener('DOMContentLoaded', () => {
    const navbar = document.querySelector('.navbar');
    let lastScrollTop = 0;

    window.addEventListener('scroll', () => {
        const currentScroll = window.scrollY;

        if (currentScroll > lastScrollTop) {
            // Usuario se desplaza hacia abajo: oculta la barra
            navbar.classList.add('hidden');
        } else {
            // Usuario se desplaza hacia arriba: muestra la barra
            navbar.classList.remove('hidden');
        }

        lastScrollTop = currentScroll <= 0 ? 0 : currentScroll; // Evita valores negativos
    });
});
