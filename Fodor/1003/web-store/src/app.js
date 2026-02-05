// This file contains the main logic of the web store. It fetches the items from items.json, renders them in the HTML, and manages user interactions such as adding items to the cart.

const itemContainer = document.getElementById('item-container');
const cartItemsContainer = document.getElementById('cart-items');
let cart = [];

// Fetch items from items.json
fetch('./src/data/items.json')
    .then(response => response.json())
    .then(items => {
        renderItems(items);
    })
    .catch(error => console.error('Error fetching items:', error));

// Render items in the HTML
function renderItems(items) {
    items.forEach(item => {
        const itemDiv = document.createElement('div');
        itemDiv.classList.add('item');
        itemDiv.innerHTML = `
            <img src="${item.image}" alt="${item.name}">
            <h3>${item.name}</h3>
            <p>${item.description}</p>
            <p>Price: $${item.price}</p>
            <button onclick="addToCart(${item.id})">Add to Cart</button>
        `;
        itemContainer.appendChild(itemDiv);
    });
}

// Add item to cart
function addToCart(itemId) {
    const item = cart.find(i => i.id === itemId);
    if (item) {
        item.quantity++;
    } else {
        cart.push({ id: itemId, quantity: 1 });
    }
    renderCart();
}

// Render cart items
function renderCart() {
    cartItemsContainer.innerHTML = '';
    cart.forEach(cartItem => {
        const itemDiv = document.createElement('div');
        itemDiv.classList.add('cart-item');
        itemDiv.innerHTML = `
            <p>Item ID: ${cartItem.id}</p>
            <p>Quantity: ${cartItem.quantity}</p>
        `;
        cartItemsContainer.appendChild(itemDiv);
    });
}