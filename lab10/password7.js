function password(length) {
    const Num = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
    const LatSymbols = [
        'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z',
        'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'
    ];
    const SpecialSymbols = ['!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '-', '_', '+', '=', '{', '}', '[', ']', '|', '\\', ':', ';', '"', "'", '<', '>', ',', '.', '?', '/', '~', '`'];
    const SymbolsArr = [Num, LatSymbols, SpecialSymbols];

    let finalPassword = '';
    for (let i = 0; i < length; i++) {
        const RandArr = SymbolsArr[Math.floor(Math.random() * SymbolsArr.length)];
        const Curr = RandArr[Math.floor(Math.random() * RandArr.length)];
        finalPassword += Curr;
    }
    return finalPassword;
}

console.log(password(55));