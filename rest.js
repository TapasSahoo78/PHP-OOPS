function restOperator(...num) {
    let sum = 0;
    for (let i of num) {
        sum += i;
    }
    return num;
}

console.log(restOperator(10, 20, 30, 40, 50));