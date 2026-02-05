// This file contains the JavaScript code that handles the functionality of the web store, including loading items from the JSON file, displaying them on the page, and managing the shopping cart.

document.addEventListener('DOMContentLoaded', () => {
    const cart = [];
    const cartItemsContainer = document.getElementById('cart-items');
    const itemsContainer = document.getElementById('items');
    
    // Load items from JSON file
    fetch('/src/data/items.json')
        .then(response => response.json())
        .then(items => {
            displayItems(items);
        })
        .catch(error => console.error('Error loading items:', error));

    // Display items on the page
    function displayItems(items) {
        items.forEach(item => {
            const itemElement = document.createElement('div');
            itemElement.classList.add('item');
            itemElement.innerHTML = `
                <img src="${item.image}" alt="${item.name}">
                <h3>${item.name}</h3>
                <p>${item.description}</p>
                <p>Price: $${item.price.toFixed(2)}</p>
                <button onclick="addToCart(${item.id})">Add to Cart</button>
            `;
            itemsContainer.appendChild(itemElement);
        });
    }

    // Add item to cart
    window.addToCart = function(itemId) {
        const item = cart.find(i => i.id === itemId);
        if (item) {
            item.quantity++;
        } else {
            cart.push({ id: itemId, quantity: 1 });
        }
        updateCart();
    };

    // Update cart display
    function updateCart() {
        cartItemsContainer.innerHTML = '';
        cart.forEach(item => {
            const cartItemElement = document.createElement('div');
            cartItemElement.innerHTML = `Item ID: ${item.id}, Quantity: ${item.quantity}`;
            cartItemsContainer.appendChild(cartItemElement);
        });
    }
});