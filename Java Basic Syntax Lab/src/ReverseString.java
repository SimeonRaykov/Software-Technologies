import java.util.Scanner;

public class ReverseString {
    public static void main(String[] args) {
        Scanner Scanner=new Scanner(System.in);

        String input=Scanner.nextLine();

        System.out.println(new StringBuilder(input).reverse().toString());


    }
}
