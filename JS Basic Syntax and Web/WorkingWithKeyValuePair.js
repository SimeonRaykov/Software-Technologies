function keyValuePairWork(input) {

    let dictionary = {};

    for (let i = 0; i <input.length-1 ; i++) {

        let tokens=input[i].toString().split(" ");
        let key=tokens[0];
        let value=tokens[1];

            dictionary[key]=value;

    }

   if(dictionary.hasOwnProperty(input[input.length-1])){
        console.log(dictionary[input[input.length-1]])

    }
    else{
        console.log("None");
   }


}