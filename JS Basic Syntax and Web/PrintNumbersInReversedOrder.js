function printNumbersInReversedOrder(numbersArr) {

    numbersArr=numbersArr.map(Number);

    for (let i = numbersArr.length-1; i >=0 ; i--) {

        console.log(numbersArr[i]);
    }

}
printNumbersInReversedOrder([1,2,3]);