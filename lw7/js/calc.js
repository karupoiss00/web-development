const operations = {
    "+": (x, y) => x + y,
    "-": (x, y) => x - y,
    "*": (x, y) => x * y,
    "/": (x, y) => x / y,
};

const operators = {
    "(": 3,
    ")": 3,
    "*": 2,
    "/": 2,
    "+": 1,
    "-": 1
}

function getLastSignFromStack(stack) {

}

let evaluate = (expr) => {
        let operationStack = [];
        let outputStack = [];

        expr.split(' ').forEach((token) => {
            if (token in operators) {
                if (token === ")") {
                    
                }
                if (operators[token] === operators[operationStack[operationStack.length - 1]]) {
                    outputStack.push(operationStack.pop())
                }
                operationStack.push(token);
            } else {
                outputStack.push(parseInt(token));
            }
        });
        console.log(stack);

};
