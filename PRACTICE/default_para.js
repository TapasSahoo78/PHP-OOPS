function getFullPrice(price) {
    return price * 2;
}

function getValue(price,pricePlusTax=getFullPrice(price)) {
    console.log('My Price'+ price.toFixed(2));
    console.log('Tax'+ pricePlusTax.toFixed(2))
}


getValue(20);
getValue(30,50);