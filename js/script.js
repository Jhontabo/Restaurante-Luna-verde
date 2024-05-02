

function cambiarImagen(imagenNueva) {
  const circuloCentral = document.querySelector('.circulo-central');
  const nuevaImagen = new Image(); // Crea un nuevo objeto Image

  // Cuando la nueva imagen se cargue
  nuevaImagen.onload = function() {
    // Inicia la transición de desvanecimiento
    circuloCentral.style.transition = 'opacity 0.5s ease-in-out';
    circuloCentral.style.opacity = 0; // Establece la opacidad a 0 para iniciar la transición

    // Espera a que la transición de desvanecimiento se complete antes de cambiar la imagen
    setTimeout(function() {
      circuloCentral.src = imagenNueva; // Cambia la imagen
      circuloCentral.style.opacity = 1; // Comienza la transición de aparición
    }, 500); // La duración debe coincidir con la transición de CSS
  }

  nuevaImagen.src = imagenNueva; // Comienza a cargar la nueva imagen
}

function redirigirAPedir() {
  window.location.href = './RegistrarPedido.php';
}




function desplazarseASeccion(event) {
  event.preventDefault(); // Evita el comportamiento predeterminado del enlace
  const seccionId = event.target.getAttribute('href'); // Obtiene el valor del atributo href
  const seccion = document.querySelector(seccionId); // Selecciona la sección correspondiente

  // Desplazarse suavemente a la sección
  seccion.scrollIntoView({
    behavior: 'smooth',
    block: 'start'
  });
}

// Agrega el evento de clic a cada enlace del menú
const enlaces = document.querySelectorAll('a[href^="#"]');
enlaces.forEach(enlace => {
  enlace.addEventListener('click', desplazarseASeccion);
});


function desplazarseAMenu() {
  const menuSection = document.getElementById('menu');
  menuSection.scrollIntoView({ behavior: 'smooth' });
}