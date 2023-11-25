function displayCheckout() {
    const checkout = document.getElementById('checkout');
    checkout.innerHTML = '<h2>Detalles del Pago</h2>';

    // Simular obtener detalles de pago (puedes mejorar esto en un entorno real)
    const totalAmount = 50; // Puedes calcular el total de la compra

    const checkoutDiv = document.createElement('div');
    checkoutDiv.innerHTML = `
        <p>Total a pagar: $${totalAmount}</p>
        <button onclick="completePurchase()">Completar Compra</button>
    `;

    checkout.appendChild(checkoutDiv);
}

function completePurchase() {
    // Simular completar la compra (puedes mejorar esto en un entorno real)
    alert('Compra completada. ¡Gracias por tu compra!');
}

// Mostrar detalles del pago al cargar la página
displayCheckout();
