document.addEventListener('DOMContentLoaded', () => {
    const registroForm = document.getElementById('registro-form');
    const mensajeExito = document.getElementById('mensaje-exito');

    registroForm.addEventListener('submit', (event) => {
        event.preventDefault();
        const nombre = event.target.nombre.value;
        const email = event.target.email.value;
        const password = event.target.password.value;

        // Aquí puedes agregar tu lógica de registro de cuenta.
        // Por ejemplo, puedes enviar los datos a un servidor o almacenarlos en una base de datos.

        // Simulación de éxito (cuenta creada)
        mensajeExito.textContent = 'Cuenta creada con éxito';
        registroForm.reset();
    });
});
