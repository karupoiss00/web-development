function isPrime(n) {
    if (typeof n === 'number') {
        checkNumber(n);
    } else if (Array.isArray(n)) {
        for (let element of n) {
            checkNumber(element);
        }
    } else {
        console.log(n.toString(), " не является числом");
    }
}

function checkNumber(n) {
    if (typeof n !== 'number') {
        console.log(n.toString(), " не является числом");
        return;
    }
    if (n < 2) {
        console.log(n.toString(), " - число должно быть больше 2");
        return;
    } else if (n === 2) {
        console.log(n.toString(), " - простое число");
        return;
    }

    let i = 2;
    let numberState = " - простое число";
    const limit = Math.sqrt(n);
    while (i <= limit) {
        if (n % i === 0) {
            numberState = " - составное число";
        }
        i += 1;
    }
    console.log(n.toString(), numberState);
}