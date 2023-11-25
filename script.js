const products = [
    { id: 1, name: 'Producto 1', price: 20 },
    { id: 2, name: 'Producto 2', price: 30 },
    { id: 3, name: 'Producto 3', price: 40 }
];

function displayProducts() {
    const productList = document.getElementById('product-list');
    productList.innerHTML = '';

    products.forEach(product => {
        const productDiv = document.createElement('div');
        productDiv.classList.add('product');

        productDiv.innerHTML = `
            <h2>${product.name}</h2>
            <p>Precio: $${product.price}</p>
            <button onclick="addToCart(${product.id})">Agregar al Carrito</button>
        `;

        productList.appendChild(productDiv);
    });
}

function addToCart(productId) {
    // Simular agregar productos al carrito
    console.log(`Producto ${productId} agregado al carrito.`);
}

// Mostrar productos al cargar la página
displayProducts();
