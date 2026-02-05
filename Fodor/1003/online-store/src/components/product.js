class Product {
    constructor(id, name, price, description) {
        this.id = id;
        this.name = name;
        this.price = price;
        this.description = description;
    }

    displayDetails() {
        return `
            <h2>${this.name}</h2>
            <p>${this.description}</p>
            <p>Price: $${this.price.toFixed(2)}</p>
        `;
    }
}

export default Product;