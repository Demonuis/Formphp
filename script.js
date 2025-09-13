document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    const successMessage = document.getElementById('successMessage');

    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Previene el envío del formulario por defecto

        // Simulación de envío exitoso
        successMessage.style.display = 'block';
        
        // Opcional: limpiar los campos del formulario
        form.reset();
        
        // Opcional: ocultar el mensaje de éxito después de unos segundos
        setTimeout(() => {
            successMessage.style.display = 'none';
        }, 3000); // Se oculta después de 3 segundos
    });
});
