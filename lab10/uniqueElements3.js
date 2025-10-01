function uniqueElements(arr) {
    let result = {};
    for (let i = 0; i < arr.length; i++) {
        let currentElement = String(arr[i]);
        if (result[currentElement] === undefined) {
            result[currentElement] = 1;
        } else {
            result[currentElement] += 1;
        }
    }
    return result;
}

let example = uniqueElements(['привет', 'hello', 1, '1', 'hello']);
console.log(example);