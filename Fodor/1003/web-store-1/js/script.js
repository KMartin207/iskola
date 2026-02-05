// This file contains the JavaScript code for the web store functionality.

const items = [
    { id: 1, name: "Item 1", price: 10.00 },
    { id: 2, name: "Item 2", price: 15.00 },
    { id: 3, name: "Item 3", price: 20.00 },
];

let cart = [];

function displayItems() {
    const itemList = document.getElementById('item-list');
    items.forEach(item => {
        const itemDiv = document.createElement('div');
        itemDiv.innerHTML = `
            <h3>${item.name}</h3>
            <p>Price: $${item.price.toFixed(2)}</p>
            <button onclick="addToCart(${item.id})">Add to Cart</button>
        `;
        itemList.appendChild(itemDiv);
    });
}

function addToCart(itemId) {
    const item = items.find(i => i.id === itemId);
    cart.push(item);
    updateCart();
}

function updateCart() {
    const cartItems = document.getElementById('cart-items');
    const cartTotal = document.getElementById('cart-total');
    cartItems.innerHTML = '';
    let total = 0;

    cart.forEach(item => {
        const cartItemDiv = document.createElement('div');
        cartItemDiv.innerHTML = `${item.name} - $${item.price.toFixed(2)}`;
        cartItems.appendChild(cartItemDiv);
        total += item.price;
    });

    cartTotal.innerHTML = `Total: $${total.toFixed(2)}`;
}

document.addEventListener('DOMContentLoaded', displayItems);