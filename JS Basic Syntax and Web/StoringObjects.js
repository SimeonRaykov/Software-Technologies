function storingObjects(arrInput) {

    let personArr=[];

    for (let i = 0; i < arrInput.length; i++) {

        let tokens = arrInput[i].split("->");
        let name = tokens[0].trim();
        let age = tokens[1].trim();
        let grade = tokens[2].trim();

        personArr.push({Name:name,
        Age:age,
        Grade:grade})

    }


    for (let person of personArr) {
        for (let arrInputElement of Object.keys(person)) {
            console.log(`${arrInputElement}: ${person[arrInputElement]}`)
        }

    }


}