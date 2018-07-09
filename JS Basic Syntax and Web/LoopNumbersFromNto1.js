function loopNumbersReverse(numberArray) {

    numberArray=numberArray.map(Number);
    let n=numberArray[0];

    for (let i = n; i >=1 ; i--) {

        console.log(i)
    }

}
loopNumbersReverse([2]);