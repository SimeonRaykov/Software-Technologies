<?php

namespace CalculatorBundle\Entity;

class Calculator
{
    /**
     * @var float
     */
    public $leftOperand;
    /**
     * @var float
     */

    public $rightOperand;

    /**
     * @var string
     */
    public $operator;

    /**
     * Calculator constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return float
     */
    public function getLeftOperand()
    {
        return $this->leftOperand;
    }

    /**
     * @return float
     */
    public function getRightOperand()
    {
        return $this->rightOperand;
    }

    /**
     * @param float $leftOperand
     */
    public function setLeftOperand($leftOperand)
    {
        $this->leftOperand = $leftOperand;
    }

    /**
     * @param float $rightOperand
     */
    public function setRightOperand($rightOperand)
    {
        $this->rightOperand = $rightOperand;
    }



    /**
     * Calculator constructor.
     * @param float $rightOperand
     */


    /**
     * @return string
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * @param string $operator
     */
    public function setOperator($operator)
    {
        $this->operator = $operator;
    }

}