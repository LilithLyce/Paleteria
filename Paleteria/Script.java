document.addEventListener('DOMContentLoaded', () => {
    const carrito = document.getElementById('lista-carrito');
    const total = document.getElementById('total');
    let carritoItems = [];

    document.querySelectorAll('.agregar-carrito').forEach((boton) => {
        boton.addEventListener('click', (event) => {
            const nombre = event.target.getAttribute('data-nombre');
            const precio = parseFloat(event.target.getAttribute('data-precio'));
            agregarAlCarrito(nombre, precio);
        });
    });

    function agregarAlCarrito(nombre, precio) {
        const item = { nombre, precio };
        carritoItems.push(item);
        actualizarCarrito();
    }

    function actualizarCarrito() {
        carrito.innerHTML = '';
        let carritoTotal = 0;

        carritoItems.forEach((item) => {
            const li = document.createElement('li');
            li.innerHTML = `${item.nombre}: $${item.precio.toFixed(2)}`;
            carrito.appendChild(li);
            carritoTotal += item.precio;
        });

        total.textContent = carritoTotal.toFixed(2);
    }
});
