function multipleValuesOfKey(input) {

    let dictionaryEl = {};

    for (let i = 0; i < input.length-1; i++) {



        let tokens = input[i].toString().split(" ");
        let key = tokens[0];
        let currentValue = tokens[1];

        if (dictionaryEl.hasOwnProperty(key) === false) {
            dictionaryEl[key] = [];
        }
        dictionaryEl[key].push(currentValue);

    }

    let lastElement = input[input.length - 1];

    if (dictionaryEl.hasOwnProperty(lastElement)) {

        for (let value of dictionaryEl[lastElement]) {
            console.log(value)

        }
    }
    else {
        console.log("None")
    }


}

multipleValuesOfKey(['3 bla', '3 alb', '3']);