using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;

namespace CalculatorApp.Models
{
    public class Calculator
    {
        public Calculator()
        {
            this.Result = 0;
        }

        public decimal LeftOperand { get; set; }
        public decimal RightOperand { get; set; }
        public string Operator { get; set; }
        public decimal Result { get; set; }

        public void CalculateResult()
        {
            switch (this.Operator)
            {
                case "+":
                    this.Result = this.LeftOperand + this.RightOperand;
                    break;
                case "-":
                    this.Result = this.LeftOperand - this.RightOperand;
                    break;
                case "*":
                    this.Result = this.LeftOperand * this.RightOperand;
                    break;
                case "/":
                    this.Result = this.LeftOperand / this.RightOperand;
                    break;
                case "%":
                    this.Result = this.LeftOperand % this.RightOperand;
                    break;

                case "^":
                    this.Result = 1;

                    for (int i = 0; i < this.RightOperand; i++)
                    {
                        this.Result *= this.LeftOperand;

                    }


                    break;
                case "Fibo":

                    var x = fibonacci(Convert.ToInt32(this.LeftOperand));

                    this.Result = x;

                    break;
            }
        }

        public int fibonacci(int n)
        {
            if (n == 0)
                return 0;
            else if (n == 1)
                return 1;
            else
                return fibonacci(n - 1) + fibonacci(n - 2);

        }
    }
}


