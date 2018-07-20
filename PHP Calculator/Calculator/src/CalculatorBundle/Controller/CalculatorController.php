<?php

namespace CalculatorBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use CalculatorBundle\Entity\Calculator;
use CalculatorBundle\Form\CalculatorType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CalculatorController extends Controller
{
    /**
     * @param Request $request
     *
     * @Route("/", name="index")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     *
     */
    public function index(Request $request)
    {
        $calculator = new Calculator();

        $form = $this->createForm(CalculatorType::class, $calculator);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $leftOperand = $calculator->getLeftOperand();
            $rightOperand = $calculator->getRightOperand();
            $operator = $calculator->getOperator();

            $result = null;

            switch ($operator) {
                case'+':
                    $result = $leftOperand + $rightOperand;
                    break;
                case'-':
                    $result = $leftOperand - $rightOperand;
                    break;
                case'/':
                    $result = $leftOperand / $rightOperand;
                    break;
                case'*':
                    $result = $leftOperand * $rightOperand;
                    break;
                case'%':
                    $result = $leftOperand % $rightOperand;
                    break;
                case'^':
                    $result = $result . pow($leftOperand, $rightOperand);
                    break;
                case'AND':

                    if (($leftOperand != 0 && $leftOperand != 1) && ($rightOperand != 0 && $rightOperand != 1)) {

                        $message = "Invalid input on both fields!:\\nType 0 or 1";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                        return $this->render('calculator/index.html.twig', ['form' => $form->createView()]);


                    }


                    if ($leftOperand != 0 && $leftOperand != 1) {

                        $message = "Invalid input on the left field!:\\nType 0 or 1";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                        return $this->render('calculator/index.html.twig', ['form' => $form->createView()]);


                    }
                    if ($rightOperand != 0 && $rightOperand != 1) {
                        $message = "Invalid input on the right field!:\\nType 0 or 1";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                        return $this->render('calculator/index.html.twig', ['form' => $form->createView()]);
                    }


                    if ($leftOperand == 1 && $rightOperand == 1) {
                        $result = 1;
                    } else {
                        $result = 0;
                    }

                    break;
                case'OR':

                    if (($leftOperand != 0 && $leftOperand != 1) && ($rightOperand != 0 && $rightOperand != 1)) {

                        $message = "Invalid input on both fields!:\\nType 0 or 1";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                        return $this->render('calculator/index.html.twig', ['form' => $form->createView()]);


                    }


                    if ($leftOperand != 0 && $leftOperand != 1) {

                        $message = "Invalid input on the left field!:\\nType 0 or 1";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                        return $this->render('calculator/index.html.twig', ['form' => $form->createView()]);

                    }
                    if ($rightOperand != 0 && $rightOperand != 1) {
                        $message = "Invalid input on the right field!:\\nType 0 or 1";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                        return $this->render('calculator/index.html.twig', ['form' => $form->createView()]);
                    }

                    if ($leftOperand == 1 || $rightOperand == 1) {
                        $result = 1;
                    } else {
                        $result = 0;
                    }


                    break;
                case'XOR':


                    if (($leftOperand != 0 && $leftOperand != 1) && ($rightOperand != 0 && $rightOperand != 1)) {

                        $message = "Invalid input on both fields!:\\nType 0 or 1";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                        return $this->render('calculator/index.html.twig', ['form' => $form->createView()]);


                    }


                    if ($leftOperand != 0 && $leftOperand != 1) {

                        $message = "Invalid input on the left field!:\\nType 0 or 1";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                        return $this->render('calculator/index.html.twig', ['form' => $form->createView()]);

                    }
                    if ($rightOperand != 0 && $rightOperand != 1) {
                        $message = "Invalid input on the right field!:\\nType 0 or 1";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                        return $this->render('calculator/index.html.twig', ['form' => $form->createView()]);
                    }


                    if (($rightOperand == 1 || $leftOperand == 1) && ($leftOperand != $rightOperand)) {
                        $result = 1;
                    } else {
                        $result = 0;
                    }

                    break;

                case 'Binary':

                    if ($rightOperand != null) {
                        $message = "Do not write a second number!";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                        return $this->render('calculator/index.html.twig', ['form' => $form->createView()]);
                    }


                    $result = decbin($leftOperand);
                    break;

                case "LuckyNumber":

                    $message = "Your lucky number is " . rand(0, 1000);
                    echo "<script type='text/javascript'>alert('$message');</script>";

                    return $this->render('calculator/index.html.twig', ['form' => $form->createView()]);

                    break;

            }
            return $this->render('calculator/index.html.twig',
                ['result' => $result, 'calculator' => $calculator, 'form' => $form->createView()]);

        }

        return $this->render('calculator/index.html.twig', ['form' => $form->createView()]);

    }
}
