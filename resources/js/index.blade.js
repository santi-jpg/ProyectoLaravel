// botton registrar nuevo
document.addEventListener('DOMContentLoaded', function() {
    const registrarNuevoBtn= document.getElementById('registrarNuevoBtn');
    if (registrarNuevoBtn) {
        registrarNuevoBtn.addEventListener('click', function() {
        const url = this.getAttribute('data-url');
        if (url) {
          window.location.href = url;
        } else {
          console.error('La URL no se encontró en el atributo data-url del botón.');
        }
      });
    }
  });

  // botton Regresar al menu
document.addEventListener('DOMContentLoaded', function() {
    const regresarMenuBtn = document.getElementById('regresarMenuBtn');
    if (regresarMenuBtn) {
      regresarMenuBtn.addEventListener('click', function() {
        const url = this.getAttribute('data-url');
        if (url) {
          window.location.href = url;
        } else {
          console.error('La URL no se encontró en el atributo data-url del botón.');
        }
      });
    }
  });

   // botton Regresar form.blade.php
document.addEventListener('DOMContentLoaded', function() {
    const regresarPagina = document.getElementById('regresarPagina');
    if (regresarPagina) {
        regresarPagina.addEventListener('click', function() {
        const url = this.getAttribute('data-url');
        if (url) {
          window.location.href = url;
        } else {
          console.error('La URL no se encontró en el atributo data-url del botón.');
        }
      });
    }
  });