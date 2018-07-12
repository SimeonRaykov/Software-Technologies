function Calculator(leftOperand, operator, rightOperand) {

    this.leftOperand = leftOperand;
    this.operator = operator;
    this.rightOperand = rightOperand;

    this.calculateResult = function () {

        let result = 0;

        switch (this.operator) {
            case"+":
                result = this.leftOperand + this.rightOperand;
                break;
            case"-":
                result = this.leftOperand - this.rightOperand;
                break;
            case"*":
                result = this.leftOperand * this.rightOperand;
                break;
            case"/":
                result = this.leftOperand / this.rightOperand;
                break;
            case"%":
                result = this.leftOperand % this.rightOperand;
                break;
            case"^":
                result=this.leftOperand ** this.rightOperand;
                break;
            case"log":
                result = Number(Math.log(this.leftOperand));
                break;
            case"log2":
                result = Math.log2(this.leftOperand);
                break;
            case"log10":
                result = Math.log10(this.leftOperand);
                break;
            case"Binary":
            function dec2bin(dec){
                return (dec >>> 0).toString(2);
            }
                result=Number(dec2bin(this.leftOperand));
            break;
            case"Hexadecimal":
           let hexString = this.leftOperand.toString(16);
           result= hexString;
           break;

        }
        return result;
    }

}

module.exports = Calculator;