export function formatPrice(price) {
    return `${price.toFixed(2)} Ft`;
}

export function validateQuantity(quantity) {
    return Number.isInteger(quantity) && quantity > 0;
}