function setValuesToIndexes(arr) {

    let length=Number(arr[0]);
    let elementsArr = new Array(length).fill(0);

    for (let i = 1; i <arr.length ; i++) {

        let tokens=arr[i].toString().split(' ');
        let index=Number(tokens[0]);
        let value=Number(tokens[2]);

        elementsArr[index]=value;

    }

    for (let element of elementsArr) {

        console.log(element)
    }


}
