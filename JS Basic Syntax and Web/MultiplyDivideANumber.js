function multiplyAndDivide(numbersArr) {

    let result=0;
    numbersArr=numbersArr.map(Number);
let a=numbersArr[0];
let b=numbersArr[1];

   if(a>b){
result=a/b;
   }
   else if(b>=a){
       result=a*b;
   }
console.log(result)
}
multiplyAndDivide([144,12]);