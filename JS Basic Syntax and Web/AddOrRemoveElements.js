function addOrRemoveElements(arr) {

    let numbersArr = [];

    for (let i = 0; i < arr.length; i++) {

        let tokens = arr[i].toString().split(" ");
        if (tokens[0] === 'add') {

            let number = Number(tokens[1]);
            numbersArr.push(number);
        }
        else if (tokens[0] === 'remove') {

            let index = Number(tokens[1]);
            numbersArr.splice(index, 1);

        }


    }

    for (let numbersArrElement of numbersArr) {

        console.log(numbersArrElement)
    }


}