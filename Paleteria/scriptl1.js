document.addEventListener('DOMContentLoaded', () => {
    const loginForm = document.getElementById('login-form');
    const errorMessage = document.getElementById('error-message');

    loginForm.addEventListener('submit', (event) => {
        event.preventDefault();
        const username = event.target.username.value;
        const password = event.target.password.value;

        // Aquí puedes agregar tu lógica de autenticación.
        // Por ejemplo, puedes comparar los valores de usuario y contraseña con datos almacenados o usar una API de autenticación.

        if (username === 'usuario' && password === 'contraseña') {
            // Autenticación exitosa
            errorMessage.textContent = '';
            alert('Inicio de sesión exitoso');
        } else {
            // Autenticación fallida
            errorMessage.textContent = 'Usuario o contraseña incorrectos';
        }
    });
});
