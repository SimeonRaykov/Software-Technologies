import java.util.Scanner;

public class SumNintegers {
    public static void main(String[] args) {

        Scanner Scanner=new Scanner(System.in);

        var n=Integer.parseInt(Scanner.nextLine());
        var result=0;

        for (int i = 0; i <n ; i++) {

            var currNumber=Double.parseDouble(Scanner.nextLine());

            result+=currNumber;


        }
        System.out.println("Sum = "+result);


    }
}
