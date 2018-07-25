import java.rmi.server.ExportException;
import java.util.ArrayList;
import java.util.Collections;
import java.util.List;
import java.util.Scanner;

public class Largest3Numbers {

    public static void main(String[] args) {
        Scanner Scanner = new Scanner(System.in);

        String[] input = Scanner.nextLine().split(" ");
        List<Integer> numbersList = new ArrayList<Integer>();

        for (int i = 0; i < input.length; i++) {
            var currentNumber = Integer.parseInt(input[i]);
            numbersList.add(currentNumber);

        }

        Collections.sort(numbersList);
        Collections.reverse(numbersList);

        for (int i = 0; i <3 ; i++) {

            try{
                System.out.println(numbersList.get(i));
            }
            catch(Exception e){

            }


        }

    }


}
