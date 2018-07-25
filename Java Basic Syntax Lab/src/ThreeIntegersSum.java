import java.util.ArrayList;
import java.util.List;
import java.util.Scanner;

public class ThreeIntegersSum {
    public static void main(String[] args) {

        Scanner Scanner = new Scanner(System.in);
        List<Integer> list = new ArrayList<Integer>();
        for(int i = 0; i < 3; i++)
        {
            var currentNumber=Scanner.nextInt();

            list.add(currentNumber);
        }
        if (list.get(0) + list.get(1) == list.get(2)) {

            var smallerNumber =Math.min(list.get(0),list.get(1));
                    var biggerNumber = Math.max(list.get(0), list.get(1));

            System.out.printf("%d + %d = %d", smallerNumber, biggerNumber, list.get(2));

        } else if (list.get(0) + list.get(2) == list.get(1)) {

            var smallerNumber =Math.min(list.get(0),list.get(2));
            var biggerNumber = Math.max(list.get(0), list.get(2));

            System.out.printf("%d + %d = %d", smallerNumber, biggerNumber, list.get(1));
        } else if (list.get(1) + list.get(2) == list.get(0)) {

            var smallerNumber =Math.min(list.get(1),list.get(2));
            var biggerNumber = Math.max(list.get(1), list.get(2));

            System.out.printf("%d + %d = %d", smallerNumber, biggerNumber, list.get(0));
        } else {
            System.out.println("No");
        }


    }
}
