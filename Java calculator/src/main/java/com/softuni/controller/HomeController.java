package com.softuni.controller;
import com.softuni.entity.Calculator;
import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.PostMapping;
import org.springframework.web.bind.annotation.RequestParam;

import javax.swing.*;

@Controller
public class HomeController {
	@GetMapping("/")
	public String index(Model model) {
		model.addAttribute("view","views/calculatorForm");
		model.addAttribute("operator", "+");
		return "base-layout";

	}
	@PostMapping("/")
	public String calculate(@RequestParam String leftOperand,
							@RequestParam String operator,
							@RequestParam String rightOperand,
							Model model){

		double num1;
		double num2;

		try{
			num1=Double.parseDouble(leftOperand);

		}
		catch (NumberFormatException ex){
			num1=0;
		}

		try{
			num2=Double.parseDouble(rightOperand);
		}
		catch (NumberFormatException ex){
			num2=0;
		}


		Calculator calculator=new Calculator(num1,num2,operator);

		double result=calculator.calculateResult();

		model.addAttribute("result",result);
		model.addAttribute("leftOperand",leftOperand);
		model.addAttribute("rightOperand",rightOperand);
		model.addAttribute("operator",operator);

		model.addAttribute("view","views/calculatorForm");

		return "base-layout";

	}
}
