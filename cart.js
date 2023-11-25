function displayCart() {
    const cart = document.getElementById('cart');
    cart.innerHTML = '<h2>Carrito de Compras</h2>';

    // Simular obtener productos en el carrito (puedes mejorar esto en un entorno real)
    const cartProducts = [
        { id: 1, name: 'Producto 1', price: 20 },
        { id: 2, name: 'Producto 2', price: 30 }
    ];

    cartProducts.forEach(product => {
        const productDiv = document.createElement('div');
        productDiv.classList.add('product');

        productDiv.innerHTML = `
            <h3>${product.name}</h3>
            <p>Precio: $${product.price}</p>
        `;

        cart.appendChild(productDiv);
    });
}

// Mostrar productos en el carrito al cargar la página
displayCart();
